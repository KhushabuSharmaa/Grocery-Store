<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthUserController extends Controller
{
   public function adduser(Request $request){
    $student = User::create([
     'name' => $request->name,
     'email' => $request->email,
     'password' => Hash::make($request->password),
    ]);
    return redirect('/')->with('success', 'User Login Successfully');
   }

    public function loginuser(Request $request){
    if(Auth::attempt([
        'email' => $request->email,
     'password' => $request->password,
    ])){
        $request->session()->regenerate();
        return redirect('/')->with('success', 'User Register Successfully');
    }

    return back()->with('error','Invalid Email or password');
}

}
