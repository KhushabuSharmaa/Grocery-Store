<?php

namespace App\Http\Controllers\UserOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
 public function userorder()
{
    $orderdetails = Order::with(['user','billingAddress'])->where('user_id', Auth::id())->get();
    return view('userprofile.userorder.order', compact('orderdetails'));
}

   public function cancelOrder($id){
    $order = Order::where('id',$id)
            ->where('user_id', Auth::id())
            ->first();

    if($order){
        $order->status = 'cancelled';
        $order->save();
    }
    return redirect()->back()->with('success','Order Cancelled Successfully');
}

   public function usertransaction(){
        $transactionlist = Transaction::with(['user', 'order'])->where('user_id', Auth::id())->get();
        return view('userprofile.userorder.usertransaction',compact('transactionlist'));
    }
}
