@php
    $menus = json_decode('[
        { "name": "Acceuil", "route": "index" },
        { "name": "Boutique", "route": "index" },
        { "name": "Formation", "route": "formation" },
        { "name": "Contactez-nous", "route": "contact" },
        { "name": "A propos", "route": "contact" }
    ]');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- @foreach ($menus as $menu)
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route($menu->route) }}">{{ucfirst ($menu->name) }}<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            @endforeach --}}
        </ul>

      <div class="form-inline my-2 my-lg-0">
            @foreach ($menus as $menu)
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route($menu->route) }}">{{ucfirst ($menu->name) }}<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            @endforeach
      </div>
    </div>
  </nav>
