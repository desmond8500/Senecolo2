<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>{{$banner->title ?? 'Banner title'}}</h2>
                    <p>{{$banner->message ?? 'Banner Message'}}</p>
                </div>
                <div class="page_link">
                    <a href="{{route('index')}}">Acceuil</a>
                    @isset($banner->routes)
                        @foreach ($banner->routes as $route)
                            <a href="{{route($route->link)}}">{{$route->name}}</a>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
