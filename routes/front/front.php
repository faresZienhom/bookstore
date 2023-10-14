<?php

use App\Http\Controllers\front\BrancheController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\AccountController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\checkoutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\FavouriteController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\OrderController;
use App\Http\Controllers\front\PrivacyPolicyController;
use App\Http\Controllers\front\RefundPolicyController;
use App\Http\Controllers\front\ShopController;
use App\Http\Controllers\front\SingleProductController;


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


    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/about', [AboutController::class, 'index']);

    Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/fav/{id}', [CartController::class, 'addToFav'])->name('cart.addToFav');





    Route::get('/branch', [BrancheController::class, 'index'])->name('branches.index');

    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/favourites', [FavouriteController::class, 'index']);

    Route::get('/privcy-policy', [PrivacyPolicyController::class, 'index']);

    Route::get('/refund-policy', [RefundPolicyController::class, 'index'])->name('refund.policy.index');

    Route::get('/shop', [ShopController::class, 'index']);

    Route::get('/single-product/{id}', [SingleProductController::class, 'index'])->name('single.product.index');

    Route::get('/search',[HomeController::class,'search']);



    Route::middleware('guest')->group(function () {
        Route::get('/account', [AccountController::class, 'index']);
    });



    Route::middleware('auth')->group(function () {

        Route::get('/order', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/details', [OrderController::class, 'details'])->name('orders.details');
        Route::get('/orders/recieved', [OrderController::class, 'recieved'])->name('orders.recieved');
        Route::get('/orders/track', [OrderController::class, 'track'])->name('orders.track');

        Route::get('/checkout', [checkoutController::class, 'index']);

        Route::get('/account/details', [AccountController::class, 'details'])->name('account.details');
        Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');


    });

















