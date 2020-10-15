<?php

namespace App\Repositories;

use App\Models\editorial;
use App\Repositories\BaseRepository;

/**
 * Class editorialRepository
 * @package App\Repositories
 * @version October 15, 2020, 1:26 pm UTC
*/

class editorialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'pais',
        'estado'
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
        return editorial::class;
    }
}
