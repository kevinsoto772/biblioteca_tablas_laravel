<?php

namespace App\Repositories;

use App\Models\autor;
use App\Repositories\BaseRepository;

/**
 * Class autorRepository
 * @package App\Repositories
 * @version October 15, 2020, 1:09 pm UTC
*/

class autorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'nacionalidad'
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
        return autor::class;
    }
}
