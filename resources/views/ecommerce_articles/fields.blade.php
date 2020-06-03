<!-- Article Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article', 'Article:') !!}
    {!! Form::text('article', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Achat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_achat', 'Prix Achat:') !!}
    {!! Form::text('prix_achat', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Vente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_vente', 'Prix Vente:') !!}
    {!! Form::text('prix_vente', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantite', 'Quantite:') !!}
    {!! Form::text('quantite', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::text('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ecommerceArticles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
