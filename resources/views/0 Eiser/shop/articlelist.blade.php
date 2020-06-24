<div class="latest_product_inner">
    <div class="row">
    @if ($articles)
        @foreach ($articles as $article)
        <div class="col-lg-3 col-md-6">
            <div class="single-product border rounded">
                <div class="product-img">
                    <img class="rounded mx-auto d-block" height="150px" src="{{asset("storage/Ecommerce/Articles/$article->id/images/$article->images")}}" alt="" />
                    {{-- <img class="card-img" src="{{asset("eiser/img/product/inspired-product/i1.jpg")}}" alt="" /> --}}
                    <div class="p_icon">
                        <a href="#" data-toggle="modal" data-target="#articleDetail{{$article->id}}">
                            <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                            <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                            <i class="ti-shopping-cart"></i>
                        </a>
                        {{-- <a href="{{ route('card.add',['product_id'=>$article->id])}}">
                            <i class="ti-shopping-cart"></i>
                        </a> --}}


                    </div>
                </div>
                <div class="product-btm">
                    <a href="#" class="d-block">
                    <h4 class="text-truncate">{{$article->article}}</h4>
                    </a>
                    <div class="mt-3">
                    {{-- <span class="mr-4">$25.00</span> --}}
                    {{-- <del>$35.00</del> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @endif

    </div>
</div>
