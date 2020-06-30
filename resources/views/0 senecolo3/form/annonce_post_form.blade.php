@auth
<div class="modal fade" id="posterAnnonce" tabindex="-1" role="dialog" aria-labelledby="posterAnnonceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary ">
          <h5 class="modal-title text-white" id="posterAnnonceLabel">Publier une annonce</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('ecommerceArticles.store') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <input type="text" name="user_id" value="{{$user->id}}" hidden>
                    <div class="form-group col-sm-6">
                        <label>Nom de l'article</label>
                        <input type="text" name="article" class="form-control" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Quantite</label>
                        <input type="number" name="quantite" class="form-control" required value="1" min="1">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Prix</label>
                        <input type="text" name="prix_achat" class="form-control" required min="1" value="0">
                        <input type="text" name="prix_vente" class="form-control" value="0" hidden>
                    </div>
                        {{-- <input type="text" name="prix_vente"  hidden class="form-control" required> --}}
                    <div class="form-group col-sm-6">
                        <label>Categorie</label> <br>
                        <select class="sorting" name="category" style="display: none;">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->categorie }} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Type</label> <br>
                        <select class="sorting" name="type" style="display: none;">
                        <option>Recyclable</option>
                        <option>Recyclé</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Images</label>
                        <input type="file" name="images" class="form-control">
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <textarea name="description"  rows="5" class="form-control" placeholder="Description de l'article" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
      </div>
    </div>
</div>

@else

<div class="modal fade" id="posterAnnonce" tabindex="-1" role="dialog" aria-labelledby="posterAnnonceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header annonce_top">
          <h5 class="modal-title" id="posterAnnonceLabel">Publier une annonce</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('register')}}" method="post">
            <div class="modal-body">
            {{-- <div class="text-center mb-4">
                Connectez-vous pour pouvoir publier une annonce
            </div>
            <div class="text-center">
                <a href="{{route('login')}}" class="btn btn-primary"> Connexion </a>
                <a href="{{route('register')}}" class="btn btn-primary"> Inscription </a>
            </div>

            <hr> --}}
                @csrf
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Nom complet</label>
                        <input type="text" name="name" class="form-control" placeholder="Prénom et Nom" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Email</label>
                        <input type="email" name="article" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Confirmation du Mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmation du mot de passe" required>
                    </div>
                </div>
                <p class="text-center mt-3"> En nous rejoignant vous acceptez les <a href="">conditions d'utilisation </a> de Sen Ecolomarket </p>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary rounded-pill text-center">Envoyer</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </form>
      </div>
    </div>
</div>

<style>
.annonce_top{
    border-top: 4px solid #0B7AED;
}


</style>


@endauth
