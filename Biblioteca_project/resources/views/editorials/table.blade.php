<div class="table-responsive">
    <table class="table" id="editorials-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Pais</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($editorials as $editorial)
            <tr>
                <td>{{ $editorial->nombre }}</td>
            <td>{{ $editorial->pais }}</td>
            <td>{{ $editorial->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['editorials.destroy', $editorial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('editorials.show', [$editorial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('editorials.edit', [$editorial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
