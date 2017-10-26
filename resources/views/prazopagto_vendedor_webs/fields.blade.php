<!-- Codigo Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_pagamento', 'Codigo Pagamento:') !!}
    {!! Form::number('codigo_pagamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Prazopgto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_prazopgto', 'Descricao Prazopgto:') !!}
    {!! Form::text('descricao_prazopgto', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Vendedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_vendedor', 'Codigo Vendedor:') !!}
    {!! Form::number('codigo_vendedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log', 'Log:') !!}
    {!! Form::text('log', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prazopagtoVendedorWebs.index') !!}" class="btn btn-default">Cancel</a>
</div>
