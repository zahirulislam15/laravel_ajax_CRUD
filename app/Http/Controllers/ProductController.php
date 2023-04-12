<?php

namespace App\Http\Controllers;
use App\Models\productList;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        $products= productList::latest()->paginate(5);
        return view('productList',compact('products'));
    }

    public function addProduct(Request $request){
        $request->validate(
            [
                'name' => 'required|unique:product_lists',
                'price' => 'required'
            ],
            [
                'name.required' => 'Product name required',
                'name.unique' => 'Product already exists',
                'price.required' => 'Price required',
            ]
        );
        $product = new productList();
        $product->name  = $request->name;
        $product->price  = $request->price;
        $product->save();

        return response()->json([
            'status'=> 'success',
        ]);
    }
}
