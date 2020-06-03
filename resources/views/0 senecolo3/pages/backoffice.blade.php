@extends('0 Eiser.layout')
{{-- @extends('0 Bootstrap.layout') --}}

@section('content')
    {{-- @include('0 Eiser.index.banner') --}}

    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
                @isset ($content)
                    @include($content)
                @endisset

          </div>

          <div class="col-lg-3">
            @include('0 senecolo3.component.backoffice.menu')
          </div>
        </div>
      </div>
    </section>
@endsection
