
@include('front.layout.head')
@include('front.layout.nav')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('carts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title" class="form-label">pendingOrcompleted:</label>
            <input type="text"  class="form-control w-50" name="pendingOrcompleted" id="title">
        </div>
        <div>
            <label for="name" class="form-label">status:</label>
            <input type="text"  class="form-control w-50" name="status" id="price">
        </div>
        <div>
            <label for="name" class="form-label">CartProducts:</label>
            <input type="text"  class="form-control w-50" name="CartProducts" id="price">
        </div>
        <div>
            <label for="name" class="form-label">user_id:</label>
            <input type="text"  class="form-control w-50" name="user_id" id="user_id">
        </div>
        <div>
            <label for="name" class="form-label">product_id:</label>
            <input type="text"  class="form-control w-50" name="product_id" id="product_id">
        </div>


        <div>
            <label for="name" class="form-label">price:</label>
            <input type="text"  class="form-control w-50" name="price" id="price">
        </div>
        <div>
            <label for="name" class="form-label">quantity:</label>
            <input type="text"  class="form-control w-50" name="quantity" id="quantity">
        </div>
        <div>
            <label for="name" class="form-label">total:</label>
            <input type="text"  class="form-control w-50" name="total" id="total">
        </div>


        <input type="submit" class="btn btn-primary" />
    </form>
