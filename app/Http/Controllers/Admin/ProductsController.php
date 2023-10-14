<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.pages.products.index',compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories = Categories::get();
        return view('admin.pages.products.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

          $ext = $request->file('image')->getClientOriginalExtension();
          $imageName = "product" . time() .rand(100,100000) . "." . $ext;
          $request->file("image")->move(public_path("images/products"),$imageName);

         Product::create([
            'image'=>$imageName,
            'title' => $request->title,
            'descreption' => $request->descreption,
            'author' => $request->author,
            'price' => $request->price,
            'discount' => $request->discount,
            'quantity' => $request->quantity,
            'product_code' => $request->product_code,
            'page_number' => $request->page_number,
            'categories_id'=>$request->categories_id

        ]);

        return back()->with('message', 'data added successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $favourites = Wishlist::where('product_id', $product->id)->get();

        return view('admin.pages.products.show', compact('favourites'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories = Categories::get();
        return view('admin.pages.products.update', compact('product','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(([
            'image' => ['sometimes', 'image','mimes:png,jpg,jpeg','mimetypes:image/png,image/jpeg'],
        ]));

        $product =Product::findorfail($id);
        if($request->hasFile('image')){

        $ext = $request->file('image')->getClientOriginalExtension();
        $newName = "product" . time() .rand(100,100000) . "." . $ext;
        $path =public_path("images/products/". $product->image);
        if(file_exists($path)){
          unlink($path);
        }
        $request->file("image")->move(public_path("images/products"),$newName);

      }
        $product->update([

           'image'=>$newName ?? $product->image,
           'title' => $request->title,
           'descreption' => $request->descreption,
           'author' => $request->author,
           'price' => $request->price,
           'discount' => $request->discount,
           'quantity' => $request->quantity,
           'product_code' => $request->product_code,
           'page_number' => $request->page_number
   ]);

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
