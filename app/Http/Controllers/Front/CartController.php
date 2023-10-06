<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addcart(request $request)
      {
        $cart = new Cart;
        $cart->user_id =Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->price = $request->price;

        $cart ->save();

        return back()
        ->with("success","cart added successfully");

      }


      public function cartitem()
      {

        $userid = Auth::user()->id;
        return Cart::where('user_id',$userid)->count();
      }

    }



