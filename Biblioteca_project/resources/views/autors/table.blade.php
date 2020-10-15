<div class="table-responsive">
    <table class="table" id="autors-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Nacionalidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($autors as $autor)
            <tr>
                <td>{{ $autor->nombre }}</td>
            <td>{{ $autor->apellido }}</td>
            <td>{{ $autor->nacionalidad }}</td>
                <td>
                    {!! Form::open(['route' => ['autors.destroy', $autor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('autors.show', [$autor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('autors.edit', [$autor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
