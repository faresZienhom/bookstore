@extends('admin.layout.app')

@section('title','Create Pruducts')
@section('content')

<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a class="btn btn-warning mb-5" href="{{ route('products.index') }}">products list</a>
    @if (session('message'))
    <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
@endif

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title" class="form-label">Title:</label>
            <input type="text" value="{{ old('title') }}" class="form-control w-50" name="title" id="title">
        </div>
        <div>
            <label for="descreption" class="form-label">Descreption:</label>
            <input type="text" class="form-control w-50" name="descreption" value="{{ old('descreption') }}" id="descreption">
        </div>


            <label for="exampleInputFile">Image</label>
            <div class="input-group w-50">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Upload</label>
                </div>
            </div>
        <div>
            <label for="author" class="form-label">Author:</label>
            <input type="text" class="form-control w-50" name="author" value="{{ old('author') }}" id="author">
        </div>
        <div>
            <label for="" class="form-label">Page_number:</label>
            <input type="page_number" class="form-control w-50" value="{{ old('page_number') }}" name="page_number" id="email">
        </div>
        <div>
            <label for="name" class="form-label">Price:</label>
            <input type="text" value="{{ old('price') }}" class="form-control w-50" name="price" id="price">
        </div>
        <div>
            <label for="name" class="form-label">Discount:</label>
            <input type="text" value="{{ old('discount') }}" class="form-control w-50" name="discount" id="discount">
        </div>
        <div>
            <label for="product_code" class="form-label">product_code</label>
            <input type="text" value="{{ old('product_code') }}" class="form-control w-50" name="product_code" id="product_code">
        </div>
        <div>
            <label for="name" class="form-label">quantity:</label>
            <input type="text" value="{{ old('quantity') }}" class="form-control w-50" name="quantity" id="quantity">
        </div>
        <select class="custom-select w-50" aria-label="Default select example" name="categories_id">
            @foreach ($categories as $category)
                <option @if (old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}
                </option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-primary" />
    </form>


</div>
@endsection
