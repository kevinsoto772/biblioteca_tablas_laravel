<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $libros->id }}</p>
</div>

<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('ISBN', 'Isbn:') !!}
    <p>{{ $libros->ISBN }}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('Titulo', 'Titulo:') !!}
    <p>{{ $libros->Titulo }}</p>
</div>

<!-- Fecha Lanzamiento Field -->
<div class="form-group">
    {!! Form::label('fecha_lanzamiento', 'Fecha Lanzamiento:') !!}
    <p>{{ $libros->fecha_lanzamiento }}</p>
</div>

<!-- Idioma Field -->
<div class="form-group">
    {!! Form::label('Idioma', 'Idioma:') !!}
    <p>{{ $libros->Idioma }}</p>
</div>

<!-- Edicion Field -->
<div class="form-group">
    {!! Form::label('Edicion', 'Edicion:') !!}
    <p>{{ $libros->Edicion }}</p>
</div>

<!-- Autor Id Field -->
<div class="form-group">
    {!! Form::label('autor_id', 'Autor Id:') !!}
    <p>{{ $libros->autor_id }}</p>
</div>

<!-- Editorial Id Field -->
<div class="form-group">
    {!! Form::label('editorial_id', 'Editorial Id:') !!}
    <p>{{ $libros->editorial_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $libros->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $libros->updated_at }}</p>
</div>

