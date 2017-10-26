<?php

namespace App\Repositories;

use App\Models\prazopagtoVendedorWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class prazopagtoVendedorWebRepository
 * @package App\Repositories
 * @version October 4, 2017, 3:22 pm UTC
 *
 * @method prazopagtoVendedorWeb findWithoutFail($id, $columns = ['*'])
 * @method prazopagtoVendedorWeb find($id, $columns = ['*'])
 * @method prazopagtoVendedorWeb first($columns = ['*'])
*/
class prazopagtoVendedorWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_pagamento',
        'descricao_prazopgto',
        'codigo_vendedor',
        'log'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return prazopagtoVendedorWeb::class;
    }
}
