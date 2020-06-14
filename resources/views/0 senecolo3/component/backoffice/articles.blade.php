<div class="row">
    <div class="col-md-12">
        @include('0 senecolo3.form.add_category_modal')
        @include('0 senecolo3.form.add_article_modal')
    </div>
    <div class="col-md-12 mt-2 table-responsive">
        <table class="table bg-white">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Désignation</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Type</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $key => $article)
            @php
                $image = asset("storage/Ecommerce/Articles/$article->id/images/$article->images");
            @endphp
            <tr>
                <th scope="row">{{ $key+1 }} </th>
                <td><img src="{{$image}}" height="50px" alt="{{$image}}"> </td>
                <td>{{ $article->article}} </td>
                <td>{{ $article->category}} </td>
                <td>{{ $article->type}} </td>
                <td>{{ $article->quantite}} </td>
                <td>{{ $article->prix_vente}} </td>
                <td>
                    @include('0 senecolo3.form.edit_article_modal')
                    @include('0 senecolo3.form.delete_article_modal')
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
