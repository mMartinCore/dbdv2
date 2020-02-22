<table class="table table-responsive" id="manners-table">
    <thead>
        <tr>
        <th>Manner</th>
       <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($manners as $manner)
        <tr>
            <td>{!! $manner->manner !!}</td>
            <td>
                {!! Form::open(['route' => ['manners.destroy', $manner->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('manners.show', [$manner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('manners.edit', [$manner->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $manners->links()  !!}
