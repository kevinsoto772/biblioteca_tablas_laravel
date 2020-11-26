<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class prestamos
 * @package App\Models
 * @version October 30, 2020, 1:58 pm UTC
 *
 * @property \App\Models\clientes $clientes
 * @property \App\Models\tipos_prestamo $tiposPrestamo
 * @property string $fecha_prestamo
 * @property string $Hora_prestamo
 * @property integer $clientes_id
 * @property integer $tipo_prestamoid
 */
class prestamos extends Model
{

    public $table = 'prestamos';




    public $fillable = [
        'fecha_prestamo',
        'Hora_prestamo',
        'clientes_id',
        'tipo_prestamoid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_prestamo' => 'string',
        'Hora_prestamo' => 'string',
        'clientes_id' => 'integer',
        'tipo_prestamoid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function Clientes()
    {
        return $this->hasOne(\App\Models\clientes::class, 'id', 'clientes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function TiposPrestamo()
    {
        return $this->hasOne(\App\Models\tipos_prestamo::class, 'id', 'tipo_prestamoid');
    }
}
