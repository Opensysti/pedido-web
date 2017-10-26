<table class="table table-responsive" id="descontoVendedorWebs-table">
    <thead>
        <tr>
            <th>Codigo Vendedor</th>
        <th>Descricao Desconto</th>
        <th>Descricao Vendedor</th>
        <th>Percentual</th>
        <th>Log</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($descontoVendedorWebs as $descontoVendedorWeb)
        <tr>
            <td>{!! $descontoVendedorWeb->codigo_vendedor !!}</td>
            <td>{!! $descontoVendedorWeb->descricao_desconto !!}</td>
            <td>{!! $descontoVendedorWeb->descricao_vendedor !!}</td>
            <td>{!! $descontoVendedorWeb->percentual !!}</td>
            <td>{!! $descontoVendedorWeb->log !!}</td>
            <td>
                {!! Form::open(['route' => ['descontoVendedorWebs.destroy', $descontoVendedorWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('descontoVendedorWebs.show', [$descontoVendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('descontoVendedorWebs.edit', [$descontoVendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>