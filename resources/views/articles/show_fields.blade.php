<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $article->id }}</p>
</div>

<!-- Article Field -->
<div class="form-group">
    {!! Form::label('article', 'Article:') !!}
    <p>{{ $article->article }}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $article->images }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $article->description }}</p>
</div>

<!-- Quantite Field -->
<div class="form-group">
    {!! Form::label('quantite', 'Quantite:') !!}
    <p>{{ $article->quantite }}</p>
</div>

<!-- Categorie Field -->
<div class="form-group">
    {!! Form::label('categorie', 'Categorie:') !!}
    <p>{{ $article->categorie }}</p>
</div>

<!-- Prix Achat Field -->
<div class="form-group">
    {!! Form::label('prix_achat', 'Prix Achat:') !!}
    <p>{{ $article->prix_achat }}</p>
</div>

<!-- Prix Vente Field -->
<div class="form-group">
    {!! Form::label('prix_vente', 'Prix Vente:') !!}
    <p>{{ $article->prix_vente }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $article->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $article->updated_at }}</p>
</div>

