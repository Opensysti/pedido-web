<li class="{{ Request::is('pedidoMasterProdutoWebs*') ? 'active' : '' }}">
    <a href="{!! route('pedidoMasterProdutoWebs.index') !!}"><i class="fa fa-edit"></i><span>Pedido Master Produto Webs</span></a>
</li>

<li class="{{ Request::is('pedidoDetalheProdutoWebs*') ? 'active' : '' }}">
    <a href="{!! route('pedidoDetalheProdutoWebs.index') !!}"><i class="fa fa-edit"></i><span>Pedido Detalhe Produto Webs</span></a>
</li>

<li class="{{ Request::is('vendedorWebs*') ? 'active' : '' }}">
    <a href="{!! route('vendedorWebs.index') !!}"><i class="fa fa-edit"></i><span>Vendedor Webs</span></a>
</li>

<li class="{{ Request::is('descontoVendedorWebs*') ? 'active' : '' }}">
    <a href="{!! route('descontoVendedorWebs.index') !!}"><i class="fa fa-edit"></i><span>Desconto Vendedor Webs</span></a>
</li>

<li class="{{ Request::is('prazopagtoVendedorWebs*') ? 'active' : '' }}">
    <a href="{!! route('prazopagtoVendedorWebs.index') !!}"><i class="fa fa-edit"></i><span>Prazopagto Vendedor Webs</span></a>
</li>

<li class="{{ Request::is('produtoWebs*') ? 'active' : '' }}">
    <a href="{!! route('produtoWebs.index') !!}"><i class="fa fa-edit"></i><span>Produto Webs</span></a>
</li>

