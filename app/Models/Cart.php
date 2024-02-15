<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['products', 'user_id'];


    //RELATION TO USERS
    public function users(){
        return $this->belongsTo(User::class);
    }

    //RELATION TO PRODUCTS | WAIT MERGE
    // public function products(){
    //     return $this->hasMany(Products::class);
    // }

    //RELATION TO BOUGHT PRODUCTS
    public function bought(){
        return $this->hasOne(Bought::class);
    }
}
