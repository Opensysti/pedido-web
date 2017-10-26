@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pedido Master Produto Web
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoMasterProdutoWeb, ['route' => ['pedidoMasterProdutoWebs.update', $pedidoMasterProdutoWeb->id], 'method' => 'patch']) !!}

                        @include('pedido_master_produto_webs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection