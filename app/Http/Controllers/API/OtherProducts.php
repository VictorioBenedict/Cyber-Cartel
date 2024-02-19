<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;

class OtherProducts extends Controller
{
    // INDEXES //

    //SHOWS ALL BOUGHT PRODUCTS
    public function index_bought(){
        $bought = BoughtProducts::all();
        return response()->json(['Bought Products:' => $bought]);
    }

    //SHOWS ALL CANCELLED PRODUCTS
    public function index_cancelled(){
        $cancelled = CancelledProducts::all();
        return response()->json(['Cancelled Products:' => $cancelled]);
    }

    //SHOWS ALL REFUNDED PRODUCTS
    public function index_refunded(){
        $refunded = RefundedProducts::all();
        return response()->json(['Refunded Products:' => $refunded]);
    }

    // REDIRECTION //

    //MOVES BOUGHT TO REFUNDED
    public function refund(){
        //
    }

    //MOVES BOUGHT TO CANCEL
    public function cancel(){
        //
    }
}
