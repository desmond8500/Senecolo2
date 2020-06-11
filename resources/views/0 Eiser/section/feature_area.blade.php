<style>
    .feature_icone{
        color: #71CD14;
    }
    .feature_description{
        height: 90px;
    }
</style>

<section class="feature-area section_gap_bottom_custom ">
      <div class="row">
        @if ($features)
            @foreach ($features as $feature)
            {{-- <div class="col-md-4 ml-0">
                <div class="single-feature">
                <a href="#" class="title">
                    <i class="flaticon-money icone"></i>
                    <h3 class="feature_icone">{{$feature->title ?? 'Feature Title'}}</h3>
                </a>
                <p class="feature_description">{{$feature->description ?? 'Feature description'}}</p>
                </div>
            </div> --}}

            <div class="col-md-4 ">
                <div class="media card-body border-light">
                    <img src="{{asset('senecolo3/img/icons/002-recycle.png')}}" class="mr-3" alt="..." height="50px">
                    <div class="media-body">
                        <h5 class="mt-0">{{$feature->title ?? 'Feature Title'}}</h5>
                        {{$feature->description ?? 'Feature description'}}
                    </div>
                </div>
            </div>
            @endforeach
        @endif

      </div>
  </section>
