<!-- Button trigger modal -->
<a type="button" class="btn btn-primary btn-sm text-white {{ $class ?? ''}}" data-toggle="modal" data-target="#editArticle{{ $article->id }}">
    <i class="fa fa-edit"></i>
</a>

  <!-- Modal -->
<div class="modal fade" id="editArticle{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="editArticle{{ $article->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editArticle{{ $article->id }}Label">Editer une catégorie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('ecommerceArticles.update',['ecommerceArticle'=>$article]) }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Nom de l'article</label>
                        <input type="text" name="article" class="form-control" required value="{{ $article->article }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Quantite</label>
                        <input type="text" name="quantite" class="form-control" required value="{{ $article->quantite }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Prix d'achat</label>
                        <input type="text" name="prix_achat" class="form-control" required value="{{ $article->prix_achat }}">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Prix de vente</label>
                        <input type="text" name="prix_vente" class="form-control" value="0" value="{{ $article->prix_vente }}">
                    </div>
                        {{-- <input type="text" name="prix_vente"  hidden class="form-control" required> --}}
                    <div class="form-group col-sm-6">
                        <label>Categorie</label>
                        <input type="text" name="category" class="form-control" required value="{{ $article->category }}">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Images</label>
                        <input type="file" name="images" class="form-control">
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <textarea name="description"  rows="5" class="form-control">{{ $article->description}} </textarea>
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
