<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status', // Add a status field to track approval/decline
        // Other order attributes
    ];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
}
