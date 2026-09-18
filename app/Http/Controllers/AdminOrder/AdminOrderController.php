<?php

namespace App\Http\Controllers\AdminOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\BillingAddress;
use App\Models\Transaction;

class AdminOrderController extends Controller
{
    public function allOrder(){
       $orderdata = Order::with(['user','billingAddress'])->get();
        return view('admin.adminorder.allorderlist', compact('orderdata'));
    }

    public function editadminorder($id){
      $editorder = Order::with(['user','billingAddress'])->findOrFail($id);
      return view('admin.adminorder.editadminorder', compact('editorder'));
    }
    public function updateadminorder(Request $request, $id){
        $updateorder = Order::findOrFail($id);
        $updateorder->status = $request->status;
        $updateorder->save();

        // Order confirm hone par transaction paid
        if($request->status == 'confirm'){
        Transaction::where('order_id', $id)
            ->update(['status' => 'paid']);
    }
      if($request->status == 'pending'){
        Transaction::where('order_id', $id)
            ->update(['status' => 'unpaid']);
    }
     if($request->status == 'cancelled'){
        Transaction::where('order_id', $id)
            ->update(['status' => 'unpaid']);
    }

        return redirect()->route('allOrder')
            ->with('success','Order Status Updated Successfully');
    }

    public function pendingOrder(){
    $orderdata = Order::with(['user','billingAddress'])
                ->where('status','pending')
                ->get();

    return view('admin.adminorder.pendingorder',compact('orderdata'));
}

    public function completedOrder(){   
    $orderdata = Order::with(['user','billingAddress'])
                ->where('status','confirm')
                ->get();

    return view('admin.adminorder.completedorder',compact('orderdata'));
}

    public function cancelledOrder(){
    $orderdata = Order::with(['user','billingAddress'])
                ->where('status','cancelled')
                ->get();

    return view('admin.adminorder.cancelledorder',compact('orderdata'));
}

    public function deleteadminorder($id){
    $order = Order::findOrFail($id);
    $order->delete();
    return redirect()->route('allOrder')
            ->with('success','Order deleted Successfully');
}
}
