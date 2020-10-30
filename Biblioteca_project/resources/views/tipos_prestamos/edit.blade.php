@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos Prestamo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tiposPrestamo, ['route' => ['tiposPrestamos.update', $tiposPrestamo->id], 'method' => 'patch']) !!}

                        @include('tipos_prestamos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection