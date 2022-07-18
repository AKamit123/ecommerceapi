<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class Productcontroller extends Controller
{
    public function create(Request $request){
        $product = new product;
        $product->product_name = $request->product_name;
         $product->product_discription = $request->product_discription;
          $product->product_price = $request->product_price;
           $product->product_image = $request->product_image;
           $product->save();
           return response()->json($product);
    }

    public function show(){
        $product = product::all();
        return response()->json($product);
    }

    public function showbyid($id){
        $product =  product::find($id);
        return response()->json($product);
    }


    public function updatebyid(Request $request, $id){
    $product = product::find($id);
     $product->product_name = $request->product_name;
   $product->product_discription = $request->product_discription;
   $product->product_price = $request->product_price;
   $product->product_image = $request->product_image;
   $product->save();
   return response()->json($product);

 }
   public function destroy($id){
   $product = product::whereId($id)->first();
   $product->delete();
   return response()->json($product);

  }

}
