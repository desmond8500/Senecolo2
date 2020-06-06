<style>
.banner_area2{
    background: #F6F6F6;
    padding-top: 10px;
    margin-bottom: 20px;
}
.banner_link{
    color: gray;
}
</style>

<section class="banner_area2">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>{{$banner->title ?? 'Banner title'}}</h2>
                    <p>{{$banner->message ?? 'Banner Message'}}</p>
                </div>
                <div class="page_link">
                    <a class="banner_link" href="{{route('index')}}">Acceuil</a>
                    @isset($banner->routes)
                        @foreach ($banner->routes as $route)
                            @if (!$loop->last)
                                /
                            @endif
                            <a class="banner_link" href="{{route($route->link)}}">{{$route->name}}</a>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
