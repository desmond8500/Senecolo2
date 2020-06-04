@extends('0 Eiser.layout')
{{-- @extends('0 Bootstrap.layout') --}}

@section('content')
    @include('0 Eiser.index.banner')

    <section class="cat_product_area mt-10">
      <div class="container mb-100">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
                @isset ($content)
                    @include($content)
                    @else

                    Cette section permet d'éditer les catégories et les articles qui ont été créés. <br>
                    Cette interface ne sera visible que pour les vendeurs et les administrateurs. <br>
                    Les données affichées seront filtrée en fonction du niveau d'accès.
                @endisset

          </div>

          <div class="col-lg-3">
            @include('0 senecolo3.component.backoffice.menu')
          </div>
        </div>
      </div>
    </section>
    <hr>
@endsection
