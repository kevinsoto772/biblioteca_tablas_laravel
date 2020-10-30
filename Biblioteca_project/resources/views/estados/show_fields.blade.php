<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $estado->id }}</p>
</div>

<!-- Estado Libro Field -->
<div class="form-group">
    {!! Form::label('estado_libro', 'Estado Libro:') !!}
    <p>{{ $estado->estado_libro }}</p>
</div>

<!-- Libros Id Field -->
<div class="form-group">
    {!! Form::label('libros_id', 'Libros Id:') !!}
    <p>{{ $estado->libros_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $estado->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $estado->updated_at }}</p>
</div>

