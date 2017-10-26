<!-- Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido', 'Pedido:') !!}
    {!! Form::number('pedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item', 'Item:') !!}
    {!! Form::number('item', null, ['class' => 'form-control']) !!}
</div>

<!-- Quant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quant', 'Quant:') !!}
    {!! Form::number('quant', null, ['class' => 'form-control']) !!}
</div>

<!-- Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produto', 'Produto:') !!}
    {!! Form::text('produto', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco', 'Preco:') !!}
    {!! Form::number('preco', null, ['class' => 'form-control']) !!}
</div>

<!-- Faturar Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('faturar', 'Faturar:') !!}
    {!! Form::number('faturar', null, ['class' => 'form-control']) !!}
</div--!>

<!-- Inf Adicional Field -->
<!--Colapse-->
<div class="form-group col-sm-6">
    {!! Form::label('inf_adicional', 'Inf Adicional:') !!}
    {!! Form::text('inf_adicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidoDetalheProdutoWebs.index') !!}" class="btn btn-default">Cancel</a>
</div>
