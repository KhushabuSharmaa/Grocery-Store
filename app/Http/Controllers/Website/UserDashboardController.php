<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function userdashboard(){
        return view('userprofile.userdashboard');
    }
    public function usersetting(){
        return view('userprofile.usersetting');
    }
    public function editusersetting(){
        return view('userprofile.editusersetting');
    }
    public function updateusersetting(Request $request, $id){
        $update= User::findOrFail($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->gender = $request->gender;

      if($request->hasFile('image')){

        if($update->profile && Storage::disk('public')->exists('profile/'.$update->profile)){
            Storage::disk('public')->delete('profile/'.$update->profile);
        }
        $imagename = time().".".$request->file('image')->extension();
        $request->file('image')->storeAs('profile', $imagename, 'public');

        $update->profile = $imagename;
    }
        $update-> save();
        return redirect()->route('user.setting');
    }

      public function userlogout(Request $request){
       Auth::logout();
       return redirect()->route('home');
    }
}
