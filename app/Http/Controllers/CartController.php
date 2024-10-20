<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\CancelledProducts;
use App\Models\RefundedProducts;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use App\Models\BoughtProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;  

class CartController extends Controller
{
    //SHOWS PRODUCTS IN CART
    public function index(){
        $cart = Cart::all()->where('user_id',Auth::user()->id);
        $total = Cart::all()->where('user_id',Auth::user()->id)->sum('price');
        $quantity = Cart::all()->where('user_id',Auth::user()->id)->sum('quantity');
        $totalPrice = 0;
        foreach ($cart as $carts){
            $totalPrice += $carts -> price * $carts ->quantity;
        }
        return  view('Cart',compact('cart','total','quantity','totalPrice'));
    }
    //shows products in checkout
    public function checkoutindex(){
        $addresses = Address::all()->where('user_id',Auth::user()->id);
        $cart = Cart::all()->where('user_id',Auth::user()->id);
        $bought = Cart::where('user_id',Auth::user()->id)->first();
        $total = Cart::all()->where('user_id',Auth::user()->id)->sum('price');
        $totalitems = Cart::all()->where('user_id',Auth::user()->id)->sum('quantity');
        $totalPrice = 0;
        if($bought){
            foreach ($cart as $carts){
                $totalPrice += $carts -> price * $carts ->quantity;
            }
        return view('CheckOut',compact('addresses','cart','total','bought','totalitems','totalPrice'));
        }
        else{
            return redirect()->back()->with('error', 'No products detected');
        }
    }

    public function increase($id){
        $cart = Cart::find($id);
        $cart -> update([
            'quantity' => $cart->quantity+1
        ]);
            return redirect()->back()->with(['success' => 'Product added to cart'], 200);
    }

    public function decrease($id){
        $cart = Cart::find($id);
        $cart -> update([
            'quantity' => $cart->quantity-1
        ]);
            return redirect()->back()->with(['success' => 'Product added to cart'], 200);
    }

    //ADDS TO CART
    public function add_cart(Request $request, $id,) {

        if (Auth::id())
        {
            $user_id=auth()->user();

        $product = Products::find($id);
        $cart = Cart::where('user_id', $user_id->id)
        ->where('name',$product->name)
        ->where('photo',$product->photo)
        ->where('price',$product->price)
        ->where('details',$product->details)
        ->where('category',$product->category)
        ->first();

        if ($cart){
            $cart -> update([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'quantity' => $cart->quantity+1,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
        else{
        
        Cart::create([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'quantity' => 1,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        }
        return redirect()->back()->with(['success' => 'Product added to cart'], 200);
        }
        else{
            return redirect('login');
        }
    }


    //DELETES A PRODUCT FROM CART
    public function destroy($id){
        $product = Cart::find($id);
        $product -> delete();
        return redirect()->back()->with(['status' => "Product removed"]);
    }

    public function destroy2($id){
        $bought = BoughtProducts::find($id);
        $bought -> delete();
        return redirect()->back()->with(['status' => "Product removed"]);
    }

    public function destroy3($id){
        $refunded = RefundedProducts::find($id);
        $refunded -> delete();
        return redirect()->back()->with(['status' => "Product removed"]);
    }
    public function destroy4($id){
        $cancelled = CancelledProducts::find($id);
        $cancelled-> delete();
        return redirect()->back()->with(['status' => "Product removed"]);
    }
    //ADDS TO bought products
    public function checkout(Request $request){
        $user = Auth::user();
        $addresses = Address::all()->where('user_id',Auth::user()->id);
        $bought = Cart::get();
        if(count($addresses)>='1'){
        foreach($bought as $key => $value){
            BoughtProducts::create([
                'name' => $value->name,
                'photo' => $value->photo,
                'price' => $value->price,
                'details' => $value->details,
                'quantity' => $value->quantity,
                'category' => $value->category,
                'user_id' => $user_id = $request->user()->id,
                'user_name' => $user->name
            ]);
        }
        Cart::where('user_id', $user_id)->delete();
        return redirect('my_purchase')->with(['bought' => 'Bought successfully'], 200);
        }
        else{
            return redirect()->back()->with('error', 'No address detected');
        }

    }
    //BUY NOW
    public function buy_now(Request $request, $id,) {

        if (Auth::id())
        {
            $user_id=auth()->user();

        $product = Products::find($id);
        $cart = Cart::where('user_id', $user_id->id)
        ->where('name',$product->name)
        ->where('photo',$product->photo)
        ->where('price',$product->price)
        ->where('details',$product->details)
        ->where('category',$product->category)
        ->first();

        if ($cart){
            $cart -> update([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'quantity' => $cart->quantity+1,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
        else{
        
        Cart::create([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'quantity' => 1,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        }
        return redirect("/checkOut")->with(['status' => 'Product added to cart'], 200);
        }
        else{
            return redirect('login');
        }
    }
    public function bought(){
        $bought = BoughtProducts::all()->where('user_id',Auth::user()->id);
        $status = BoughtProducts::where('status', 'pending')->get();
        return view('Profile.My_Bought',compact('bought','status'));
    }
    public function refunded(){
        $refunded = RefundedProducts::all()->where('user_id',Auth::user()->id);
        return view('Profile.My_Refunded',compact('refunded'));
    }
    public function cancelled(){
        $cancelled = CancelledProducts::all()->where('user_id',Auth::user()->id);
        return view('Profile.My_Cancelled',compact('cancelled'));
    }

    public function updatestatus(Request $request,$id){
        $item = BoughtProducts::findOrFail($id);
        $item->status = $request->input('status');
        $item->save();
        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    
    public function delete($id){
        $item = BoughtProducts::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
}