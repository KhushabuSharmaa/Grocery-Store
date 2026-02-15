<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.website');
});

Route::get('/shop', function () {
    return view('website.shop');
})->name('shop');

Route::get('/shop-details', function () {
    return view('website.shop-details');
})->name('shop-details');

Route::get('/cart', function () {
    return view('website.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('website.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');