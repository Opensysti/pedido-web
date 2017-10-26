<?php

namespace App\Repositories;

use App\Models\produtoWeb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class produtoWebRepository
 * @package App\Repositories
 * @version October 4, 2017, 7:32 pm UTC
 *
 * @method produtoWeb findWithoutFail($id, $columns = ['*'])
 * @method produtoWeb find($id, $columns = ['*'])
 * @method produtoWeb first($columns = ['*'])
*/
class produtoWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return produtoWeb::class;
    }
}
