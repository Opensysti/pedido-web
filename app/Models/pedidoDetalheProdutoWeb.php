<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pedidoDetalheProdutoWeb
 * @package App\Models
 * @version October 4, 2017, 3:06 pm UTC
 *
 * @property integer pedido
 * @property integer item
 * @property integer quant
 * @property string produto
 * @property float preco
 * @property float faturar
 * @property string inf_adicional
 */
class pedidoDetalheProdutoWeb extends Model
{
    use SoftDeletes;

    public $table = 'pedido_detalhe_produto_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pedido',
        'item',
        'quant',
        'produto',
        'preco',
        'faturar',
        'inf_adicional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pedido' => 'integer',
        'item' => 'integer',
        'quant' => 'integer',
        'produto' => 'string',
        'preco' => 'float',
        'faturar' => 'float',
        'inf_adicional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
