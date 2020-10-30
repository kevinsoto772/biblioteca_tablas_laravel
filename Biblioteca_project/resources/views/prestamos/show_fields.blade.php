<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $prestamos->id }}</p>
</div>

<!-- Fecha Prestamo Field -->
<div class="form-group">
    {!! Form::label('fecha_prestamo', 'Fecha Prestamo:') !!}
    <p>{{ $prestamos->fecha_prestamo }}</p>
</div>

<!-- Hora Prestamo Field -->
<div class="form-group">
    {!! Form::label('Hora_prestamo', 'Hora Prestamo:') !!}
    <p>{{ $prestamos->Hora_prestamo }}</p>
</div>

<!-- Clientes Id Field -->
<div class="form-group">
    {!! Form::label('clientes_id', 'Clientes Id:') !!}
    <p>{{ $prestamos->clientes_id }}</p>
</div>

<!-- Tipo Prestamoid Field -->
<div class="form-group">
    {!! Form::label('tipo_prestamoid', 'Tipo Prestamoid:') !!}
    <p>{{ $prestamos->tipo_prestamoid }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $prestamos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $prestamos->updated_at }}</p>
</div>

