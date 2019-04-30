<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\supplierProduct;
class supplierProductController extends Controller
{
    
    
    public function storeProduct(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'product_name' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
           ]);
           if($validation->passes())
           {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $product = new supplierProduct();
            $product->name = $request->product_name;
            $product->brand = $request->brand;
            $product->quantity = $request->quantity;
            $product->image = $new_name;
            $product->save();
            return response()->json([
             'message'   => 'Product Stored Successfully',
             'success'   => 1,
             'class_name'  => 'alert-success'
            ]);
           }
           else
           {
            return response()->json([
             'message'   => $validation->errors()->all(),
             'success'   => 0,
             'class_name'  => 'alert-danger'
            ]);
           }
       
    }
}
