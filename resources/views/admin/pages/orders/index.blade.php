
@extends('admin.layout.app')

@section('title','Order page')
@section('content')


<a class="btn btn-warning mb-5" href="{{ route('orders.create') }}">Add Order</a>
        @if (session('message'))
            <div class="alert alert-success m-2 mb-2 p-0">{{session('message')}}</div>
        @endif
        <table class="table-bordered w-100">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>prd title</th>
                <th>order user</th>
                <th>price</th>
                <th>discount</th>
                <th>quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @isset($orders)
                @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->title }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status == 0 ? 'Not Complated if user complate his checkout it will be complated' : 'Complated'  }}</td>
                        <td>
                        <a href="{{route('orders.edit', $order->id)}}" class="btn btn-primary custom-btn"><i class="fa fa-close"></i>Edit</a>
                        <form action="{{route('orders.destroy', $order->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">There is no orders yet</div>
                @endforelse
            @endisset




        </tbody>
        </table>
@endsection
