<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;


// API CONTROLLER 

class ProductsController extends Controller
{

    //SEARCHES FOR A PRODUCT BY NAME
    public function search_product($name){
        return Products::where("name", $name)->get();    
    }

    //SEARCHES FOR A CATEGORY BY NAME
    public function search_category($category){
        return Products::where("category", $category)->get();  
    }

    //CPU INDEX
    public function index_cpu(){
        return Products::where("category", 'CPU')->get(); 
    }

    //GPU INDEX
    public function index_gpu(){
        return Products::where("category", 'GPU')->get(); 
    }

    //MOBO INDEX
    public function index_mobo(){
        return Products::where("category", 'MOBO')->get(); 
    }

    //RAM INDEX
    public function index_ram(){
        return Products::where("category", 'RAM')->get(); 
    }

    //STORAGE INDEX
    public function index_storage(){
        return Products::where("category", 'STORAGE')->get(); 
    }

    //PSU INDEX
    public function index_psu(){
        return Products::where("category", 'PSU')->get(); 
    }

    //CASE INDEX
    public function index_case(){
        return Products::where("category", 'CASE')->get();
    }

    //STORES A PRODUCT
    public function store(Request $request){
        $products = Products::all();
        DB::table('products')->insert([
            'name' => $request->name,
            'photo' => $request->photo,
            'price' => $request->price,
            'details' => $request->details,
            'category' => $request->category,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }

    //SHOWS ALL PRODUCTS
    public function index(){
        $products = Products::all();
        return response()->json(['Products' => $products]);
    }

    //DELETES A PRODUCT
    public function destroy($id){
        $product = Products::find($id);
        $product -> delete();
        return response()->json(['message' => "succesfully deleted"]);
    }
}
