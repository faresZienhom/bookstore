@extends('admin.layout.app')

@section('title','products page')
@section('content')
<a class="btn btn-danger mb-5" href="{{route('products.create')}}">Add new product</a>
<table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>Description</th>
            <th>image</th>
            <th>author</th>
            <th>page_number</th>
            <th>price</th>
            <th>discount</th>
            <th>quantity</th>
            <th>category</th>
            <th>product_code</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product-> descreption}}</td>
                    <td><img src="{{ asset ( "images/products/" .$product->image) }}" width="40"></td>
                    <td>{{ $product->author }}</td>
                    <td>{{ $product->page_number }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->category?->name }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td class="d-flex">
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-major btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}

@endsection
@section('js')
    <script>
        document.querySelectorAll('.delete-major').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
