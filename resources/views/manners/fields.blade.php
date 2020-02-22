

<!-- manner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manner', 'Manner:') !!}
    {!! Form::text('manner', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('manners.index') !!}" class="btn btn-default">Cancel</a>
</div>
