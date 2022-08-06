<!-- Fieldq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fieldq', __('models/testers.fields.fieldq').':') !!}
    {!! Form::text('fieldq', null, ['class' => 'form-control']) !!}
</div>

<!-- Field2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('field2', __('models/testers.fields.field2').':') !!}
    {!! Form::number('field2', null, ['class' => 'form-control']) !!}
</div>