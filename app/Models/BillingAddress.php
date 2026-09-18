<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    protected $fillable = [
    'user_id',
    'address',
    'city',
    'country',
    'pincode',
    'mobile'
];

    public function user(){
    return $this->belongsTo(User::class);
}
}
