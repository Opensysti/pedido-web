<?php

namespace App\Repositories;

use App\Models\pedidoMasterProdutoWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pedidoMasterProdutoWebRepository
 * @package App\Repositories
 * @version October 20, 2017, 2:21 pm UTC
 *
 * @method pedidoMasterProdutoWeb findWithoutFail($id, $columns = ['*'])
 * @method pedidoMasterProdutoWeb find($id, $columns = ['*'])
 * @method pedidoMasterProdutoWeb first($columns = ['*'])
*/
class pedidoMasterProdutoWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pedido'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pedidoMasterProdutoWeb::class;
    }
}
