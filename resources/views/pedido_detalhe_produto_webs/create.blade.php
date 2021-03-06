@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pedido Detalhe Produto Web
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'pedidoDetalheProdutoWebs.store']) !!}

                        @include('pedido_detalhe_produto_webs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
