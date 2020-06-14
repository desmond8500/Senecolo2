<div class="row">
    <div class="col-md-12">
        @include('0 senecolo3.form.add_category_modal')
        @include('0 senecolo3.form.add_article_modal')
    </div>

    @foreach ($categories as $key => $categorie)
    <div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('ecommerceCategories.update',['ecommerceCategory'=>$categorie])}}" method="post" class="mr-1 mb-1 col-md-10">
                        @csrf
                        @method('put')

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="categorie" value="{{$categorie->categorie}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary" id="button-addon2"><i class="fa fa-edit"></i></button>
                            </div>
                        </div>
                </form>
                <form action="{{route('ecommerceCategories.destroy',['ecommerceCategory'=>$categorie])}}" method="POST" class="float-right col-md-1">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </div>

        </div>

    </div>
    @endforeach

</div>
