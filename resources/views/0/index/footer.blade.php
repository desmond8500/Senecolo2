<div class="row bg-light p-4 mt-2">
    <div class="col-md-12">
        <h3>Contactez-nous</h3>
    </div>
    <div class="col-md-3">
        <div class="font-weight-bold">Adresse</div>
        <p>Guédiawaye, Dakar/ Sénégal</p>
        <div class="font-weight-bold">Appelez-nous</div>
        <p>  77 555 76 37 / 77 728 88 95  </p>

        <div class="font-weight-bold">Email</div>
        <p>contact@senecolomarket.com</p>
    </div>
    <div class="col-md-2">
        <div class="card card-body">
            <div class="card-title bg-info text-white p-1">Produits recyclables</div>
            @include('0.content.menur')
        </div>
    </div>
    <div class="col-md-2">
        <div class="card card-body">
            <div class="card-title bg-info text-white p-1">Produits recyclés</div>
            @include('0.content.menur')
        </div>
    </div>
    <div class="col-md-5">
        <form action="">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Prénom">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Adresse mail">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Téléphone">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <textarea name="" class="form-control" cols="30" rows="7" placeholder="Laissez-nous votre message ici"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-success">Valider </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <a href=" {{ route('index')}} " class="btn btn-success">Version 1</a>
        <a href=" {{ route('index1')}} " class="btn btn-success">Version 2</a>
    </div>
</div>
