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

    // update product

    public function updateProduct(Request $request){
    //    dd($request->all());
        $request->validate(
            [
                'up_name' => 'required|unique:product_lists,name,'.$request->up_id.',id',
                'up_price' => 'required',
            ],
            [
                'up_name.required' => 'Product name required',
                'up_name.unique' => 'Product already exists',
                'up_price.required' => 'Price required',
            ]
        );
        ProductList::where('id', $request->up_id)->update([
            'name' => $request->up_name,
            'price' => $request->up_price,
        ]);

        return response()->json([
            'status'=> 'success',
        ]);
    }

    public function deleteProduct(Request $request){
        ProductList::find($request->product_id)->delete();
        return response()->json([
            'status'=> 'success',
        ]);
    }

}
