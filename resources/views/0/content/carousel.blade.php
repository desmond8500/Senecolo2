<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

<div class="fotorama" data-loop="true">*
    @foreach ($carousel as $item)
        <img src="{{$item}}">

    @endforeach
  </div>

{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach ($carousel as $item)
                @if($loop->first)
                    <div class="carousel-item active">
                        <img src="{{$item}}" class="d-block w-100 h-50" alt="{{$item}}">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ $item }}" class="d-block w-100 h-50" alt="{{ $item }}">
                    </div>
                @endif
        @endforeach
        <div class="carousel-item">
        <img src="https://picsum.photos/200/100?random=3" class="d-block w-100" alt="https://picsum.photos/200/100?random=3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}
