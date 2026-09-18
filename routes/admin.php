<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\UserListController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\WebsiteSettingController;
use App\Http\Controllers\AdminOrder\AdminOrderController;
use App\Http\Controllers\AdminOrder\AdminTransactionController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminProfileSettingController;

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
Route::get('/productdetails', [ProductController::class, 'productdetails'])->name('product.details');
Route::post('/productdetails', [ProductController::class, 'addproduct'])->name('add.product');
Route::get('/productlist', [ProductController::class, 'productlist'])->name('product.list');
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])->name('edit.product');
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct'])->name('update.product');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('delete.product');

// setting
Route::get('/websitesetting', [WebsiteSettingController::class, 'websitesetting'])->name('website.setting');
Route::post('/setting', [WebsiteSettingController::class, 'setting'])->name('setting');

//Admin profile setting
Route::get('/Admin.profile.setting', [AdminProfileSettingController::class, 'Adminprofilesetting'])->name('Admin.profile.setting');
Route::post('/adminsetting', [AdminProfileSettingController::class, 'adminsetting'])->name('admin.setting');

//orders
Route::get('/allOrder', [AdminOrderController::class, 'allOrder'])->name('allOrder');
Route::get('/edit_admin_order/{id}', [AdminOrderController::class, 'editadminorder'])->name('edit.adminorder');
Route::post('/update_admin_order/{id}', [AdminOrderController::class, 'updateadminorder'])->name('update.adminorder');
Route::get('/delete_admin_order/{id}', [AdminOrderController::class, 'deleteadminorder'])->name('delete.adminorder');

Route::get('/pending', [AdminOrderController::class,'pendingOrder'])->name('pending.order');
Route::get('/completed', [AdminOrderController::class,'completedOrder'])->name('completed.order');
Route::get('/cancelled', [AdminOrderController::class,'cancelledOrder'])->name('cancelled.order');

//transaction
Route::get('/admin.transaction', [AdminTransactionController::class,'admintransaction'])->name('admin.transaction');

//admindashboard
Route::get('/dashboard', [AdminDashboardController::class,'dashboardcard'])->name('admin.dashboard');

//website enquiry
Route::get('/website.enquiry', [AdminContactController::class,'websiteEnquiry'])->name('website.enquiry');

});
Route::post('/logout', [UserListController::class, 'logout'])->name('admin.logout');
});













