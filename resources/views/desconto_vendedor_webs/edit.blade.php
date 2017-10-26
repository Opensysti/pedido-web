@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desconto Vendedor Web
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($descontoVendedorWeb, ['route' => ['descontoVendedorWebs.update', $descontoVendedorWeb->id], 'method' => 'patch']) !!}

                        @include('desconto_vendedor_webs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection