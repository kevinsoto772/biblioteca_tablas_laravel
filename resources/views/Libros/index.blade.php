@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Libros</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('libros.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush" id="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Pais</th>
                <th scope="col">Tipo de libro</th>
                <th scope="col">Fecha de lanzamiento</th>
                <th scope="col">Edicion</th>
               <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
              <tr>
                <td></td>
                <td>    
                </td>
                <td>              
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            
                
              </tr>
            </tfoot>
          </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    var table = $('#table').DataTable({
      processing: true,
      serverSider: true,
      ajax: '{!! route('dataTableLibros') !!}',
      columns: [
        {data: 'id'},
        {data: 'codigo_isbn'},
        {data: 'titulo'},
        {data: 'edito_id'},
        {data: 'pa_id'},
        {data: 'tipolib_id'}, 
        {data: 'fecha_lanzamiento'},
        {data: 'edicion'},

    
        {data: 'btn' },
      ],
      "columnDefs":[
      
        {
          "visible": false, "targets": [0]
        }
      ],
      
      "language":{
          "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",
          "info": "_TOTAL_ Registros",
          "search": "Buscar",
          "paginate":{
              "next": "Siguiente",
              "previous": "Anterior"
          },
          "loadingRecords": "Cargando...",
          "processing": "Procesando",
          "emptyTable": "No hay registros",
          "zeroRecords": "Sin registros"
      }
    });
    $('.filter-input').keyup(function(){
      table.column($(this).data('column'))
      .search($(this).val())
      .draw();
    });
  });
  </script>
@endsection
