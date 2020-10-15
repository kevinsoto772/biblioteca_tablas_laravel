<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class autor
 * @package App\Models
 * @version October 15, 2020, 1:09 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $nacionalidad
 */
class autor extends Model
{

    public $table = 'autor';
    



    public $fillable = [
        'nombre',
        'apellido',
        'nacionalidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'nacionalidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
