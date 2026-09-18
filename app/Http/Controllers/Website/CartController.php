<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;

class CartController extends Controller
{
    public function addtocart(Request $request){

    $cart = session()->get('cart', []);
        $id = $request->product_id;
        if(!isset($cart[$id])){
            $cart[$id]=[
             "product_name" => $request->product_name,
             "price" => $request->price,
             "image" => $request->image,
             "quantity" => $request->quantity,
            ];
        }else{
            $cart[$id]['quantity'] += 1;
        }
        session()->put('cart', $cart);
        // dd($cart);
        return back()->with('success', 'Cart Updated Successfully');
    }

    public function cartPage(){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;
        return view('website.cart', compact('logo','email','contact','address'));

    }

    public function remove($id){
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return back()->with('success', 'Cart Updated Successfully');
    }

    public function updateQty(Request $request){
      $cart = session()->get('cart');
      $id = $request->id;

      if($request->type == 'plus'){
        $cart[$id]['quantity']++;
      }
      if($request->type == 'minus'){
        if($cart[$id]['quantity'] > 1){
          $cart[$id]['quantity']--;
        }
      }
      session()->put('cart', $cart);

      return response()->json([
       'qty'=>$cart[$id]['quantity']
      ]);

    }

    public function checkout(){
        $setting = WebsiteSetting::first();
        $logo = $setting->logo;
        $email = $setting->email;
        $contact = $setting->contact;
        $address = $setting->address;
         return view('website.checkout', compact('logo','email','contact','address'));
    }
}
