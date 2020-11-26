<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class libros
 * @package App\Models
 * @version October 22, 2020, 1:28 pm UTC
 *
 * @property \App\Models\autor $autor
 * @property \App\Models\editorial $editorial
 * @property string $ISBN
 * @property string $Titulo
 * @property string $fecha_lanzamiento
 * @property string $Idioma
 * @property string $Edicion
 * @property integer $autor_id
 * @property integer $editorial_id
 */
class libros extends Model
{

    public $table = 'libros';




    public $fillable = [
        'ISBN',
        'Titulo',
        'fecha_lanzamiento',
        'Idioma',
        'Edicion',
        'autor_id',
        'editorial_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ISBN' => 'string',
        'Titulo' => 'string',
        'fecha_lanzamiento' => 'string',
        'Idioma' => 'string',
        'Edicion' => 'string',
        'autor_id' => 'integer',
        'editorial_id' => 'integer'
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
    public function Autor()
    {
        return $this->hasOne(\App\Models\autor::class, 'id', 'autor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function Editorial()
    {
        return $this->hasOne(\App\Models\editorial::class, 'id', 'editorial_id');
    }
}
