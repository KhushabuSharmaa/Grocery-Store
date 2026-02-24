<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;

class AdminController extends Controller
{
    public function adminLogin(Request $request){
        $request->validate([
        'email'=>'required|email',
        'password'=>'required'
        ]);

        $credentials=$request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            $admin = Auth::guard('admin')->user();
            if($admin->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }
            Auth::guard('admin')->logout();
            return back()->with('error','You are not Authorized as Admin role');
        }
        return back()->with('error','Invalid Credentials');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Logout Successfully!');
    }

}
