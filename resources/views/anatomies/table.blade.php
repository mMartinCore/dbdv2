<table class="table table-responsive" id="anatomies-table">
    <thead>
        <tr>
        <th>Anatomy</th>
       <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($anatomies as $anatomy)
        <tr>
            <td>{!! $anatomy->anatomy !!}</td>
            <td>
                {!! Form::open(['route' => ['anatomies.destroy', $anatomy->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('anatomies.show', [$anatomy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('anatomies.edit', [$anatomy->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $anatomies->links()  !!}
