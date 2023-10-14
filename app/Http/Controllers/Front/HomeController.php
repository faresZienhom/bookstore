<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->get();
        $banners = Banner::where('status', 1)->get();
        $products = Product::select("*")
        ->offset(0)
        ->limit(10)
        ->get();
        return view('front.pages.home.index', compact('sliders', 'products', 'banners'));
    }


    public function search(request $request){

        $search = Product ::where('title','like','%' .$request->input('search') . '%')->get();
        return view("front.pages.shop.search",['products'=>$search]);

      }

}
