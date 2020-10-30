<?php

namespace App\Repositories;

use App\Models\tipos_prestamo;
use App\Repositories\BaseRepository;

/**
 * Class tipos_prestamoRepository
 * @package App\Repositories
 * @version October 30, 2020, 1:52 pm UTC
*/

class tipos_prestamoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tipo_prestamo'
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
        return tipos_prestamo::class;
    }
}
