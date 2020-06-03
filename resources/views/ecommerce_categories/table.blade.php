<div class="table-responsive-sm">
    <table class="table table-striped" id="ecommerceCategories-table">
        <thead>
            <tr>
                <th>Categorie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ecommerceCategories as $ecommerceCategory)
            <tr>
                <td>{{ $ecommerceCategory->categorie }}</td>
                <td>
                    {!! Form::open(['route' => ['ecommerceCategories.destroy', $ecommerceCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ecommerceCategories.show', [$ecommerceCategory->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ecommerceCategories.edit', [$ecommerceCategory->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>