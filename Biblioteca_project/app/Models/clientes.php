<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version October 15, 2020, 12:48 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property integer $cedula
 * @property string $telefono
 * @property string $correo
 * @property string $direccion
 * @property string $Fecha_Nacimineto
 */
class clientes extends Model
{

    public $table = 'clientes';




    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'correo',
        'direccion',
        'Fecha_Nacimineto'
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
        'cedula' => 'integer',
        'telefono' => 'string',
        'correo' => 'string',
        'direccion' => 'string',
        'Fecha_Nacimineto' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => '',
        'apellido' => '',
        'cedula' => '',
        'telefono' => '',
        'correo' => '',
        'direccion' => '',
        'Fecha_Nacimineto' => ''
    ];


}
