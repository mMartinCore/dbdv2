<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $anatomy->id !!}
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! $anatomy->user_id !!}
</div>

<!-- anatomy Field -->
<div class="form-group">
    {!! Form::label('anatomy', 'anatomy:') !!}
    {!! $anatomy->anatomy !!}
</div>

<!-- Modify By Field -->
<div class="form-group">
    {!! Form::label('modify_by', 'Modify By:') !!}
    {!! $anatomy->modify_by !!}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! $anatomy->deleted_at !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $anatomy->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $anatomy->updated_at !!}
</div>

