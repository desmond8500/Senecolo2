@extends('0 senecolo 4.layout')

@section('content')
<div class="main-banner container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="main-banner-title"> LA PLACE DE MARCHE DIGITAL POUR LES PRODUITS RECYCLES ET RECYCLABLES </h4>
            <p class="main-banner-para">
                Rejoignez le marché publiez facilement les produits que vous souhaitez vendre. <br>
                Achetez en toute tonfiance sur SEN Ecolomarket. <br>
                Parcourez Nos Offres Dans Les Meilleures Catégories.yyy
            </p>
            <button class="btn btn-success rounded-pill">Rejoignez-Nous</button>
        </div>
        {{-- <div class="col-md-6">
            <img src="{{ asset('senecolo3/img/Groupe 9.png') }}" height="200px" alt="">
        </div> --}}
    </div>
</div>

{{-- <div class="sub-banner">
    <div class="row">
        @foreach ($sub_banner as $sub)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($sub->logo)}}" alt="">
                    <div class="card-body">
                        <p class="card-text">{{$sub->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
{{--
<div class="new_offer">
    <example-component></example-component>
    <offer-section></offer-section>
</div>
<div class="category_section">
    <category-section></category-section>
</div>
<div class="main_pub_section">
    <main-pub-section></main-pub-section>
</div>
<div class="most_asked_section">
    <most-asked-section></most-asked-section>
</div> --}}
@endsection
