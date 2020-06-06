@extends('0 Eiser.layout')

@section('content')
    @include('0 Eiser.index.banner')


    <section class="cat_product_are section_ga">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            {{-- @include('0 Eiser.shop.topbar') --}}

            <div class="latest_product_inner">

{{-- =========================================================== --}}

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach (Storage::disk('public')->files("Ecommerce/images/carousel") as $image)
                        @if ($loop->first)
                            <div class="carousel-item active mb-4 rounded" >
                        @else
                            <div class="carousel-item mb-4 rounded" >
                        @endif
                                <img src="{{asset("storage/$image")}}" class="d-block w-100" alt="...">
                            </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

{{-- =========================================================== --}}




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
