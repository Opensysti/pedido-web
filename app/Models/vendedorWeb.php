<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vendedorWeb
 * @package App\Models
 * @version October 4, 2017, 3:16 pm UTC
 *
 * @property integer codigo
 * @property string nome
 * @property string fantasia
 * @property string cnpj
 * @property string fone
 * @property string fone
 * @property string fone1
 * @property string celular
 * @property string email
 * @property intere regiao
 * @property float comissao
 * @property boolean comissao_flutuante
 * @property float meta
 * @property float deduz
 * @property floar permite_desconto_especial
 * @property floar permite_prazo_especial
 * @property boolean status
 * @property integer nivel
 * @property string log
 */
class vendedorWeb extends Model
{
    use SoftDeletes;

    public $table = 'vendedor_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'integer',
        'nome' => 'string',
        'fantasia' => 'string',
        'cnpj' => 'string',
        'fone' => 'string',
        'fone' => 'string',
        'fone1' => 'string',
        'celular' => 'string',
        'email' => 'string',
        'comissao' => 'float',
        'comissao_flutuante' => 'boolean',
        'meta' => 'float',
        'deduz' => 'float',
        'status' => 'boolean',
        'nivel' => 'integer',
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
