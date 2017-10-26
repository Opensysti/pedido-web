<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class prazopagtoVendedorWeb
 * @package App\Models
 * @version October 4, 2017, 3:22 pm UTC
 *
 * @property integer codigo_pagamento
 * @property string descricao_prazopgto
 * @property integer codigo_vendedor
 * @property string log
 */
class prazopagtoVendedorWeb extends Model
{
    use SoftDeletes;

    public $table = 'prazopagto_vendedor_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo_pagamento',
        'descricao_prazopgto',
        'codigo_vendedor',
        'log'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo_pagamento' => 'integer',
        'descricao_prazopgto' => 'string',
        'codigo_vendedor' => 'integer',
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
