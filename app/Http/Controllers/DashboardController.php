<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('DashBoard');
    }

    public function index(){
        $products = Products::get();
        $CPU = Products::where("category","CPU")->get();
        $Motherboard = Products::where("category","Motherboard")->get();
        $RAM = Products::where("category","RAM")->get();
        $GPU = Products::where("category","GPU")->get();
        $PSU = Products::where("category","PSU")->get();
        $Case = Products::where("category","Case")->get();
        $Storage = Products::where("category","Storage")->get();
        return view('DashBoard', compact('products','CPU','Motherboard','GPU','RAM','PSU','Storage','Case'));
    }

    
    public function signup(){
        return view('Signup');
    }

    public function details(int $id){
        $product = Products::findOrFail($id);
        return view('Product_demo',compact('product'));
    }
}
