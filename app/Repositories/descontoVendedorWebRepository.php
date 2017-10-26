<?php

namespace App\Repositories;

use App\Models\descontoVendedorWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class descontoVendedorWebRepository
 * @package App\Repositories
 * @version October 4, 2017, 3:20 pm UTC
 *
 * @method descontoVendedorWeb findWithoutFail($id, $columns = ['*'])
 * @method descontoVendedorWeb find($id, $columns = ['*'])
 * @method descontoVendedorWeb first($columns = ['*'])
*/
class descontoVendedorWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_vendedor',
        'descricao_desconto',
        'descricao_vendedor',
        'percentual',
        'log'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return descontoVendedorWeb::class;
    }
}
