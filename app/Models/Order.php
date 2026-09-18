<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'user_id',
    'orderId',
    'product_detail',
    'status'
];

        public function user(){
        return $this->belongsTo(User::class);
    }

    public function billingAddress(){
        return $this->hasOne(BillingAddress::class,'user_id','user_id');
    }
}
