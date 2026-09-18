<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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
    'category_id' => $request->category,
    'product_name' =>$request->product_name,
    'mrp' => $request->mrp,
    'selling_price' => $request->selling_price,
    'unit' => $request->unit,
    'stock' =>$request->stock,
    'expiry_date' =>$request->expiry_date,
    'image' =>$imagename,
    'short_description'=>$request->short_description,
    'long_description'=>$request->long_description,
    'status' => $request->status
    ]);
    return redirect()->route('product.list')->with('success', 'Product Added Successfully');
    }

    public function productlist(){
    $productdata = Product::with('category')->get(); // with('category') add karo
    return view('admin.user.productdetails.productlist', compact('productdata'));
}

    public function editproduct($id){
        $editdata = Product::findOrfail($id);
        $data = Category::all();
        return view('admin.user.productdetails.editproduct', compact('editdata','data'));
    }

    public function updateproduct(Request $request, $id){
        $update = Product::findOrfail($id);

        $update->category_id = $request->category;
        $update->product_name = $request->product_name;
        $update->mrp = $request->mrp;
        $update->selling_price = $request->selling_price;
        $update->unit = $request->unit;
        $update->stock = $request->stock;
        $update->expiry_date = $request->expiry_date;
        $update->short_description = $request->short_description;
        $update->long_description = $request->long_description;
        $update->status = $request->status;

       if($request->hasFile('image')){
       if($update->image && Storage::disk('public')->exists('profile/'.$update->image)){
       Storage::disk('public')->delete('image/'.$update->image);
      }
        $imagename = time(). "." .$request->image->extension();    
        $request->file('image')->storeAs('image', $imagename, 'public');
        $update->image = $imagename;
     }

        $update-> save();

        return redirect()->route('product.list')->with('success', 'Record updated successfully');
   }

    public function deleteproduct($id){

      $deletepro = Product::findOrfail($id);
      if($deletepro->image && Storage::disk('public')->exists('image/'.$deletepro->image)){
      Storage::disk('public')->delete('image/'.$deletepro->image);
      }
      $deletepro->delete();
        return redirect()->route('product.list')->with('success', 'Record deleted successfully');
      }
}
