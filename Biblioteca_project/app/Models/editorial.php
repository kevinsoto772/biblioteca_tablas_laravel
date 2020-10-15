<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class editorial
 * @package App\Models
 * @version October 15, 2020, 1:26 pm UTC
 *
 * @property string $nombre
 * @property string $pais
 * @property string $estado
 */
class editorial extends Model
{

    public $table = 'editorial';




    public $fillable = [
        'nombre',
        'pais',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'pais' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
