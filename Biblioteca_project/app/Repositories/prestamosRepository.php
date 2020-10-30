<?php

namespace App\Repositories;

use App\Models\prestamos;
use App\Repositories\BaseRepository;

/**
 * Class prestamosRepository
 * @package App\Repositories
 * @version October 30, 2020, 1:58 pm UTC
*/

class prestamosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_prestamo',
        'Hora_prestamo',
        'clientes_id',
        'tipo_prestamoid'
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
        return prestamos::class;
    }
}
