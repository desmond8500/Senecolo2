@extends('0.index.layout')

@section('content')
    <style>
        .test{
            background-color: lightcyan;
        }
    </style>
    <div class="row">
        <div class="col-sm-3">
            @include('0.content.menur')
        </div>
        <div class="col-sm-9">
            @include('0.index.nav')
            <div class="row">
                <div class="col-md-8">
                    @include('0.content.carousel',['carousel'=>$carousel])
                </div>
                <div class="col-md-4">
                    @include('0.content.pub')
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 mb-2">
                        <div class="card">
                            <img src="{{ asset($article) }}" class="card-img-top" alt="{{ asset($article) }}" height="150px">
                            <div class="card-body">
                                <h5 class="card-title">Plastique</h5>
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                <a href="#" class="btn btn-primary btn-sm">Acheter</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12">
                    <div class="card card-body">
                        <h1>Formations</h1>
                        <p> Images qui défilent </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach ($articles as $key => $article)
                            <div class="col-md-4 mb-2">
                                <div class="card">
                                    <img src="{{ asset($article) }}" class="card-img-top" alt="{{ asset($article) }}" height="150px">
                                    <div class="card-body">
                                        <h5 class="card-title">Plastique</h5>
                                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                        <a href="#" class="btn btn-primary btn-sm">Acheter</a>
                                    </div>
                                </div>
                            </div>
                            @if ($key == 5)
                                @break;
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    @include('0.content.menur')
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-body bg-light">
                <h3>Les produits les plus demandés</h3>
                <div class="row">
                    @foreach ($articles as $key => $article)
                        <div class="col-md-3 mb-2">
                            <div class="card">
                                <img src="{{ asset($article) }}" class="card-img-top" alt="{{ asset($article) }}" height="150px">
                                <div class="card-body">
                                    <h5 class="card-title">Plastique</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn btn-primary btn-sm">Acheter</a>
                                </div>
                            </div>
                        </div>
                        @if ($key ==3)
                            @break;
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
