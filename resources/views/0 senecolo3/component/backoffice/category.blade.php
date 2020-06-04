<div class="row">
    <div class="col-md-12">
        @include('0 senecolo3.form.add_category_modal')
        @include('0 senecolo3.form.add_article_modal')
    </div>
    <div class="col-md-12 mt-2">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $categorie)
            <tr>
                <th scope="row">{{ $key }} </th>
                    <form action="{{route('ecommerceCategories.update',['ecommerceCategory'=>$categorie])}}" method="post" class="mr-1 mb-1">
                        @csrf
                        @method('put')
                <td>
                        <div class="form-group">
                            <input type="text" name="categorie" class="form-control" value="{{$categorie->categorie}}">
                        </div>
                </td>
                <td>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </button>

                    </form>
                    <form action="{{route('ecommerceCategories.destroy',['ecommerceCategory'=>$categorie])}}" method="POST" class="float-right">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
