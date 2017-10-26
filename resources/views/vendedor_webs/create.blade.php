@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vendedor Web
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vendedorWebs.store']) !!}

                        @include('vendedor_webs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
