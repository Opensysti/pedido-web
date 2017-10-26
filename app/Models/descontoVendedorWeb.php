<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class descontoVendedorWeb
 * @package App\Models
 * @version October 4, 2017, 3:20 pm UTC
 *
 * @property integer codigo_vendedor
 * @property string descricao_desconto
 * @property string descricao_vendedor
 * @property float percentual
 * @property string log
 */
class descontoVendedorWeb extends Model
{
    use SoftDeletes;

    public $table = 'desconto_vendedor_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo_vendedor',
        'descricao_desconto',
        'descricao_vendedor',
        'percentual',
        'log'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo_vendedor' => 'integer',
        'descricao_desconto' => 'string',
        'descricao_vendedor' => 'string',
        'percentual' => 'float',
        'log' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
