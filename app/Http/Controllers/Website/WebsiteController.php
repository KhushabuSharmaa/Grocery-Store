<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use App\Models\Product;
use App\Models\Category;
class WebsiteController extends Controller
{
    public function index(){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;
        $product = Product::with('category')->get();

        $categories =Category::with('products')->get();
        // For Bestseller Products
        $BestsellerProductsbox1 = Product::latest()->orderBy('id', 'desc')->limit(6)->get();
        $BestsellerProductsbox2 = Product::latest()->limit(4)->get();

        return view('website.website' , compact('logo','email','contact','address','product', 'categories','BestsellerProductsbox1','BestsellerProductsbox2'));
    }

    public function productdetails($id){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;
        $product = Product::where('id',$id)->first();
        $relatedProduct = Product::with('category')->where('category_id',$product->category_id)
        ->where('id', '!=', $product->id)
        ->latest()
        ->take(8)
        ->get();

        $category = Category::where('id', $product->category_id)->first();

         return view('website.shop-details', compact('logo','email','contact','address', 'product','relatedProduct'));
    }
}
