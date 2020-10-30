<!-- Estado Libro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_libro', 'Estado Libro:') !!}
    {!! Form::text('estado_libro', null, ['class' => 'form-control']) !!}
</div>

<!-- Libros Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libros_id', 'Libros Id:') !!}
    {!! Form::text('libros_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estados.index') }}" class="btn btn-default">Cancel</a>
</div>
