<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;

class CartController extends Controller
{
    //SHOWS PRODUCTS IN CART
    public function index(){
        $cart = Cart::all();
        return response()->json(['Cart' => $cart]);
    }


    // NOT FIXED !!!!!!!!!
    public function add_cart($product){
        $product = Products::find($product);
        DB::table('addresses')->insert([
            'products' => $request->product,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        
        ]);
        return response()->json(['message' => "succesfully deleted"]);
    }


    //DELETES A PRODUCT FROM CART
    public function destroy($id){
        $product = Products::find($id);
        $product -> delete();
        return response()->json(['message' => "succesfully deleted"]);
    }

    //CART CHECKOUT (PRODUCTS REDIRECT TO BOUGHT PRODUCTS AND RECEIPT SHOWS)
    public function checkout(){
        //
    }
}
