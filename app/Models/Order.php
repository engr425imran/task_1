<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'adderss',
        'price',
        'user_id',
        'order_name',
        'user_name'

        // add all other fields
    ];
}
