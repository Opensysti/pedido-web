<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Descestoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descestoque', 'Descestoque:') !!}
    {!! Form::text('descestoque', null, ['class' => 'form-control']) !!}
</div>

<!-- Codbarra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codbarra', 'Codbarra:') !!}
    {!! Form::text('codbarra', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade', 'Unidade:') !!}
    {!! Form::text('unidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Clasfis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clasfis', 'Clasfis:') !!}
    {!! Form::number('clasfis', null, ['class' => 'form-control']) !!}
</div>

<!-- Precocompra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precocompra', 'Precocompra:') !!}
    {!! Form::number('precocompra', null, ['class' => 'form-control']) !!}
</div>

<!-- Precocusto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precocusto', 'Precocusto:') !!}
    {!! Form::number('precocusto', null, ['class' => 'form-control']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso:') !!}
    {!! Form::number('peso', null, ['class' => 'form-control']) !!}
</div>

<!-- Estoqueminimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estoqueminimo', 'Estoqueminimo:') !!}
    {!! Form::number('estoqueminimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Embalagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('embalagem', 'Embalagem:') !!}
    {!! Form::number('embalagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Cubagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cubagem', 'Cubagem:') !!}
    {!! Form::number('cubagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Caixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caixa', 'Caixa:') !!}
    {!! Form::number('caixa', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ativo', 'Ativo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ativo', false) !!}
        {!! Form::checkbox('ativo', '1', null) !!} 1
    </label>
</div>

<!-- Grupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo', 'Grupo:') !!}
    {!! Form::text('grupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Margem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('margem', 'Margem:') !!}
    {!! Form::number('margem', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Adicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info_adicional', 'Info Adicional:') !!}
    {!! Form::text('info_adicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_web', 'Codigo Web:') !!}
    {!! Form::text('codigo_web', null, ['class' => 'form-control']) !!}
</div>

<!-- Certo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certo', 'Certo:') !!}
    {!! Form::number('certo', null, ['class' => 'form-control']) !!}
</div>

<!-- Localizacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localizacao', 'Localizacao:') !!}
    {!! Form::text('localizacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade', 'Capacidade:') !!}
    {!! Form::number('capacidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Icms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icms', 'Icms:') !!}
    {!! Form::number('icms', null, ['class' => 'form-control']) !!}
</div>

<!-- Icm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icm', 'Icm:') !!}
    {!! Form::number('icm', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Seq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_seq', 'Codigo Seq:') !!}
    {!! Form::number('codigo_seq', null, ['class' => 'form-control']) !!}
</div>

<!-- Materia Prima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materia_prima', 'Materia Prima:') !!}
    {!! Form::text('materia_prima', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Dum Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_dum', 'Codigo Dum:') !!}
    {!! Form::text('codigo_dum', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('produtoWebs.index') !!}" class="btn btn-default">Cancel</a>
</div>
