<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
     public function shop(){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;
        $product = Product::with('category')->paginate(6);

        $categories =Category::with('products')->get();

        return view('website.shop' , compact('logo','email','contact','address','product', 'categories'));
    }

    public function shopsearch(Request $request){

        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;

        $categories = Category::with('products')->get();

        $keyword = $request->search;

        $product = Product::with('category')
                    ->where('product_name','like','%'.$keyword.'%')
                    ->paginate(6);

        return view('website.shop', compact('logo','email','contact','address','product','categories'));
    }
}
