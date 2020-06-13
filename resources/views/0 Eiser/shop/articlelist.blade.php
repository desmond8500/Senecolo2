<style>
    .ic{
        font-size: 155px;

    }
</style>

<div class="latest_product_inner">
    <div class="row">
    @foreach ($sidebar as $item)
        <div class="col-lg-3 col-md-6">
            <div class="single-product">
                <div class="product-img">
                    <i class="fa fa-archive ic text-success"></i>

                </div>
                <div class="product-btm">
                    <a href="#" class="d-block">
                        <h4 class="text-truncate">{{$item->name}}</h4>
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
