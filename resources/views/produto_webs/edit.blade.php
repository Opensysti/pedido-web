@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Produto Web
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($produtoWeb, ['route' => ['produtoWebs.update', $produtoWeb->id], 'method' => 'patch']) !!}

                        @include('produto_webs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection