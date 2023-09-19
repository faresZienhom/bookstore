<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.pages.home.index');
});

Route::resource('carts',CartController::class);



Route::get('/about', function () {
    return view('front.pages.about.index');
});


Route::get('/account', function () {
    return view('front.pages.auth.index');
});


Route::get('/profile', function () {
    return view('front.pages.auth.profile');
});

Route::get('/accountdetails', function () {
    return view('front.pages.auth.accountdetails');
});


Route::get('/branch', function () {
    return view('front.pages.branch.index');
});


Route::get('/orders', function () {
    return view('front.pages.orders.index');
});

Route::get('/ordersdetails', function () {
    return view('front.pages.orders.orderdetails');
});

Route::get('/ordersresevied', function () {
    return view('front.pages.orders.orderresevied');
});

Route::get('/orderstrack', function () {
    return view('front.pages.orders.trackorder');
});


Route::get('/products', function () {
    return view('front.pages.shop.index');
})->name('products.index');

Route::get('/singelproduct', function () {
    return view('front.pages.shop.singel-product');
});

Route::get('/policy', function () {
    return view('front.pages.policy.refund-policy');
});

Route::get('/policy-privacy', function () {
    return view('front.pages.policy.privacy-policy');
});


Route::get('/contact', function () {
    return view('front.pages.contact');
});


Route::get('/favourites', function () {
    return view('front.pages.favoriets');
});


Route::get('/checkout', function () {
    return view('front.pages.checkout');
});

Route::get('/',[HomeController::class,'index'])->name('front.index');

