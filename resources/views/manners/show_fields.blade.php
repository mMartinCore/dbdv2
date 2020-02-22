<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $manner->id !!}
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! $manner->user_id !!}
</div>

<!-- manner Field -->
<div class="form-group">
    {!! Form::label('manner', 'manner:') !!}
    {!! $manner->manner !!}
</div>

<!-- Modify By Field -->
<div class="form-group">
    {!! Form::label('modify_by', 'Modify By:') !!}
    {!! $manner->modify_by !!}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! $manner->deleted_at !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $manner->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $manner->updated_at !!}
</div>

