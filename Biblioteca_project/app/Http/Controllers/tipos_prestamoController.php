<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipos_prestamoRequest;
use App\Http\Requests\Updatetipos_prestamoRequest;
use App\Repositories\tipos_prestamoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipos_prestamoController extends AppBaseController
{
    /** @var  tipos_prestamoRepository */
    private $tiposPrestamoRepository;

    public function __construct(tipos_prestamoRepository $tiposPrestamoRepo)
    {
        $this->tiposPrestamoRepository = $tiposPrestamoRepo;
    }

    /**
     * Display a listing of the tipos_prestamo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tiposPrestamos = $this->tiposPrestamoRepository->paginate(10);

        return view('tipos_prestamos.index')
            ->with('tiposPrestamos', $tiposPrestamos);
    }

    /**
     * Show the form for creating a new tipos_prestamo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipos_prestamos.create');
    }

    /**
     * Store a newly created tipos_prestamo in storage.
     *
     * @param Createtipos_prestamoRequest $request
     *
     * @return Response
     */
    public function store(Createtipos_prestamoRequest $request)
    {
        $input = $request->all();

        $tiposPrestamo = $this->tiposPrestamoRepository->create($input);

        Flash::success('Tipos Prestamo saved successfully.');

        return redirect(route('tiposPrestamos.index'));
    }

    /**
     * Display the specified tipos_prestamo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tiposPrestamo = $this->tiposPrestamoRepository->find($id);

        if (empty($tiposPrestamo)) {
            Flash::error('Tipos Prestamo not found');

            return redirect(route('tiposPrestamos.index'));
        }

        return view('tipos_prestamos.show')->with('tiposPrestamo', $tiposPrestamo);
    }

    /**
     * Show the form for editing the specified tipos_prestamo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tiposPrestamo = $this->tiposPrestamoRepository->find($id);

        if (empty($tiposPrestamo)) {
            Flash::error('Tipos Prestamo not found');

            return redirect(route('tiposPrestamos.index'));
        }

        return view('tipos_prestamos.edit')->with('tiposPrestamo', $tiposPrestamo);
    }

    /**
     * Update the specified tipos_prestamo in storage.
     *
     * @param int $id
     * @param Updatetipos_prestamoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipos_prestamoRequest $request)
    {
        $tiposPrestamo = $this->tiposPrestamoRepository->find($id);

        if (empty($tiposPrestamo)) {
            Flash::error('Tipos Prestamo not found');

            return redirect(route('tiposPrestamos.index'));
        }

        $tiposPrestamo = $this->tiposPrestamoRepository->update($request->all(), $id);

        Flash::success('Tipos Prestamo updated successfully.');

        return redirect(route('tiposPrestamos.index'));
    }

    /**
     * Remove the specified tipos_prestamo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tiposPrestamo = $this->tiposPrestamoRepository->find($id);

        if (empty($tiposPrestamo)) {
            Flash::error('Tipos Prestamo not found');

            return redirect(route('tiposPrestamos.index'));
        }

        $this->tiposPrestamoRepository->delete($id);

        Flash::success('Tipos Prestamo deleted successfully.');

        return redirect(route('tiposPrestamos.index'));
    }
}
