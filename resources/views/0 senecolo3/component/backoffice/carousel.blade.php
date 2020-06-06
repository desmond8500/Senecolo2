<div class="row">
    <div class="col-md-8">
        <div class="row">
            @foreach (Storage::disk('public')->files("Ecommerce/images/carousel") as $image)
            <div class="col-md-4">
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
                <input type="file" class="form-control" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
