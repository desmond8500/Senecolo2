@extends('0 Eiser.layout')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card carousel">
                @include('0.content.carousel',['carousel'=>$carousel])
            </div>
        </div>
        <div class="col-md-3">
            @include('0.content.pub')
        </div>
    </div>
@endsection

@section('link')

@endsection

@section('script')

@endsection
