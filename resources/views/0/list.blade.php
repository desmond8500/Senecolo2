@extends('0 Tutos.index.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-8">
            @isset($readme)
               <div class="card card-body mt-2">
                    @parsedown($readme)
               </div>
            @endisset
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="list-group mt-2">
                @foreach ($files as $file)
                    @if (basename($file)!='0.md')
                        @php
                            $path = pathinfo("storage/Modules/Tutos/".$routeparameters['section']."/".$routeparameters['subsection']."/".$file);
                        @endphp
                        <a class="list-group-item list-group-item-action" href=" {{ route('tutolist',['section'=>$routeparameters['section'], 'subsection'=>$routeparameters['subsection'], 'file'=>basename($file)])}} "> {{ ucfirst($path['filename']) }} </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset("0/libraries/highlight/styles/vs.css")}}">
@endsection

@section('script')
    <script src="{{ asset("0/libraries/highlight/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="0/libraries/clipboard.js-master/dist/clipboard.min.js"></script>
@endsection
