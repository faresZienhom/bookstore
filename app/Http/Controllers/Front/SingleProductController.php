<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index($id){

        $product = Product::where('id', $id)->first();
        $categories = categories::get();
        $faqs = Faq::get();
        $products = Product::select("*")
        ->offset(0)
        ->limit(10)
        ->get();
        return view('front.pages.shop.singel-product', compact('product', 'categories', 'faqs', 'products'));
    }
}
