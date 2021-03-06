<?php

namespace App\Repositories;

use App\Models\libros;
use App\Repositories\BaseRepository;

/**
 * Class librosRepository
 * @package App\Repositories
 * @version October 22, 2020, 1:28 pm UTC
*/

class librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ISBN',
        'Titulo',
        'fecha_lanzamiento',
        'Idioma',
        'Edicion',
        'autor_id',
        'editorial_id'
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
        return libros::class;
    }
}
