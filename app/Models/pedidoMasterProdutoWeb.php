<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pedidoMasterProdutoWeb
 * @package App\Models
 * @version October 20, 2017, 2:21 pm UTC
 *
 * @property string pedido
 */
class pedidoMasterProdutoWeb extends Model
{
    use SoftDeletes;

    public $table = 'pedido_master_produto_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pedido'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pedido' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
