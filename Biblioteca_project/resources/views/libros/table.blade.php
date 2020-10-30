<div class="table-responsive">
    <table class="table" id="libros-table">
        <thead>
            <tr>
                <th>Isbn</th>
        <th>Titulo</th>
        <th>Fecha Lanzamiento</th>
        <th>Idioma</th>
        <th>Edicion</th>
        <th>Autor Id</th>
        <th>Editorial Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libros)
            <tr>
                <td>{{ $libros->ISBN }}</td>
            <td>{{ $libros->Titulo }}</td>
            <td>{{ $libros->fecha_lanzamiento }}</td>
            <td>{{ $libros->Idioma }}</td>
            <td>{{ $libros->Edicion }}</td>
            <td>{{ $libros->autor}}</td>
            <td>{{ $libros->editorial}}</td>
                <td>
                    {!! Form::open(['route' => ['libros.destroy', $libros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libros.show', [$libros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('libros.edit', [$libros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
