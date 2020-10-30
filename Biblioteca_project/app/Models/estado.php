<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class estado
 * @package App\Models
 * @version October 30, 2020, 1:46 pm UTC
 *
 * @property \App\Models\libros $libros
 * @property string $estado_libro
 * @property integer $libros_id
 */
class estado extends Model
{

    public $table = 'estado';
    



    public $fillable = [
        'estado_libro',
        'libros_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estado_libro' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function libros()
    {
        return $this->hasOne(\App\Models\libros::class, 'id', 'libros_id');
    }
}
