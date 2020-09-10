@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Proveedores</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('proveedores.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
      <table class="table align-items-center table-flush" id="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Direccion</th>
              <th scope="col">Telefono</th>
              <th scope="col">User ID</th>
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
      ajax: '{!! route('dataTableProveedores') !!}',
      columns: [
        {data: 'id'},
        {data: 'nombre'},
        {data: 'direccion'},
        {data: 'telefono'},
        {data: 'user_id'},
    
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


