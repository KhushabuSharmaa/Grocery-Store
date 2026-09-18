<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'category_id',
    'product_name',
    'mrp',
    'selling_price',
    'unit',
    'stock',
    'expiry_date',
    'image',
    'short_description',
    'long_description'
    ];

     public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

