<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $condition->id !!}
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! $condition->user_id !!}
</div>

<!-- condition Field -->
<div class="form-group">
    {!! Form::label('condition', 'condition:') !!}
    {!! $condition->condition !!}
</div>

<!-- Modify By Field -->
<div class="form-group">
    {!! Form::label('modify_by', 'Modify By:') !!}
    {!! $condition->modify_by !!}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! $condition->deleted_at !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $condition->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $condition->updated_at !!}
</div>

