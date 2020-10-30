<!-- Tipo Prestamo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tipo_prestamo', 'Tipo Prestamo:') !!}
    {!! Form::text('Tipo_prestamo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tiposPrestamos.index') }}" class="btn btn-default">Cancel</a>
</div>
