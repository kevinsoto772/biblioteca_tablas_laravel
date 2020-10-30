<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $pais->id }}</p>
</div>

<!-- Pais Field -->
<div class="form-group">
    {!! Form::label('pais', 'Pais:') !!}
    <p>{{ $pais->pais }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pais->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pais->updated_at }}</p>
</div>

