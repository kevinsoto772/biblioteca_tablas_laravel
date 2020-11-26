<!-- Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ISBN', 'Isbn:') !!}
    {!! Form::text('ISBN', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Titulo', 'Titulo:') !!}
    {!! Form::text('Titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Lanzamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_lanzamiento', 'Fecha Lanzamiento:') !!}
    {!! Form::text('fecha_lanzamiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Idioma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Idioma', 'Idioma:') !!}
    {!! Form::text('Idioma', null, ['class' => 'form-control']) !!}
</div>

<!-- Edicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Edicion', 'Edicion:') !!}
    {!! Form::text('Edicion', null, ['class' => 'form-control']) !!}
</div>

<!-- Autor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autor_id', 'Autor Id:') !!}
    {!! Form::select('autor_id',$Autor,null,['class' => 'form-control']) !!}
</div>

<!-- Editorial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('editorial_id', 'Editorial Id:') !!}
    {!! Form::select('editorial_id',$Editorial,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('libros.index') }}" class="btn btn-default">Cancel</a>
</div>
