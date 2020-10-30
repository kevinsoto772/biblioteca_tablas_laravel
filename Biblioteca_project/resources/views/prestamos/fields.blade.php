<!-- Fecha Prestamo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_prestamo', 'Fecha Prestamo:') !!}
    {!! Form::text('fecha_prestamo', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Prestamo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora_prestamo', 'Hora Prestamo:') !!}
    {!! Form::text('Hora_prestamo', null, ['class' => 'form-control']) !!}
</div>

<!-- Clientes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientes_id', 'Clientes Id:') !!}
    {!! Form::text('clientes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Prestamoid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_prestamoid', 'Tipo Prestamoid:') !!}
    {!! Form::text('tipo_prestamoid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prestamos.index') }}" class="btn btn-default">Cancel</a>
</div>
