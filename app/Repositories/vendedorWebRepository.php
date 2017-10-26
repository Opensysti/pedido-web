<?php

namespace App\Repositories;

use App\Models\vendedorWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vendedorWebRepository
 * @package App\Repositories
 * @version October 4, 2017, 3:16 pm UTC
 *
 * @method vendedorWeb findWithoutFail($id, $columns = ['*'])
 * @method vendedorWeb find($id, $columns = ['*'])
 * @method vendedorWeb first($columns = ['*'])
*/
class vendedorWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nome',
        'fantasia',
        'cnpj',
        'fone',
        'fone',
        'fone1',
        'celular',
        'email',
        'regiao',
        'comissao',
        'comissao_flutuante',
        'meta',
        'deduz',
        'permite_desconto_especial',
        'permite_prazo_especial',
        'status',
        'nivel',
        'log'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vendedorWeb::class;
    }
}
