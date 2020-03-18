@extends('0.index.layout')

@section('content')
    <style>
        .menur{
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 4px 4px -4px rgba(0,0,0,0.12);
        }
        .carousel{
            height: 275px;
        }
    </style>

    <div class="row">
        <div class="col-sm-3  mt-2 mb-2">
            <div class="card card-body">
                @include('0.content.menur')
            </div>
        </div>
        <div class="col-sm-9 mb-2">
            @include('0.index.nav')
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-2 carousel">
                        @include('0.content.carousel',['carousel'=>$carousel])
                    </div>
                </div>
                <div class="col-md-3">
                    @include('0.content.pub')
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header bg-primary text-white"> Produits recyclables </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-xs-6 col-sm-6 col-md-3 mb-2">
                                <div class="card" class="fotorama"
                                data-fit="cover">
                                    <img src="{{ asset($article) }}" class="card-img-top m-1" data-fit="contain" alt="{{ asset($article) }}" height="150px">
                                    <div class="card-body">
                                        <h5 class="card-title">Plastique</h5>
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
            <div class="card card-body">
                <h1>Formations</h1>
                <p> Images qui défilent </p>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">Produits recyclés</div>
                <div class="card-body">
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
                                                {{-- <a href="#" class="btn btn-primary btn-sm">Acheter</a> --}}
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
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">Les produits les plus demandés</div>
                <div class="card card-body bg-light">
                    <div class="row">
                        @foreach ($articles as $key => $article)
                            <div class="col-md-3 mb-2">
                                <div class="card">
                                    <img src="{{ asset($article) }}" class="card-img-top" alt="{{ asset($article) }}" height="150px">
                                    <div class="card-body">
                                        <h5 class="card-title">Plastique</h5>
                                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                        {{-- <a href="#" class="btn btn-primary btn-sm">Acheter</a> --}}
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
    </div>
@endsection
