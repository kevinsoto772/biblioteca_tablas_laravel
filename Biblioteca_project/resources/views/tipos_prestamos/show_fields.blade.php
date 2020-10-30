<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tiposPrestamo->id }}</p>
</div>

<!-- Tipo Prestamo Field -->
<div class="form-group">
    {!! Form::label('Tipo_prestamo', 'Tipo Prestamo:') !!}
    <p>{{ $tiposPrestamo->Tipo_prestamo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tiposPrestamo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tiposPrestamo->updated_at }}</p>
</div>

