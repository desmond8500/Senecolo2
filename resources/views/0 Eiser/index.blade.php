@extends('0 Eiser.layout')

@section('content')
    <div class="row">
        <div class="col-md-9 mb-2">
            <div class="carousel rounded">
                @include('0.content.carousel',['carousel'=>$carousel])
            </div>
        </div>
        <div class="col-md-3 ">
            @include('0 Eiser.content.pub')
        </div>
        <div class="col-md-12 ">
            <div class="card bg-light border border-grey">
                <div class="card-header bg-info text-white text-white"> Produits recyclables </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-3 mb-4">
                                <div class=" rounded border bg-white">
                                        <img src="{{ asset($article) }}" class="article-img  img-fluid"  alt="{{ asset($article) }}">
                                    <p class="text-center text-dark">Article</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
                <img src="{{ asset('images/fomation/WhatsApp Image 2020-03-22 at 15.52.16.jpeg') }}" class="card-img-top" data-fit="contain" alt="{{ asset($article) }}" >

        </div>
    </div>
@endsection

@section('link')

@endsection

@section('script')

@endsection
