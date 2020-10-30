<?php

namespace App\Repositories;

use App\Models\estado;
use App\Repositories\BaseRepository;

/**
 * Class estadoRepository
 * @package App\Repositories
 * @version October 30, 2020, 1:46 pm UTC
*/

class estadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado_libro',
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
        return estado::class;
    }
}
