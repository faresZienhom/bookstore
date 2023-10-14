<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('front.pages.auth.index');
    }

    public function details(){
        return view('front.pages.auth.accountdetails');
    }

    public function profile(){
        return view('front.pages.auth.profile');
    }
}
