<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class pais
 * @package App\Models
 * @version October 30, 2020, 1:39 pm UTC
 *
 * @property string $pais
 */
class pais extends Model
{

    public $table = 'pais';
    



    public $fillable = [
        'pais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pais' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
