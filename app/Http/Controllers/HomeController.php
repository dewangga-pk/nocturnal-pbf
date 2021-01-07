<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemSelected;
use App\Lib\ResponseBase;
use Illuminate\Http\Request;
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
            ->paginate();
        return view('shop');
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
}
