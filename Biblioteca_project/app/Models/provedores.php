<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class provedores
 * @package App\Models
 * @version October 30, 2020, 1:35 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property integer $libros_id
 */
class provedores extends Model
{

    public $table = 'provedores';
    



    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'libros_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'libros_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function libros()
    {
        return $this->hasMany(\App\Models\libros::class, 'id', 'libros_id');
    }
}
