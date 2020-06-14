<div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route($menu->link)}}">
            <img height="50px" src="{{asset($menu->logo)}}" alt="{{asset($menu->logo)}}" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                    @foreach ($menu->menulist as $menu_item)
                        <li class="nav-item">
                            @isset($menu_item['route'])
                                <a class="nav-link" href="{{route($menu_item['route'])}}">{{$menu_item['name']}}</a>
                                @else
                                <a class="nav-link" href="">{{$menu_item['name']}}</a>
                            @endisset
                        </li>
                    @endforeach
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backoffice')}}">BACKOFFICE</a>
                    </li>
                @endauth

                  {{-- <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="category.html">Shop Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single-product.html">Product Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="checkout.html">Product Checkout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cart.html">Shopping Cart</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li> --}}
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">


                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  @auth
                    <li class="nav-item">
                        <div class="dropdown dropleft">
                            <a class="icons"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-user" aria-hidden="true"></i>
                            </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form action="{{route('logme')}}" method="POST">
                                @csrf
                                <input type="text" name="type" value="logout" hidden>
                                <button type="submit" class="btn btn-block btn-primary">Déconnexion</button>
                            </form>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        </div>
                    </li>

                    @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="icons">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </a>
                    </li>

                  @endauth

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-heart" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
