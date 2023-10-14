


@extends('admin.layout.app')

@section('title','cart page')
@section('content')



        @if (session('message'))
            <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
        @endif
        <table class="table-bcarted w-100">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>cart user</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @isset($carts)
                @forelse ($carts as $cart)
                    <tr>
                        <td>{{ $cart->id }}</td>
                        <td>{{ $cart->user->name }}</td>
                        <td>
                        <a href="{{route('carts.show', $cart->id)}}" class="btn btn-primary custom-btn"><i class="fa fa-close"></i>show</a>
                        <form action="{{route('carts.destroy', $cart->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">There is no carts yet</div>
                @endforelse
            @endisset




        </tbody>
        </table>

@endsection
