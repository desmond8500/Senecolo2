@extends('0 Eiser.layout')

@section('content')
    @include('0 Eiser.index.banner')


    <section class="cat_product_are section_ga">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            @include('0 Eiser.shop.productlist',['article_class'=>'col-md-4'])
          </div>
          <div class="col-lg-3 ">
            @include('0 Eiser.shop.sidebar')
          </div>
        </div>
      </div>
    </section>

@endsection

@section('link')
<style>
    .carousel1{
        border: 1px solid #d3d3d3;
}
    .pub{
        border: 1px solid #EFF2F3;
}
</style>

@endsection

@section('footer')

@endsection


