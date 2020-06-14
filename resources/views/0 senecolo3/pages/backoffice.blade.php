@extends('0 Eiser.layout')
{{-- @extends('0 Bootstrap.layout') --}}


@php
    $menu = json_decode('[
        { "name": "Catégories", "section": "category"},
        { "name": "Articles", "section": "articles"},
        { "name": "Carousel", "section": "carousel"}
    ]');
@endphp

@section('content')
<section class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('backoffice')}}">Backoffice</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> --}}
       @foreach ($menu as $item)
            @php
                if ($item->section == $section)
                    $class = 'active';
                else
                    $class = '';

            @endphp
            <li class=" nav-item {{$class}}">
                <a href="{{route('backoffice',['section'=>$item->section])}}" class="nav-link">{{$item->name}}</a>
            </li>
            @endforeach

    </ul>
  </div>
</nav>
</section>

<section class="container mt-4 ">
    @isset ($content)
        @include($content)
        @else

        <p>
            Cette section permet d'éditer les catégories et les articles qui ont été créés. <br>
        Cette interface ne sera visible que pour les vendeurs et les administrateurs. <br>
        Les données affichées seront filtrée en fonction du niveau d'accès.
        </p>
    @endisset
</section>

@endsection


@section('footer')

@endsection
