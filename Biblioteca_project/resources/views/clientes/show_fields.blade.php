<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $clientes->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $clientes->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $clientes->apellido }}</p>
</div>

<!-- Cedula Field -->
<div class="form-group">
    {!! Form::label('cedula', 'Cedula:') !!}
    <p>{{ $clientes->cedula }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $clientes->telefono }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $clientes->correo }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $clientes->direccion }}</p>
</div>

<!-- Fecha Nacimineto Field -->
<div class="form-group">
    {!! Form::label('Fecha_Nacimineto', 'Fecha Nacimineto:') !!}
    <p>{{ $clientes->Fecha_Nacimineto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $clientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $clientes->updated_at }}</p>
</div>

