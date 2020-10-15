<?php

namespace App\Repositories;

use App\Models\libros;
use App\Repositories\BaseRepository;

/**
 * Class librosRepository
 * @package App\Repositories
 * @version October 15, 2020, 2:01 pm UTC
*/

class librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_ISBN',
        'Titulo',
        'Autor_id',
        'Categoria',
        'Editorial.id',
        'idioma',
        'edicion',
        'fecha_lanzamiento',
        'descripcion'
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
