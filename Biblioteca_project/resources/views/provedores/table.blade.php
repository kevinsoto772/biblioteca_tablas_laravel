<div class="table-responsive">
    <table class="table" id="provedores-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Libros Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($provedores as $provedores)
            <tr>
                <td>{{ $provedores->nombre }}</td>
            <td>{{ $provedores->direccion }}</td>
            <td>{{ $provedores->telefono }}</td>
            <td>{{ $provedores->libros_id }}</td>
                <td>
                    {!! Form::open(['route' => ['provedores.destroy', $provedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('provedores.show', [$provedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('provedores.edit', [$provedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
