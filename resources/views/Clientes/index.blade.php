@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Clientes</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush" id="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Documento</th>
                <th scope="col">Direccion</th>
                <th scope="col">Fecha de nacimiento</th>
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
      ajax: '{!! route('dataTableClientes') !!}',
      columns: [
        {data: 'id'},
        {data: 'Nombre'},
        {data: 'Primer_apellido'},
        {data: 'Segundo_apellido'},
        {data: 'telefono'},
        {data: 'correo'}, 
        {data: 'documento'},
        {data: 'direccion'},

        {data: 'fecha_de_nacimiento'},
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
