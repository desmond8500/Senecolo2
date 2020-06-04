<div class="table-responsive-sm">
    <table class="table table-striped" id="ecommercePaniers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Product Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ecommercePaniers as $ecommercePanier)
            <tr>
                <td>{{ $ecommercePanier->user_id }}</td>
            <td>{{ $ecommercePanier->product_id }}</td>
                <td>
                    {!! Form::open(['route' => ['ecommercePaniers.destroy', $ecommercePanier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ecommercePaniers.show', [$ecommercePanier->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ecommercePaniers.edit', [$ecommercePanier->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>