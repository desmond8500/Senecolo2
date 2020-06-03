<div class="table-responsive-sm">
    <table class="table table-striped" id="ecommerceArticles-table">
        <thead>
            <tr>
                <th>Article</th>
        <th>Description</th>
        <th>Prix Achat</th>
        <th>Prix Vente</th>
        <th>Quantite</th>
        <th>Category</th>
        <th>Images</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ecommerceArticles as $ecommerceArticle)
            <tr>
                <td>{{ $ecommerceArticle->article }}</td>
            <td>{{ $ecommerceArticle->description }}</td>
            <td>{{ $ecommerceArticle->prix_achat }}</td>
            <td>{{ $ecommerceArticle->prix_vente }}</td>
            <td>{{ $ecommerceArticle->quantite }}</td>
            <td>{{ $ecommerceArticle->category }}</td>
            <td>{{ $ecommerceArticle->images }}</td>
                <td>
                    {!! Form::open(['route' => ['ecommerceArticles.destroy', $ecommerceArticle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ecommerceArticles.show', [$ecommerceArticle->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ecommerceArticles.edit', [$ecommerceArticle->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>