<style>
    .feature_icone{
        color: #71CD14;
    }
    .feature_description{
        height: 90px;
    }
</style>

<section class="row ">
    @if ($features)
        @foreach ($features as $feature)
        <div class="col-md-4 my-5">
            <div class="media ">
                <img src="{{asset($feature->icon)}}" class="mr-3" alt="..." height="50px">
                <div class="media-body">
                    <h5 class="mt-0">{{$feature->title ?? 'Feature Title'}}</h5>
                    {{$feature->description ?? 'Feature description'}}
                </div>
            </div>
        </div>
        @endforeach
    @endif
  </section>
