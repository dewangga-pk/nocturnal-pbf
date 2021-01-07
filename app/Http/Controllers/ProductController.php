<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = Item::with('category')->get();
        return view('admin.product')->with(['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.new_product')->with(["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //make validation
        $validation = Validator::make($request->all(),[
            "itemName" => ["required","string"],
            "itemDescription" => ["required","string"],
            "image" => ["required","image"],
            "category" => ["required","numeric","exists:categories,id"],
            "price" => ["required","integer"],
            "unit" => ["required","integer"]
        ]);

        //check validation
        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        try {

            //save image
            if ($request->hasFile('image')){
                $filepath = "/storage/image/products";
                $filename = uniqid("prod_").'.'.$request->file('image')->clientExtension();
                $request->file('image')->storeAs($filepath,$filename);
                $path = $filepath."/".$filename;
            }

            //create new item
            Item::create([
                "item_name" => $request->itemName,
                "item_description" => $request->itemDescription,
                "image" => $path,
                "category_id" => $request->category,
                "price" => $request->price,
                "unit" => $request->unit
            ]);

            //return success message
            toastSuccess("Success upload new product");
            return redirect(route('products.index'));

        }catch (\Exception $exception){

            //return error message
            toastError($exception->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item = Item::with('category')->findOrFail($id);
        $categories = Category::all();
        return view('admin.edit_product')->with(["item" => $item,"categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //make validation
        $validation = Validator::make($request->all(),[
            "itemName" => ["required","string"],
            "itemDescription" => ["required","string"],
            "category" => ["required","numeric","exists:categories,id"],
            "price" => ["required","integer"],
            "unit" => ["required","integer"]
        ]);

        //check validation
        if ($validation->fails()){
            toastError($validation->errors()->first());
            return redirect()->back();
        }

        try {

            //save image
            if ($request->hasFile('image')){
                $filepath = "/storage/image/products";
                $filename = uniqid("prod_").'.'.$request->file('image')->clientExtension();
                $request->file('image')->storeAs($filepath,$filename);
                $path = $filepath."/".$filename;

                //update item with image
                Item::where('id',$id)->update([
                    "item_name" => $request->itemName,
                    "item_description" => $request->itemDescription,
                    "image" => $path,
                    "category_id" => $request->category,
                    "price" => $request->price,
                    "unit" => $request->unit
                ]);
            }else{

                //update without image
                Item::where('id',$id)->update([
                    "item_name" => $request->itemName,
                    "item_description" => $request->itemDescription,
                    "category_id" => $request->category,
                    "price" => $request->price,
                    "unit" => $request->unit
                ]);
            }

            //return success message
            toastSuccess("Success update product");
            return redirect(route('products.index'));

        }catch (\Exception $exception){

            //return error message
            toastError($exception->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
