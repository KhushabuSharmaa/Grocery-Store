<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function usercategory(){
        return view('admin.user.category.category');
    }
    public function addcategory(Request $request){
     $student = Category::create([
     'categoryname' => $request->categoryname,
    ]);
    return redirect()->route('category.list')->with('success', 'Category Added Successfully');
    }
    public function categorylist(){
        $data=Category::all();
        return view('admin.user.category.categorylist', compact('data'));
    }

     public function edit($id){
        $editdata = Category::findOrfail($id);
        return view('admin.user.category.editcategory', compact('editdata'));

      }

        public function update(Request $request,$id){
        $user = Category::findOrfail($id);
    //    dd($user);
        $user->categoryname = $request->categoryname;
        $user-> save();

        return redirect()->route('category.list')->with('success', 'Record updated successfully');
      }

       public function deletecategory($id){
        Category::findOrfail($id)->destroy($id);
        return redirect()->route('category.list')->with('success', 'Record deleted successfully');
      }
}
