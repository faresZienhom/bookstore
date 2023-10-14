<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('front.pages.orders.orders', compact('orders'));
    }

    public function details(){ // need an id but no for try code only
        return view('front.pages.orders.order-details');
    }

    public function recieved(){
        return view('front.pages.orders.order-recieved');
    }

    public function track(){
        return view('front.pages.orders.track-order');
    }
}
