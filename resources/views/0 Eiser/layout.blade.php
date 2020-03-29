<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('0/libraries/bootstrap-4.4.1-dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
    @yield('link')
    <title>SEN EcoloMarket</title>
</head>

<body>
    <div id="app">
        @include('0 Eiser.index.navbar',['title'=>'SEN Ecolomarket', 'route'=>'index1'])
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-4">
                    <div class="mb-2">
                        @include('0 Eiser.index.sidebar',['title'=>'Produits Recyclables'])
                    </div>
                    <div class="mb-2">
                        @include('0 Eiser.index.sidebar',['title'=>'Produits Recyclés'])

                    </div>

                </div>
                <div class="col-md-9 mt-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
@include('0 Eiser.index.footer')
{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
<script src="{{ asset('0/libraries/jquery/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('0/libraries/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    @yield('script')
<script src="{{ asset('js/app.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
</html>
