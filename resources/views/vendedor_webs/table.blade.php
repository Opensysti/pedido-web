<table class="table table-responsive" id="vendedorWebs-table">
    <thead>
        <tr>
            <th>Codigo</th>
        <th>Nome</th>
        <th>Fantasia</th>
        <th>Fone</th>
        <th>Email</th>
        <th>Comissao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vendedorWebs as $vendedorWeb)
        <tr>
            <td>{!! $vendedorWeb->codigo !!}</td>
            <td>{!! $vendedorWeb->nome !!}</td>
            <td>{!! $vendedorWeb->fantasia !!}</td>
            <td>{!! $vendedorWeb->fone !!}</td>
            <td>{!! $vendedorWeb->email !!}</td>
            <td>{!! $vendedorWeb->comissao !!}</td>
            <td>
                {!! Form::open(['route' => ['vendedorWebs.destroy', $vendedorWeb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vendedorWebs.show', [$vendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vendedorWebs.edit', [$vendedorWeb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>