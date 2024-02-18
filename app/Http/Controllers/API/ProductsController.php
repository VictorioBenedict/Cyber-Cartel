<?php

namespace App\Http\Controllers\API;

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

        // NEEDS RESPONSE IF NOT FOUND
        
    }

    //SHOWS
    public function search_category($category){
        return Products::where("category", $category)->get();   

        
        // NEEDS RESPONSE IF NOT FOUND
        
    }

    //SHOWS ALL CPU - NOT FIXED
    public function index_cpu(){
        $cpu = Products::with('CPU')->get();
        return response()->json(['CPUs' => $cpu]);
    }

    //SHOWS ALL GPU - NOT FIXED
    public function index_gpu(){
        $gpu = DB::table('products')->where('category', 'GPU');
        return response()->json(['GPU' => $gpu]);
    }

    //SHOWS ALL RAM
    public function index_ram(){
        //
    }

    //SHOWS ALL CPU
    public function index_psu(){
        //
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
    
        // ORIGINAL FUNCTION
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255|string',
    //         'photo' => 'nullable|mimes:png,jpg,jpeg,webp',
    //         'price' => 'required|integer',
    //         'details' => 'required|max:255|string',
    //         'category' => 'required|max:255|string',
    //     ]);

        
    //     Products::create([
    //         'name' => $request->name,
    //         'photo' => $path . $filename,
    //         'price' => $request->price,
    //         'details' => $request->details,
    //         'category' => $request->category,
    //     ]);
    // }
}
