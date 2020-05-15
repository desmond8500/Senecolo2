@extends('0 Eiser.layout')

@section('content')
    @include('0 Eiser.index.banner')

    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            @include('0 Eiser.shop.topbar')

            <div class="latest_product_inner">
                @include('0 Eiser.shop.productlist')
            </div>
          </div>

          <div class="col-lg-3">
            @include('0 Eiser.shop.sidebar')
          </div>
        </div>
      </div>
    </section>
@endsection
