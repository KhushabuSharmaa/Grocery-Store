<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;

class WebsiteSettingController extends Controller
{
    public function websitesetting(){
        $data = WebsiteSetting::first();
        return view('admin.user.setting.website', compact('data'));
    }
    public function setting(Request $request){
        $data = WebsiteSetting::first();
        $imagename = $data ? $data->logo : '';

        if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('web-setting'), $imagename);
    }

        WebsiteSetting::updateOrCreate(
            ['id'=>1],
            [
                'logo' =>$imagename,
                'email'=> $request->email,
                'contact' => $request->contact,
                'address' => $request->address
            ]
        );

        return redirect()->route('website.setting');
    }
}
