<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\UserDashboardController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\OrderController;
use App\Http\Controllers\UserOrder\UserOrderController;
use App\Http\Controllers\Website\ShopController;
use App\Http\Controllers\Website\ContactController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/userdashboard', [UserDashboardController::class, 'userdashboard'])->name('user.dashboard');

Route::get('/usersetting', [UserDashboardController::class, 'usersetting'])->name('user.setting');
Route::get('/editusersetting', [UserDashboardController::class, 'editusersetting'])->name('edituser.setting');
Route::post('/updateusersetting/{id}', [UserDashboardController::class, 'updateusersetting'])->name('updateuser.setting');
Route::post('/userlogout', [UserDashboardController::class, 'userlogout'])->name('user.logout');

Route::get('/shop_product_details/{id}', [WebsiteController::class, 'productdetails'])->name('shop_product_details');
Route::post('/add_to_cart', [CartController::class, 'addtocart'])->name('add_to_cart');
Route::get('/cart', [CartController::class, 'cartPage'])->name('cart');
Route::get('/remove_from_cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/update-cart-qty', [CartController::class, 'updateQty']);
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');


Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
//shop.search
Route::post('/shop_search', [ShopController::class, 'shopsearch'])->name('shop.search');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/user.inquiry', [ContactController::class, 'userinquiry'])->name('user.inquiry');

// Route::get('/shop', function () {
//     return view('website.shop');
// })->name('shop');

// Route::get('/shop-details', function () {
//     return view('website.shop-details');
// })->name('shop-details');

// Route::get('/cart', function () {
//     return view('website.cart');
// })->name('cart');

// Route::get('/checkout', function () {
//     return view('website.checkout');
// })->name('checkout');

// Route::get('/contact', function () {
//     return view('website.contact');
// })->name('contact');


Route::post('/adduser', [AuthUserController::class, 'adduser'])->name('user.register');
Route::post('/userlogin', [AuthUserController::class, 'loginuser'])->name('user.login');


Route::post('/order', [OrderController ::class, 'order'])->name('order');

//userorder
Route::get('/user_order', [UserOrderController ::class, 'userorder'])->name('user.order');
Route::get('/cancel_order/{id}', [UserOrderController::class,'cancelOrder'])->name('order.cancel');

// user_transaction
Route::get('/user.transaction', [UserOrderController::class,'usertransaction'])->name('user.transaction');
