<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Sen EcoloMarket</title>
</head>
<body class="container">
    <div id="app" class="ecolo_background">

        {{-- Barre de navigation et call to action --}}
        <div class="ecolo_nav">
            @include('0 senecolo 4.index.nav')
            <button class="btn btn-success rounded-pill join_us">Rejoignez-Nous</button>
        </div>

        {{-- Etapes d'inscription --}}
        <div class="ecolo_steps">
            <div class="row">
                @foreach ($steps as $step)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="step-image" src="{{asset($step->logo)}}"  alt="">
                            <div class="card-body">
                                {{-- <h4 class="card-title">Title</h4> --}}
                                <p class="card-text text-center text-secondary">{{$step->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Nouvelles offres --}}
        <div id="app" class="ecolo_new_offer">
            <offer-component></offer-component>
        </div>

        {{-- Footer --}}
        <div class="ecolo_footer">
            {{-- @include('0 senecolo 4.index.footer') --}}
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
