<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tipos_prestamo
 * @package App\Models
 * @version October 30, 2020, 1:52 pm UTC
 *
 * @property string $Tipo_prestamo
 */
class tipos_prestamo extends Model
{

    public $table = 'Tipos_prestamo';
    



    public $fillable = [
        'Tipo_prestamo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Tipo_prestamo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
