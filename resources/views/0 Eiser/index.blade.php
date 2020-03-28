@extends('0 Eiser.layout')

@section('content')
    <div class="row">
        <div class="col-md-9 ">
            <div class="carousel rounded">
                @include('0.content.carousel',['carousel'=>$carousel])
            </div>
        </div>
        <div class="col-md-3">
            @include('0 Eiser.content.pub')
        </div>
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header bg-info text-white text-white"> Produits recyclables </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-xs-6 col-sm-6 col-md-3 mb-2">
                                <div class="card" class="fotorama"
                                data-fit="cover">
                                    <img src="{{ asset($article) }}" class="card-img-top" data-fit="contain" alt="{{ asset($article) }}" height="150px">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Plastique</h5>
                                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                        {{-- <a href="#" class="btn btn-primary btn-sm">Acheter</a> --}}
                                    </div>
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
