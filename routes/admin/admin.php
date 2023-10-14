<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WishListController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','check.type'])->group(function(){


    Route::get('/dashboard',[HomeController::class,'index']);

    Route::resource('slider',SliderController::class)->except('show');
    Route::resource('banner',BannerController::class)->except('show');
    Route::resource('/branches', BranchController::class)->except('show');

    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductsController::class);
    Route::resource('wishlist',WishListController::class);


    Route::resource('/faq', FaqController::class)->except('show');


    Route::resource('/orders', OrderController::class)->except('show');

    Route::get('/carts', [CartController::class, 'index'])
    ->name('carts.index');
    Route::delete('/carts/delete/{id}', [CartController::class, 'destroy'])
    ->name('carts.destroy');

    Route::get('/carts/show/{id}', [CartController::class, 'show'])
    ->name('carts.show');
    Route::resource('contacts',ContactController::class);

})



?>
