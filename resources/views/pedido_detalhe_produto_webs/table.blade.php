<table class="table table-responsive" id="pedidoDetalheProdutoWebs-table">
    <thead>
        <tr>
            <th>Pedido</th>
        <th>Item</th>
        <th>Quant</th>
        <th>Produto</th>
        <th>Preco</th>
        <th>Faturar</th>
        <th>Inf Adicional</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pedidoDetalheProdutoWebs as $pedidoDetalheProdutoWeb)
        <tr>
            <td>{!! $pedidoDetalheProdutoWeb->pedido !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->item !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->quant !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->produto !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->preco !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->faturar !!}</td>
            <td>{!! $pedidoDetalheProdutoWeb->inf_adicional !!}</td>
            <td>
                {!! Form::open(['route' => ['pedidoDetalheProdutoWebs.destroy', $pedidoDetalheProdutoWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pedidoDetalheProdutoWebs.show', [$pedidoDetalheProdutoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pedidoDetalheProdutoWebs.edit', [$pedidoDetalheProdutoWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>