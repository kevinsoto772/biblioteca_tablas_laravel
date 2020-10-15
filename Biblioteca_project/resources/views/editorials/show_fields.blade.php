<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $editorial->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $editorial->nombre }}</p>
</div>

<!-- Pais Field -->
<div class="form-group">
    {!! Form::label('pais', 'Pais:') !!}
    <p>{{ $editorial->pais }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $editorial->estado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $editorial->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $editorial->updated_at }}</p>
</div>

