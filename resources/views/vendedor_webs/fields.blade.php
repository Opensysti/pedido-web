<!-- Codigo Field -->
<div class="form-group col-sm-2">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fantasia', 'Fantasia:') !!}
    {!! Form::text('fantasia', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone', 'Fone:') !!}
    {!! Form::text('fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone', 'Fone:') !!}
    {!! Form::text('fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone1', 'Fone1:') !!}
    {!! Form::text('fone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Regiao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regiao', 'Regiao:') !!}
    {!! Form::number('regiao', null, ['class' => 'form-control']) !!}
</div>

<!-- Comissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comissao', 'Comissao:') !!}
    {!! Form::number('comissao', null, ['class' => 'form-control']) !!}
</div>

<!-- Comissao Flutuante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comissao_flutuante', 'Comissao Flutuante:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('comissao_flutuante', false) !!}
        {!! Form::checkbox('comissao_flutuante', '1', null) !!} 1
    </label>
</div>

<!-- Meta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::number('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Deduz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deduz', 'Deduz:') !!}
    {!! Form::number('deduz', null, ['class' => 'form-control']) !!}
</div>

<!-- Permite Desconto Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permite_desconto_especial', 'Permite Desconto Especial:') !!}
    {!! Form::number('permite_desconto_especial', null, ['class' => 'form-control']) !!}
</div>

<!-- Permite Prazo Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permite_prazo_especial', 'Permite Prazo Especial:') !!}
    {!! Form::number('permite_prazo_especial', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::number('nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log', 'Log:') !!}
    {!! Form::text('log', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendedorWebs.index') !!}" class="btn btn-default">Cancel</a>
</div>
