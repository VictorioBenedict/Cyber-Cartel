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

    //ADDS EXISTING PRODUCT TO CART
    // public function addCart(Request $request){
    //     $id = $request->input('product');
    //     $product_id = Products::with($id)->get();
    //     DB::table('carts')->insert([
    //         'products' => $product_id,
        
    //     ]);
        
    // }

    public function addCart($product){
        $product = Products::find($product);
        DB::table('addresses')->insert([
            'products' => $request->product,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        
        ]);
        return response()->json(['message' => "succesfully deleted"]);
    }

    public function store(Request $request){
        $cart = Address::all();
        $product = Products::with('')->whereRelation('category','user_id',2)->first();
        $user_id = $request->user()->id;
        $user_id = $request->user()->id;
        $user_id = $request->user()->id;
        $user_id = $request->user()->id;
        $user_id = $request->user()->id;
        DB::table('addresses')->insert([
            'region' => $request->region,
            'city' => $request->city,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'user_id' => $user_id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        
        ]);
    }

    //REMOVES A PRODUCT FROM CART
    public function delete(){
        //
    }
}
