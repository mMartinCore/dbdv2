

<!-- condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition', 'Condition:') !!}
    {!! Form::text('condition', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('conditions.index') !!}" class="btn btn-default">Cancel</a>
</div>
