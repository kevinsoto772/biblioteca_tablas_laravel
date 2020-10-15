<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $autor->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $autor->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $autor->apellido }}</p>
</div>

<!-- Nacionalidad Field -->
<div class="form-group">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    <p>{{ $autor->nacionalidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $autor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $autor->updated_at }}</p>
</div>

