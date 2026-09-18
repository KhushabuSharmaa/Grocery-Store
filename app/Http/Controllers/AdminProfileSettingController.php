<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class AdminProfileSettingController extends Controller
{
    public function Adminprofilesetting(){
        $data = admin::first();
        return view('admin.user.setting.adminprofile', compact('data'));
    }
    public function adminsetting(Request $request){
        $data = admin::first();
        $imagename = $data ? $data->profile : '';

        if ($request->hasFile('profile')) {
        $image = $request->file('profile');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('admin-profile-setting'), $imagename);
    }

        admin::updateOrCreate(
            ['id'=>1],
            [
                'name' =>$request->name,
                'email'=> $request->email,
                'role'=>$request->role,
                'profile' => $imagename,
            ]
        );

        return redirect()->route('Admin.profile.setting');
}
}