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
                <div class="row">
                    <div class="col-md-8 p-0 m-0">
                         <div id="carouselExampleControls" class="carousel slide mycarousel" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach (Storage::disk('public')->files("Ecommerce/images/carousel") as $image)
                                    @php
                                        if($loop->first)
                                            $active = 'active';
                                        else
                                            $active = '';
                                    @endphp
                                    <div class="carousel-item carousel1 {{$active}} mb-4 rounded" >
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
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12  mb-3">
                                @foreach (Storage::disk('public')->files("Ecommerce/images/pub/1") as $item)
                                    <img src="{{ asset("storage/$item")}}" class="img-fluid pub" alt="">
                                @endforeach
                            </div>
                            <div class="col-md-12 ">
                                @foreach (Storage::disk('public')->files("Ecommerce/images/pub/2") as $item)
                                    <img src="{{ asset("storage/$item")}}" class="img-fluid pub" alt="">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>



          <div class="col-lg-3 ">
            @include('0 Eiser.shop.sidebar')
          </div>
        </div>
      </div>
    </section>

    <section class="container mt-4">
        <div class="row">
             <div class="col-lg-12">

            </div>
             <div class="col-md-12">
                @include('0 Eiser.section.feature_area') <hr>

                <div class="main_title">
                    <h2><span>Les produits les plus demandés</span></h2>
                    <p>Top 3 des articles que nos clietns achètent </p>
                </div>

                @include('0 Eiser.shop.productlist') <hr>

                <div class="main_title">
                    <h2><span>Les catégories d'articles</span></h2>
                    <p>aaa </p>
                </div>

                @foreach ($sidebar as $item)
                    <h3>{{$item->name}} </h3>
                    @foreach ($item->data as $data)
                        @include('0 Eiser.shop.articlelist')
                    @endforeach
                @endforeach


             </div>
        </div>
    </section>
@endsection

@section('link')
<style>
    .carousel1{
        border: 1px solid #EFF2F3;
}
    .pub{
        border: 1px solid #EFF2F3;
}
</style>

@endsection
