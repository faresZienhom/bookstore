@extends('front.layout.master')
@section('title',"Home Page")

@section('content')


  <main class="pt-4">
    <!-- Hero Section Start -->
    <section class="section-container hero">
      <div class="owl-carousel hero__carousel owl-theme">
        @foreach ($sliders as $slider)

        <div class="hero__item">
            <img class="hero__img" src="{{asset($slider->image)}}" alt="">
        </div>
        @endforeach
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Offer Section Start -->
    <section class="section-container mb-5 mt-3">
      <div class="offer d-flex align-items-center justify-content-between rounded-3 p-3 text-white">
        <div class="offer__title fw-bolder">
          عروض اليوم
        </div>
        <div class="offer__time d-flex gap-2 fs-6">
          <div class="d-flex flex-column align-items-center">
            <span class="fw-bolder">06</span>
            <div>ساعات</div>
          </div>:
          <div class="d-flex flex-column align-items-center">
            <span class="fw-bolder">10</span>
            <div>دقائق</div>
          </div>:
          <div class="d-flex flex-column align-items-center">
            <span class="fw-bolder">13</span>
            <div>ثواني</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Offer Section End -->

    <!-- Products Section Start -->
    <section class="section-container mb-4">
      <div class="owl-carousel products__slider owl-theme">
        @foreach ($products as $product)

        <div class="products__item">
            <div class="product__header mb-3">
                <a href="/singelproduct">
                    <a href="detail/{{ $product['id'] }}">

                    <div class="product__img-cont">
                        <img class="product__img w-100 h-100 object-fit-cover" src="{{asset($product->image)}}" data-id="white">
              </div>
            </a>
            <div class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white">
                وفر 10%
            </div>
            <div
            class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white">
            <i class="fa-regular fa-heart"></i>
            </div>
        </div>
        <div class="product__title text-center">
            <a class="text-black text-decoration-none" href="/singelproduct">
                "{{$product->title}}"
            </a>
          </div>
          <div class="product__author text-center">
            "{{$product->author}}"             </div>
            <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                <span class="product__price product__price--old">
                    "{{$product->price}}" جنيه
                </span>
                <span class="product__price">
                    "{{ $product->priceafterdiscount }}" جنيه
                </span>
            </div>
        </a>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Newest Section End -->
  </main>
@endsection
