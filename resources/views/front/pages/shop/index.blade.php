@extends('front.layout.master')
@section('title',"Shop Page")

@section('content')



<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>المتجر</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">المتجر</span>
        </div>
      </div>
    </div>

    <div class="section-container d-block d-lg-flex gap-5 shop mt-5 pt-5">
      <div class="shop__filter mb-4">
        <div class="mb-4">
          <h6 class="shop__filter-title">بتدور علي ايه؟</h6>
          <form action="">
            <div class="filter__search position-relative">
              <input
                class="w-100 py-1 ps-2"
                type="text"
                placeholder="بتدور علي ايه؟"
              />
              <div
                class="filter__search-icon position-absolute h-100 top-0 end-0 p-2 d-flex justify-content-center align-items-center"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
          </form>
        </div>
        <div>
          <h6 class="shop__filter-title mb-3">التصنيف</h6>
          <form action="">
            <div class="filter__size">
              <div class="mb-3">
                <input type="checkbox" name="filter-size" id="english-book" />
                <label for="english-book">English Books</label>
              </div>
              <div class="mb-3">
                <input type="checkbox" name="filter-size" id="english-book" />
                <label for="english-book">كتب عربية - English Books</label>
              </div>
            </div>
            <div class="mb-3">
              <input type="submit" class="primary-button" value="ابحث" />
            </div>
          </form>
        </div>
      </div>
      <div class="shop__products w-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="m-0">عرض 1 - 40 من أصل 144 نتيجة</p>
          <select
            class="shop__category border-0 border-bottom bg-transparent"
          >
            <option selected disabled>اختر الترتيب</option>
            <option value="">ترتيب حسب الشهرة</option>
            <option value="">ترتيب حسب الأحدث</option>
            <option value="">ترتيب حسب: الأدني سعرا للأعلي</option>
            <option value="">ترتيب حسب: الأعلي سعرا للأدني</option>
          </select>
        </div>    <section class="section-container mb-5 mt-3">
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
                          <div class="product__img-cont">
                            <a href="detail/{{ $product['id'] }}">
                              <img class="product__img w-100 h-100 object-fit-cover" src="{{$product['image']}}" data-id="white">
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
                      "{{$product['title']}}"
                  </a>
                </div>
                <div class="product__author text-center">
                  "{{$product['author']}}"             </div>
                  <div class="product__price text-center d-flex gap-2 justify-content-center flex-wrap">
                      <span class="product__price product__price--old">
                          "{{$product['price']}}" جنيه
                      </span>
                      <span class="product__price">
                          "{{$product['priceafterdiscount'] }}" جنيه
                      </span>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </section>

        <div
          class="products__pagination mb-5 d-flex justify-content-center gap-2"
        >
          <span class="pagination__btn rounded-1 pagination__btn--next"
            ><i class="fa-solid fa-arrow-right-long"></i
          ></span>
          <span class="pagination__btn rounded-1 active">1</span>
          <span class="pagination__btn rounded-1">2</span>
          <span class="pagination__btn rounded-1">3</span>
          <span class="pagination__btn rounded-1">4</span>
          <span class="pagination__btn rounded-1 pagination__btn--prev"
            ><i class="fa-solid fa-arrow-left-long"></i
          ></span>
        </div>
      </div>
    </div>
  </main>

    @endsection
