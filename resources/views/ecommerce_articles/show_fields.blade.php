<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ecommerceArticle->id }}</p>
</div>

<!-- Article Field -->
<div class="form-group">
    {!! Form::label('article', 'Article:') !!}
    <p>{{ $ecommerceArticle->article }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $ecommerceArticle->description }}</p>
</div>

<!-- Prix Achat Field -->
<div class="form-group">
    {!! Form::label('prix_achat', 'Prix Achat:') !!}
    <p>{{ $ecommerceArticle->prix_achat }}</p>
</div>

<!-- Prix Vente Field -->
<div class="form-group">
    {!! Form::label('prix_vente', 'Prix Vente:') !!}
    <p>{{ $ecommerceArticle->prix_vente }}</p>
</div>

<!-- Quantite Field -->
<div class="form-group">
    {!! Form::label('quantite', 'Quantite:') !!}
    <p>{{ $ecommerceArticle->quantite }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $ecommerceArticle->category }}</p>
</div>

<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $ecommerceArticle->images }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ecommerceArticle->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ecommerceArticle->updated_at }}</p>
</div>

