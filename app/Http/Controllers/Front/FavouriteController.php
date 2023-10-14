<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index(){
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->get();

        return view('front.pages.favoriets', compact('wishlists'));
    }
}
