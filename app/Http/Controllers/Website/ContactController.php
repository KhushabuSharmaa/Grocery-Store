<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\validate;

class ContactController extends Controller
{
    public function contact(){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;

        return view('website.contact' , compact('logo','email','contact','address'));
    }

    public function userinquiry(Request $request){
        // Validation
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'msg'   => 'required',
        ]);
        Contact::create([
            'name' => $request->name,
             'email' => $request->email,
             'msg'  => $request->msg,
        ]);
     return redirect()->back()->with('success', 'Message Send successfully');
    }
}
