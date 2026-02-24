<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'category',
    'product_name',
    'mrp',
    'selling_price',
    'unit',
    'stock',
    'expiry_date',
    'image'
    ];
}
