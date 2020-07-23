 <nav class="navbar navbar-expand-lg navbar-light container">
  <a class="navbar-brand" href="{{route('ecolo4.landing')}}">
      <img src="{{ asset('senecolo3/img/logo/mini logo V3.png') }}" height="50px" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    </ul>

    <div class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            @foreach ($menus as $menu)
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">{{$menu->title}} <span class="sr-only">(current)</span></a>
                </li>
            @endforeach
            <button class="btn btn-outline-light rounded-pill nav_form">Connectez-vous</button>
        </ul>
    </div>
  </div>
</nav>
