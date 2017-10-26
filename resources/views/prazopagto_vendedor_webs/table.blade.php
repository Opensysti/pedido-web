<table class="table table-responsive" id="prazopagtoVendedorWebs-table">
    <thead>
        <tr>
            <th>Codigo Pagamento</th>
        <th>Descricao Prazopgto</th>
        <th>Codigo Vendedor</th>
        <th>Log</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prazopagtoVendedorWebs as $prazopagtoVendedorWeb)
        <tr>
            <td>{!! $prazopagtoVendedorWeb->codigo_pagamento !!}</td>
            <td>{!! $prazopagtoVendedorWeb->descricao_prazopgto !!}</td>
            <td>{!! $prazopagtoVendedorWeb->codigo_vendedor !!}</td>
            <td>{!! $prazopagtoVendedorWeb->log !!}</td>
            <td>
                {!! Form::open(['route' => ['prazopagtoVendedorWebs.destroy', $prazopagtoVendedorWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prazopagtoVendedorWebs.show', [$prazopagtoVendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prazopagtoVendedorWebs.edit', [$prazopagtoVendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>