<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function index(){
        return view('front.pages.policy.refund-policy');
    }
}
