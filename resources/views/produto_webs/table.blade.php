<table class="table table-responsive" id="produtoWebs-table">
    <thead>
        <tr>
            <th>Codigo</th>
        <th>Descricao</th>
        <!--th>Descestoque</th>
        <th>Codbarra</th>
        <th>Unidade</th>
        <th>Clasfis</th>
        <th>Precocompra</th>
        <th>Precocusto</th>
        <th>Peso</th>
        <th>Estoqueminimo</th>
        <th>Embalagem</th>
        <th>Cubagem</th>
        <th>Caixa</th>
        <th>Ativo</th>
        <th>Imagem</th>
        <th>Grupo</th>
        <th>Margem</th>
        <th>Info Adicional</th>
        <th>Codigo Web</th>
        <th>Certo</th>
        <th>Localizacao</th>
        <th>Capacidade</th>
        <th>Icms</th>
        <th>Icm</th>
        <th>Codigo Seq</th>
        <th>Materia Prima</th>
        <th>Codigo Dum</th>
        <th>Linha</th-->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produtoWebs as $produtoWeb)
        <tr>
            <td>{!! $produtoWeb->codigo !!}</td>
            <td>{!! $produtoWeb->descricao !!}</td>
            <!--td>{!! $produtoWeb->descestoque !!}</td>
            <td>{!! $produtoWeb->codbarra !!}</td>
            <td>{!! $produtoWeb->unidade !!}</td>
            <td>{!! $produtoWeb->clasfis !!}</td>
            <td>{!! $produtoWeb->precocompra !!}</td>
            <td>{!! $produtoWeb->precocusto !!}</td>
            <td>{!! $produtoWeb->peso !!}</td>
            <td>{!! $produtoWeb->estoqueminimo !!}</td>
            <td>{!! $produtoWeb->embalagem !!}</td>
            <td>{!! $produtoWeb->cubagem !!}</td>
            <td>{!! $produtoWeb->caixa !!}</td>
            <td>{!! $produtoWeb->ativo !!}</td>
            <td>{!! $produtoWeb->imagem !!}</td>
            <td>{!! $produtoWeb->grupo !!}</td>
            <td>{!! $produtoWeb->margem !!}</td>
            <td>{!! $produtoWeb->info_adicional !!}</td>
            <td>{!! $produtoWeb->codigo_web !!}</td>
            <td>{!! $produtoWeb->certo !!}</td>
            <td>{!! $produtoWeb->localizacao !!}</td>
            <td>{!! $produtoWeb->capacidade !!}</td>
            <td>{!! $produtoWeb->icms !!}</td>
            <td>{!! $produtoWeb->icm !!}</td>
            <td>{!! $produtoWeb->codigo_seq !!}</td>
            <td>{!! $produtoWeb->materia_prima !!}</td>
            <td>{!! $produtoWeb->codigo_dum !!}</td>
            <td>{!! $produtoWeb->linha !!}</td-->
            <td>
                {!! Form::open(['route' => ['produtoWebs.destroy', $produtoWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('produtoWebs.show', [$produtoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('produtoWebs.edit', [$produtoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>