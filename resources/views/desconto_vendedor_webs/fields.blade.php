<!-- Codigo Vendedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_vendedor', 'Codigo Vendedor:') !!}
    {!! Form::number('codigo_vendedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_desconto', 'Descricao Desconto:') !!}
    {!! Form::text('descricao_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Vendedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_vendedor', 'Descricao Vendedor:') !!}
    {!! Form::text('descricao_vendedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Percentual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percentual', 'Percentual:') !!}
    {!! Form::number('percentual', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log', 'Log:') !!}
    {!! Form::text('log', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('descontoVendedorWebs.index') !!}" class="btn btn-default">Cancel</a>
</div>
