<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Sen EcoloMarket</title>
</head>
<body class="back-image">
    @include('0 senecolo 4.index.nav')
    <div class="back-image">
        @yield('content')
    </div>
    @include('0 senecolo 4.index.footer')
</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>
