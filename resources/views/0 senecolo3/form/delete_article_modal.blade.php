<!-- Button trigger modal -->
<a type="button" class="btn btn-danger btn-sm text-white {{ $class ?? ''}}" data-toggle="modal" data-target="#deleteArticle{{ $article->id }}">
    <i class="fa fa-trash"></i>
</a>

  <!-- Modal -->
<div class="modal fade" id="deleteArticle{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteArticle{{ $article->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteArticle{{ $article->id }}Label">Supprimmr un article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('ecommerceArticles.destroy',['ecommerceArticle'=>$article]) }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                @method('delete')
                Etes vous sur de pouvoir supprimer cet article.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-danger">Valider</button>
            </div>
        </form>
      </div>
    </div>
</div>
