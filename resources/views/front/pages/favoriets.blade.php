@extends('front.layout.master')
@section('title',"Favourites")

@section('content')


<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>المفضلة</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">المفضلة</span>
        </div>
      </div>
    </div>

    <div class="my-5 py-5">
      <section class="section-container favourites">
        <table class="w-100">
          <thead>
            <th class="d-none d-md-table-cell">الصوره </th>
            <th class="d-none d-md-table-cell">الاسم</th>
            <th class="d-none d-md-table-cell">السعر</th>
            <th class="d-none d-md-table-cell">المخزون</th>
          </thead>
          <tbody class="text-center">
            @foreach ($wishlists as $wishlist)
            <tr>

                <td class="d-block d-md-table-cell favourites__img">
                <img src="{{asset( "images/products/" .$wishlist->product->image)}}" alt="" />
                </td>
                <td class="d-block d-md-table-cell">
                <span href="">{{ $wishlist->product->title }}</span>
                </td>
                <td class="d-block d-md-table-cell">
                <span class="product__price product__price--old"
                    >{{ $wishlist->product->price }} </span
                >
                <span class="product__price"> {{ $wishlist->product->price -  $wishlist->product->discount  }}</span>
                </td>
                <td class="d-block d-md-table-cell">
                <span class="me-2"><i class="fa-solid fa-check"></i></span>
                <span class="d-inline-block d-md-none d-lg-inline-block">


                {{ $wishlist->product->quantity == 0 ? 'غير متوفر بالمخزون   ' : 'متوفر بالمخزون'}}
                     </span>
                </td>
            </tr>
        @endforeach

    </tbody>
    </table>
</section>
</div>
</main>

@endsection
