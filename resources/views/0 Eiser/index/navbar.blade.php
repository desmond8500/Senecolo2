@php
    $menus = json_decode('[
        { "name": "Accueil", "route": "index" },
        { "name": "Boutique", "route": "index" },
        { "name": "Formation", "route": "formation" },
        { "name": "Contactez-nous", "route": "contact" },
        { "name": "A propos", "route": "contact" }
    ]');
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route($route)}}">
        <img src="{{ asset('images/Logo/Logo V2.png')}}" height="50px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach ($menus as $menu)
                <li class="nav-item dropdown">
                    <a class="dropdown-item nav-menu" href="">{{ $menu->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="form-inline my-2 my-lg-0">

            <a class="btn btn-light mr-2"><i class="fa fa-search"></i></a>
            <a class="btn btn-light mr-2"><i class="fa fa-shopping-cart"></i></a>
            <a class="btn btn-light mr-2"><i class="fa fa-user"></i></a>
            <a class="btn btn-light mr-2"><i class="fa fa-heart"></i></a>
        </div>
    </div>
  </nav>
