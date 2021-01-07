<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemSelected;
use App\Lib\ResponseBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function homeProduct()
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

        return ResponseBase::success("Success get data product",["data"=>[
            "fresh" => $newItem,
            "trend" => $trendItem,
            "best" => $bestItem
        ]]);
    }

    public function getCategory($id)
    {
        $items = Item::with('category')->where("category_id",$id)
            ->paginate();
        return ResponseBase::success("Success get data category",["data" => $items]);
    }

    public function shop()
    {
        $items = Item::with('category')->orderBy('created_at','DESC')
            ->paginate();
    }

    public function addToCart(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "item_id" => ["required","integer","exists:items,id"],
            "quantity" => ["required","integer"]
        ]);

        if ($validation->fails()){
            return ResponseBase::error("Invalid request parameter", ["error" => $validation->failed()]);
        }

        try {
            ItemSelected::create([
                "transaction_id" => null,
                "item_id" => $request->item_id,
                "user_id" => auth()->id(),
                "quantity" => $request->quantity,
                "status" => 1
            ]);

            return ResponseBase::success("Success Add to chart");
        }catch (\Exception $exception){

            return ResponseBase::error($exception->getMessage());
        }
    }

    public function getSingleProduct($id)
    {
        $item = Item::find($id);
        return ResponseBase::success("Success get single product",["data" => $item]);
    }
}
