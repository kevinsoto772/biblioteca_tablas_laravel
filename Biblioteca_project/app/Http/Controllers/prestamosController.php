<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprestamosRequest;
use App\Http\Requests\UpdateprestamosRequest;
use App\Repositories\prestamosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use \App\Models\clientes;
use \App\Models\tipos_prestamo;

class prestamosController extends AppBaseController
{
    /** @var  prestamosRepository */
    private $prestamosRepository;

    public function __construct(prestamosRepository $prestamosRepo)
    {
        $this->prestamosRepository = $prestamosRepo;
    }

    /**
     * Display a listing of the prestamos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prestamos = $this->prestamosRepository->paginate(10);

        return view('prestamos.index')
            ->with('prestamos', $prestamos);
    }

    /**
     * Show the form for creating a new prestamos.
     *
     * @return Response
     */
    public function create()
    {
        $cliente = clientes::all()->pluck('nombre', 'id');
        $TipoPrestamo = tipos_prestamo::all()->pluck('Tipo_prestamo', 'id');
        return view('prestamos.create')->with('Cliente', $cliente)->with('TipoPrestamo', $TipoPrestamo);
    }

    /**
     * Store a newly created prestamos in storage.
     *
     * @param CreateprestamosRequest $request
     *
     * @return Response
     */
    public function store(CreateprestamosRequest $request)
    {
        $input = $request->all();

        $prestamos = $this->prestamosRepository->create($input);

        Flash::success('Prestamos saved successfully.');

        return redirect(route('prestamos.index'));
    }

    /**
     * Display the specified prestamos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prestamos = $this->prestamosRepository->find($id);

        if (empty($prestamos)) {
            Flash::error('Prestamos not found');

            return redirect(route('prestamos.index'));
        }

        return view('prestamos.show')->with('prestamos', $prestamos);
    }

    /**
     * Show the form for editing the specified prestamos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cliente = clientes::all()->pluck('nombre', 'id');
        $TipoPrestamo = tipos_prestamo::all()->pluck('Tipo_prestamo', 'id');
        $prestamos = $this->prestamosRepository->find($id);

        if (empty($prestamos)) {
            Flash::error('Prestamos not found');

            return redirect(route('prestamos.index'));
        }

        return view('prestamos.edit')->with('prestamos', $prestamos)->with('Cliente', $cliente)->with('TipoPrestamo', $TipoPrestamo);
    }

    /**
     * Update the specified prestamos in storage.
     *
     * @param int $id
     * @param UpdateprestamosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprestamosRequest $request)
    {
        $prestamos = $this->prestamosRepository->find($id);

        if (empty($prestamos)) {
            Flash::error('Prestamos not found');

            return redirect(route('prestamos.index'));
        }

        $prestamos = $this->prestamosRepository->update($request->all(), $id);

        Flash::success('Prestamos updated successfully.');

        return redirect(route('prestamos.index'));
    }

    /**
     * Remove the specified prestamos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prestamos = $this->prestamosRepository->find($id);

        if (empty($prestamos)) {
            Flash::error('Prestamos not found');

            return redirect(route('prestamos.index'));
        }

        $this->prestamosRepository->delete($id);

        Flash::success('Prestamos deleted successfully.');

        return redirect(route('prestamos.index'));
    }
}
