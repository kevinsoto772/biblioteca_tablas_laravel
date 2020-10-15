<?php

namespace App\Repositories;

use App\Models\clientes;
use App\Repositories\BaseRepository;

/**
 * Class clientesRepository
 * @package App\Repositories
 * @version October 15, 2020, 12:48 pm UTC
*/

class clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'correo',
        'direccion',
        'Fecha_Nacimineto'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clientes::class;
    }
}
