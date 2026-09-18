<?php

namespace App\Http\Controllers\AdminOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class AdminTransactionController extends Controller
{
    public function admintransaction(){
        $transactionlist = Transaction::with(['user', 'order'])->get();
        return view('admin.admintransaction.transaction',compact('transactionlist'));
    }
}
