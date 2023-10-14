<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        $products = Product::paginate(1);
        return view('front.pages.shop.index', compact('products'));
    }
}
