<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.pages.carts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Cart::create([
        'pendingOrcompleted'=>$request->pendingOrcompleted,
        'status'=>$request->status,
        'CartProducts'=>$request->CartProducts,
        'user_id'=>$request->user_id,
        'product_id'=>$request->product_id,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'total'=>$request->total,
        ]);
        return back()
        ->with("success","carts created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
