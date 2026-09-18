<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function websiteEnquiry(){
        $contactlist = Contact::all();
        return view('admin.websiteEnquiry', compact('contactlist'));
    }
}
