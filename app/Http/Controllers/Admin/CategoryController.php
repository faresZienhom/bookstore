<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Categories::paginate(5);
        return view('admin.pages.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required','min:5']
        ]);
        Categories::create([
            'name'=>$validation['name']

        ]);
        return back()
        ->with("success","category created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Categories::findorfail($id);

        return view('admin.pages.categories.update',compact('categories'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);

        $categories->name = $request->name;
        $categories->save();

        return back()
        ->with("success","category updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $categories = Categories::find($id);
        $categories -> delete();
        return redirect('/categories');
    }
}
