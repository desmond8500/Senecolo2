<section class="feature-are section_gap_bottom_custo">
    <div class="container">
      <div class="row">

        @if ($features)
            @foreach ($features as $feature)
            <div class="col-md-4">
                <div class="single-feature">
                <a href="#" class="title">
                    <i class="flaticon-money"></i>
                    <h3>{{$feature->title ?? 'Feature Title'}}</h3>
                </a>
                <p>{{$feature->description ?? 'Feature description'}}</p>
                </div>
            </div>
            @endforeach
        @endif

      </div>
    </div>
  </section>
