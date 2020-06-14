<style>
    .feature_icone{
        color: #71CD14;
    }
    .feature_description{
        height: 90px;
        border: 1px solid #d3d3d3;
        border-radius: 15px;
    }
    .iconn{
        font-size: 55px;
        padding-right: 15px;

    }
</style>

<section class="row ">
    @if ($features)
        @foreach ($features as $feature)
        <div class="col-md-4 my-5">
            <div class="media bg-white p-2 feature_description">
                {{-- <img src="{{asset($feature->icon)}}" class="mr-3" alt="..." height="50px"> --}}
                <i class="{{ $feature->fa }} fa-2x iconn text-success"></i>
                <div class="media-body">
                    <h5 class="mt-0 text-success">{{$feature->title ?? 'Feature Title'}}</h5>
                    {{$feature->description ?? 'Feature description'}}
                </div>
            </div>
        </div>
        @endforeach
    @endif
  </section>
