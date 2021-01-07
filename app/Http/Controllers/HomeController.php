<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemSelected;
use App\Lib\ResponseBase;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index()
    {
        if (auth()->user()->isA('admin')){
            return redirect('/admin/dashboard');
        }elseif (auth()->user()->isA('user')){
            return redirect('/');
        }else{
            return abort(403);
        }
    }

    public function home()
    {
        $newItem = Item::with('category')
            ->limit(5)
            ->orderBy('created_at','DESC')
            ->get();
        $trendItem = Item::with('category')
            ->limit(5)
            ->orderBy('category_id','DESC')
            ->get();
        $bestItem = Item::with('category')
            ->limit(5)
            ->orderBy('category_id','ASC')
            ->get();
        return view('welcome')->with([
            "fresh" => $newItem,
            "trend" => $trendItem,
            "bestItem" => $bestItem
        ]);
    }

    public function shop()
    {
        $items = Item::with('category')->orderBy('created_at','DESC')
            ->paginate(15);
        return view('shop')->with(["items" => $items]);
    }

    public function product($id)
    {
        $item = Item::find($id);
        return view('product_details')->with(["product" => $item]);
    }

    public function category($id)
    {
        return view('shop')->with(["category" => $id]);
    }

    public function addToCart(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "item_id" => ["required","integer","exists:items,id"],
            "quantity" => ["required","integer"]
        ]);

        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back()->withInput();
        }

        try {
            $item = Item::findOrFail($request->item_id);
            if ($item->unit - $request->quantity >= 0){
                ItemSelected::create([
                    "transaction_id" => null,
                    "item_id" => $request->item_id,
                    "user_id" => auth()->id(),
                    "quantity" => $request->quantity,
                    "status" => 1
                ]);

                toastSuccess("Success add to cart");
                return redirect('/shop');
            }else{
                toastError("Exit the limit");
                return redirect()->back()->withInput();
            }

        }catch (\Exception $exception){

            toastError($exception->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function cart()
    {
        $itemSelected = \App\ItemSelected::with('item')->where('user_id',auth()->id())
            ->where('status',1)
            ->get();
        $total = 0;
        foreach ($itemSelected as $item){
            $total+=($item->quantity*$item->item->price);
        }
        return view('cart')->with(['carts' => $itemSelected,'total' => $total]);
    }

    public function proof()
    {
        $indonesia = json_decode(file_get_contents(base_path('/storage/indonesia.json')),true);
        $itemSelected = \App\ItemSelected::with('item')->where('user_id',auth()->id())
            ->where('status',1)
            ->get();
        $total = 0;
        foreach ($itemSelected as $item){
            $total+=($item->quantity*$item->item->price);
        }
        return view('checkout')->with(['carts' => $itemSelected,'total' => $total, 'indonesia' => $indonesia]);
    }

    public function transaction(Request $request)
    {
        //validation
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(),[
            "proof" => ["required","image"],
        ]);

        //check validation
        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        try {
            DB::beginTransaction();

            //check if file exists
            if (!$request->hasFile('proof')){
                toastError("You must upload transfer proof");
                return redirect()->back();
            }

            //save proof image
            $name = uniqid('proof_'.auth()->id().'_');
            $filename = $name.'.'.$request->file('proof')->clientExtension();
            $request->file('proof')->storeAs('/public/proof',$filename);

            //create new transaction
            $newTransaction = Transaction::create([
                "invoice" => uniqid("INV"),
                "order_note" => null,
                "status" => 1,
                "user_id" => auth()->id(),
                "image" => $filename,
                "paid_at" => null,
                "total" => 0
            ]);

            //load all cart user
            $carts = ItemSelected::with('item')
                ->where('user_id', auth()->id())
                ->where('status',1)
                ->get();

            $total = 0;

            //update data cart
            foreach ($carts as $cart){
                $cart->transaction_id = $newTransaction->id;
                $cart->status = 2;
                $cart->save();
                $item = Item::find($cart->item_id);
                if ($item->unit - $cart->quantity < 0){
                    DB::rollBack();
                    toastError("Index out of stock");
                    return redirect()->back();
                }
                $total += $cart->quantity*$cart->item->price;
                $item->unit = $item->unit - $cart->quantity;
                $item->save();
            }

            //update transaction total
            $newTransaction->total = $total;
            $newTransaction->save();

            //commit transaction if success
            DB::commit();

            //return response
            toastSuccess("Your order is in process");
            return redirect('/shop');

        }catch (\Exception $exception){

            //roleback transaction if error happen
            DB::rollBack();

            //return error response
            toastError($exception->getMessage());
            return redirect()->back();
        }
    }

}
