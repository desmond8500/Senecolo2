@extends('0.index.layout')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            @include('0.content.menur')
        </div>
        <div class="col-sm-9">
            @include('0.index.nav')
            <div class="row">
                <div class="col-md-8">
                    @dump($carousel)
                    @include('0.content.carousel',['carousel'=>$carousel])
                </div>
                <div class="col-md-4">
                    @include('0.content.pub')
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-md-2 mb-2">
                        <div class="card">
                            <img src="https://picsum.photos/200/230?random=3" class="card-img-top" alt="https://picsum.photos/200/100?random=3">
                            <div class="card-body">
                                <h5 class="card-title">Plastique</h5>
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                <a href="#" class="btn btn-primary btn-sm">Voir l'article</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
