<table class="table table-responsive" id="pedidoMasterProdutoWebs-table">
    <thead>
        <tr>
        <th>Pedido</th>
        <th>CNPJ</th>
        <th>Dataemis</th>
        <th>Vendedor</th>
        <th>Tabela</th>
        <th>Ordcomp</th>
        <th>Frete</th>
        <th>Modalidade</th>
        <th>Condpaga</th>
        <th>Data Envio</th>
        <th>Hora Envio</th>
        <th>Desc Condpgto</th>
        <th>Pedido Empresa</th>
        <th>Nfe Empresa</th>
        <th>Datanfe Empresa</th>
        <th>Valornfe Empresa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pedidoMasterProdutoWebs as $pedidoMasterProdutoWeb)
        <tr>
            <td>{!! $pedidoMasterProdutoWeb->pedido !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->cgc !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->objetivo !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->dataemis !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->vendedor !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->tabela !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->ordcomp !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->frete !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->modalidade !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->condpaga !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->data_envio !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->hora_envio !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->desc_condpgto !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->pedido_empresa !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->nfe_empresa !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->datanfe_empresa !!}</td>
            <td>{!! $pedidoMasterProdutoWeb->valornfe_empresa !!}</td>
            <td>
                {!! Form::open(['route' => ['pedidoMasterProdutoWebs.destroy', $pedidoMasterProdutoWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pedidoMasterProdutoWebs.show', [$pedidoMasterProdutoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pedidoMasterProdutoWebs.edit', [$pedidoMasterProdutoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>