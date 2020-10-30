<?php

namespace App\Repositories;

use App\Models\pais;
use App\Repositories\BaseRepository;

/**
 * Class paisRepository
 * @package App\Repositories
 * @version October 30, 2020, 1:39 pm UTC
*/

class paisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pais'
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
        return pais::class;
    }
}
