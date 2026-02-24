<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\UserListController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\ProductController;

Route::get('/admin', function () {
    return view('admin.adminLogin');
})->name('admin.login');
Route::post('/adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');


Route::middleware('admin.role')->group(function(){
Route::prefix('admin')->group(function () {

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

//  userlist
Route::get('/userlist', [UserListController::class, 'userlist'])->name('user.list');
Route::get('/edituser/{id}', [UserListController::class, 'edituser'])->name('edit.user');
Route::post('/updateuser/{id}', [UserListController::class, 'updateuser'])->name('update.user');

Route::get('/activeuserlist',[UserListController::class,'activeuserlist'])->name('activeuserlist');
Route::get('/inactiveuserlist',[UserListController::class,'inactiveuserlist'])->name('inactiveuserlist');
Route::post('/blockuser/{id}',[UserListController::class,'blockUser'])->name('block.user');
Route::post('/unblockuser/{id}',[UserListController::class,'unBlockuser'])->name('unblock.user');


// calegorylist
Route::get('/usercategory', [CategoryController::class, 'usercategory'])->name('user.category');
Route::post('/addcategory', [CategoryController::class, 'addcategory'])->name('add.category');
Route::get('/categorylist', [CategoryController::class, 'categorylist'])->name('category.list');

Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('edit.category');
Route::post('/updatecategory/{id}', [CategoryController::class, 'update'])->name('update.category');
Route::get('/deletecategory/{id}', [CategoryController::class, 'deletecategory'])->name('delete.category');

// product
Route::get('productdetails', [ProductController::class, 'productdetails'])->name('product.details');
Route::post('productdetails', [ProductController::class, 'addproduct'])->name('add.product');
Route::get('productlist', [ProductController::class, 'productlist'])->name('product.list');
});
Route::post('/logout', [UserListController::class, 'logout'])->name('admin.logout');
});













