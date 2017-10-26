<?php

namespace App\Repositories;

use App\Models\pedidoDetalheProdutoWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pedidoDetalheProdutoWebRepository
 * @package App\Repositories
 * @version October 4, 2017, 3:06 pm UTC
 *
 * @method pedidoDetalheProdutoWeb findWithoutFail($id, $columns = ['*'])
 * @method pedidoDetalheProdutoWeb find($id, $columns = ['*'])
 * @method pedidoDetalheProdutoWeb first($columns = ['*'])
*/
class pedidoDetalheProdutoWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pedido',
        'item',
        'quant',
        'produto',
        'preco',
        'faturar',
        'inf_adicional'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pedidoDetalheProdutoWeb::class;
    }
}
