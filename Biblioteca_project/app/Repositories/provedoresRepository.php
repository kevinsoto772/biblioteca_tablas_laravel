<?php

namespace App\Repositories;

use App\Models\provedores;
use App\Repositories\BaseRepository;

/**
 * Class provedoresRepository
 * @package App\Repositories
 * @version October 30, 2020, 1:35 pm UTC
*/

class provedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'libros_id'
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
        return provedores::class;
    }
}
