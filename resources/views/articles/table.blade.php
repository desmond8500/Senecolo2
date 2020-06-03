<div class="table-responsive-sm">
    <table class="table table-striped" id="articles-table">
        <thead>
            <tr>
                <th>Article</th>
        <th>Images</th>
        <th>Description</th>
        <th>Quantite</th>
        <th>Categorie</th>
        <th>Prix Achat</th>
        <th>Prix Vente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->article }}</td>
            <td>{{ $article->images }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->quantite }}</td>
            <td>{{ $article->categorie }}</td>
            <td>{{ $article->prix_achat }}</td>
            <td>{{ $article->prix_vente }}</td>
                <td>
                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$article->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$article->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>