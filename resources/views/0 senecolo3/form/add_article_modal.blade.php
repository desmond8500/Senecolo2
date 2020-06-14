<!-- Button trigger modal -->
<a type="button" class="btn btn-primary btn-sm text-white {{ $class ?? ''}}" data-toggle="modal" data-target="#addArticle">
    <i class="fa fa-plus"></i> Ajouter un Article
</a>

  <!-- Modal -->
<div class="modal fade" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="addArticleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addArticleLabel">Ajouter un nouvel article</h5>
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
