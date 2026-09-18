<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\BillingAddress;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function order(Request $request){
        // dd($request->all());
 
    $user = Auth::user();

    $billing = BillingAddress::create([
        'user_id' => $user->id,
        'address' => $request->address,
        'city' => $request->city,
        'country' => $request->country,
        'pincode' => $request->pincode,
        'mobile' => $request->mobile
    ]);

    $order = Order::create([
        'user_id' => $user->id,
        'orderId' =>'ORD' . rand(),
        'product_detail' => json_encode($request->products),
        'status' => 'pending'
    ]);


     $amount = 0;
    foreach($request->products as $product){
        $amount += $product['price'] * $product['quantity'];
    }

     // Transaction Save
    Transaction::create([
        'user_id' => $user->id,
        'order_id' => $order->id,
        'transactionId' => 'TXN'.rand(),
        'payment_mode' => $request->payment_mode,
        'amount' => $amount,
        'status' => 'unpaid'
    ]);

    session()->forget('cart');
    return redirect('/')->with('success','Order Placed Successfully');
}
}