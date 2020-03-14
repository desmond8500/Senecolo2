@php
    $navbar = array('title' => "Sen EcoloMarket", 'route'=>'index');
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="{{ route($navbar['route'] )}}">
        {{-- {{ $navbar['title'] }} --}}
        <img src="{{ asset('images/Logo/Logo V2.png')}}" height="50px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          @foreach (glob('storage/Modules/Tutos/*') as $menu)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ basename($menu) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach (glob("$menu/*") as $submenu)
                            <a class="dropdown-item" href="{{ route('tutolist',['section'=>basename($menu), 'subsection'=>basename($submenu)]) }}">{{ basename($submenu) }}</a>
                        @endforeach
                    </div>
                </li>
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="{{ route($menu->route) }}">{{ucfirst ($menu->name) }}<span class="sr-only">(current)</span></a>
                </li> --}}

          @endforeach
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Rechercher</button>

        <button class="btn btn-light mr-2">Connexion</button>
        <button class="btn btn-light mr-2">Inscription</button>
        <button class="btn btn-light mr-2"><i class="fa fa-cart-plus"></i></button>
      </div>
    </div>
  </nav>
