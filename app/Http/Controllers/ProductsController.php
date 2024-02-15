<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;


// FOR NOW LANG ITO NA CONTROLLER, AKAY MARCUSS YUNG GAGAMITIN TALAGA

class ProductsController extends Controller
{
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
