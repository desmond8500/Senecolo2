<div class="latest_product_inner">
    <div class="row">
    @foreach ($articles as $article)
        <div class="col-lg-4 col-md-6">
            <div class="single-product">
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

    </div>
</div>

@foreach ($articles as $article)
<div class="modal fade" id="articleDetail{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="articleDetail{{$article->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="articleDetail{{$article->id}}Label">Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">
                @include('0 senecolo3.component.article_modal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
      </div>
    </div>
</div>
@endforeach


<!--


    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i1.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i2.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i3.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i4.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i5.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i6.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i7.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i8.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-product">
        <div class="product-img">
            <img
            class="card-img"
            src="{{asset("eiser/img/product/inspired-product/i2.jpg")}}"
            alt=""
            />
            <div class="p_icon">
            <a href="#">
                <i class="ti-eye"></i>
            </a>
            <a href="#">
                <i class="ti-heart"></i>
            </a>
            <a href="#">
                <i class="ti-shopping-cart"></i>
            </a>
            </div>
        </div>
        <div class="product-btm">
            <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
            </a>
            <div class="mt-3">
            {{-- <span class="mr-4">$25.00</span> --}}
            {{-- <del>$35.00</del> --}}
            </div>
        </div>
        </div>
    </div>
    -->
