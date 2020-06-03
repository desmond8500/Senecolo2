<!-- Button trigger modal -->
<a type="button" class="btn btn-primary btn-sm text-white {{ $class ?? ''}}" data-toggle="modal" data-target="#addCategory">
    <i class="fa fa-plus"></i> Ajouter une catégorie
</a>

  <!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCategoryLabel">Ajouter une catégorie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('ecommerceCategories.store') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Nom de la catégorie</label>
                        <input type="text" name="categorie" class="form-control" required>
                    </div>
                    {{-- <div class="form-group col-sm-6">
                        <label>Pièce jointe</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <textarea name="description"  rows="5" class="form-control"></textarea>
                    </div> --}}
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
