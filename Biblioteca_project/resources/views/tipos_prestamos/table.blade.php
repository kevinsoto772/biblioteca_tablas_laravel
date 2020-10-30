<div class="table-responsive">
    <table class="table" id="tiposPrestamos-table">
        <thead>
            <tr>
                <th>Tipo Prestamo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tiposPrestamos as $tiposPrestamo)
            <tr>
                <td>{{ $tiposPrestamo->Tipo_prestamo }}</td>
                <td>
                    {!! Form::open(['route' => ['tiposPrestamos.destroy', $tiposPrestamo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tiposPrestamos.show', [$tiposPrestamo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tiposPrestamos.edit', [$tiposPrestamo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
