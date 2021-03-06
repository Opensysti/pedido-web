@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prazopagto Vendedor Web
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prazopagtoVendedorWeb, ['route' => ['prazopagtoVendedorWebs.update', $prazopagtoVendedorWeb->id], 'method' => 'patch']) !!}

                        @include('prazopagto_vendedor_webs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection