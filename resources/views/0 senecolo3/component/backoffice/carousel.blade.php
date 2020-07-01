<div class="row">
    <div class="col-md-8">
        <div class="row bg-light p-2">


            <div class="col-md-12">
                <h4>Images du carousel</h4>
            </div>
            @foreach (Storage::disk('public')->files("Ecommerce/images/carousel") as $image)
            <div class="col-md-4">
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>
            </div>
            @endforeach

            <div class="col-md-12 mt-4 bg-lightblue">
                <form class="row" action="{{route('backoffice.add.to.carousel')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name="images[]" multiple required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Ajouter les images au carousel</button>
                    </div>
                </form>
            </div>
            <hr>


        </div>
        <div class="row bg-light p-2">
            <div class="col-md-12">
                <h4>Pub 3</h4>
            </div>
            @foreach (Storage::disk('public')->files("Ecommerce/images/pub/3") as $image)
            <div class="col-md-4">
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>
            </div>
            @endforeach

            <div class="col-md-12 mt-4 bg-lightblue">
                <form class="row" action="{{route('backoffice.add.to.pub3')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group col-md-6">
                        <input type="file" class="form-control" name="images[]" multiple required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Ajouter les images à la pub du bas</button>
                    </div>
                </form>
            </div>
            <hr>


        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            @foreach (Storage::disk('public')->files("Ecommerce/images/pub/1") as $image)
            <div class="col-md-6 alert-primary p-2">
                <h4>PUB 1</h4>
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>

                <form action="{{route('backoffice.add.to.pub1')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="file" class="form-control" name="pub1" multiple required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter la pub 1</button>
                </form>
            </div>
            @endforeach

            @foreach (Storage::disk('public')->files("Ecommerce/images/pub/2") as $image)
            <div class="col-md-6 alert-success p-2">
                <h4>PUB 2</h4>
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>

                <form action="{{route('backoffice.add.to.pub2')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="file" class="form-control" name="pub2" multiple required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter la pub 2</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-12">
        @php
            $image = Storage::disk('public')->files("Ecommerce/images/background");

            dump($image);

        @endphp
        {{-- @foreach (Storage::disk('public')->files("Ecommerce/images/background") as $image) --}}
        <div class="col-md-6 alert-primary p-2">
            <h4>Fond de page</h4>
            @if (isset($image[0]))
                <img src="{{asset("storage/$image[0]")}} " alt="" class="img-fluid" height="200px">
            @endif
            <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>

            <form action="{{route('backoffice.add.to.background')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="file" class="form-control" name="background">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le fond d'écran</button>
            </form>
        </div>
        {{-- @endforeach --}}
    </div>
    <div class="col-md-12 text-secondary my-4">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Information</strong> <br>
            Pour ajouter une image il suffit que cliquer sur le bouton parcourir, sélectionner l'image en question et appuyer sur ajouter pour envoyer l'image. <br>
            Pour le carousel et la pub3 vous pouvez charger plusieurs images à la fois. <br>
            Pub 1 et 2 sont limités à une image chacune. <br>
            L'image de fond doit être en PNG <br><br>

            Voilà ci dessous les dimensions recommandées :
            <ol>
                <li>Carousel = 900 * 570</li>
                <li>Pub 1 et 2 = 300 * 203</li>
                <li>Pub3 = 1000 * 200</li>
            </ol>
        </div>
    </div>

</div>
