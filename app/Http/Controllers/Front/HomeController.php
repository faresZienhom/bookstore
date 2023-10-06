<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    $products = Product::get();
    $sliders = Slider::where("status",1)->get();
    return view("front.pages.home.index",compact("sliders","products"));

}
public function shop(){

    $products = Product::get();

    return view("front.pages.shop.index",['products'=>$products]);

}
public function details($id){

    $product = Product::find($id);

    return view("front.pages.shop.details",['product'=>$product]);

}
public function search(request $request){

  $search = Product ::where('title','like','%' .$request->input('search') . '%')->get();
  return view("front.pages.shop.search",['products'=>$search]);

}
}
