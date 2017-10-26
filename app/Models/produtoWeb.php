<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class produtoWeb
 * @package App\Models
 * @version October 4, 2017, 7:32 pm UTC
 *
 */
class produtoWeb extends Model
{
    use SoftDeletes;

    public $table = 'produto_webs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
