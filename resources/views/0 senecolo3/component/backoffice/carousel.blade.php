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

            <div class="col-md-12"></div>
            <hr>

            @foreach (Storage::disk('public')->files("Ecommerce/images/pub/1") as $image)
            <div class="col-md-6 alert-primary p-2">
                <h4>PUB 1</h4>
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>
            </div>
            @endforeach

            @foreach (Storage::disk('public')->files("Ecommerce/images/pub/2") as $image)
            <div class="col-md-6 alert-success p-2">
                <h4>PUB 2</h4>
                <img src="{{asset("storage/$image")}} " alt="" class="img-fluid">
                <a href="{{ route('backoffice.delete.carousel.image',['img'=>$image])}} ">Supprimer</a>
            </div>
            @endforeach

        </div>

    </div>
    <div class="col-md-4">
        <p>
        C'est ici que l'on ajoute les images qui défilent au niveau de la page d'accueil.

        </p>
        <hr>
        <form action="{{route('backoffice.add.to.carousel')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="file" class="form-control" name="images[]" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter les images au carousel</button>
        </form>
        <hr>
        <form action="{{route('backoffice.add.to.pub1')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="file" class="form-control" name="pub1" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter la pub 1</button>
        </form>
        <hr>
        <form action="{{route('backoffice.add.to.pub2')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="file" class="form-control" name="pub2" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter la pub 2</button>
        </form>
    </div>
</div>
