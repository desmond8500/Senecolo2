@php
    $images = Storage::disk('public')->allFiles("Ecommerce/Articles/$article->id/images");

@endphp

<div class="s_product_img">
    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel" >
        <ol class="carousel-indicators">
            @foreach ($images as $key => $image)
                @if ($loop->first)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"  class="active">
                    <img src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}" height="50px" alt="" />
                </li>
                @else
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}">
                    <img src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}" height="50px" alt="" />
                </li>
                @endif

            @endforeach
            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1">
            <img src="{{asset("eiser/img/product/single-product/s-product-s-3.jpg")}}" alt="" />
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
            <img src="{{asset("eiser/img/product/single-product/s-product-s-4.jpg")}}" alt="" />
            </li> --}}
        </ol>
        <div class="carousel-inner">
            @foreach ($images as $key => $image)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}"  alt="Slide {{$key+1}}"/>
                </div>
                @else
                <div class="carousel-item ">
                    <img class="d-block w-100" src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}"  alt="Slide {{$key+1}}"/>
                </div>
                @endif
            @endforeach
            {{-- <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}"  alt="First slide"/>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("eiser/img/product/single-product/s-product-1.jpg")}}"  alt="Second slide"/>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{asset("eiser/img/product/single-product/s-product-1.jpg")}}"  alt="Third slide"/>
            </div> --}}
        </div>
    </div>
</div>
