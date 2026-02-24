<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function productdetails(Request $request){
        $data = Category::all();
        return view('admin.user.productdetails.productform', compact('data'));
    }

    public function addproduct(Request $request){
    $imagename =time(). '.'.$request->image->extension();
        //    dd($imagename);
    $request->file('image')->storeAs('image', $imagename, 'public');

    Product::create([
     'category' => $request->category,
    'product_name' =>$request->product_name,
    'mrp' => $request->mrp,
    'selling_price' => $request->selling_price,
    'unit' => $request->unit,
    'stock' =>$request->stock,
    'expiry_date' =>$request->expiry_date,
    'image' =>$imagename,
    'status' => $request->status
    ]);
    return redirect()->route('product.list')->with('success', 'Product Added Successfully');
    }

    public function productlist(){
    $productdata = Product::all();
    return view('admin.user.productdetails.productlist', compact('productdata'));
    }
}
