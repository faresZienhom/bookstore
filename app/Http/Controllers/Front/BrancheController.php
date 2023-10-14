<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BrancheController extends Controller
{
    public function index(){

        $branches = Branch::get();
        return view('front.pages.branch.index', compact('branches'));
    }
}
