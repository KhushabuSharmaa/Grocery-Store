<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Transaction;

class AdminDashboardController extends Controller
{
    public function dashboardcard(){
        $user = User::count();
        $activeuser = User::where('block_status',"1")->count();
        $unactiveuser = User::where('block_status',"0")->count();
        $order = Order::count();

        $userdata = User::where('block_status',"1")->orderBy('id','desc')->limit(6)->get();

        $transaction = Transaction::orderBy('id','desc')->limit(6)->get();

        $orderlist = Order::all();

        return view('admin.dashboard',compact('user','activeuser','unactiveuser','order','userdata','transaction','orderlist'));
    }
}
