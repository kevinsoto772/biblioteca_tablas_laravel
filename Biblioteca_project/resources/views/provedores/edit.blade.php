@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Provedores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($provedores, ['route' => ['provedores.update', $provedores->id], 'method' => 'patch']) !!}

                        @include('provedores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection