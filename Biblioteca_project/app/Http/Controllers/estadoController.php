<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateestadoRequest;
use App\Http\Requests\UpdateestadoRequest;
use App\Repositories\estadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use \App\Models\libros;
class estadoController extends AppBaseController
{
    /** @var  estadoRepository */
    private $estadoRepository;

    public function __construct(estadoRepository $estadoRepo)
    {
        $this->estadoRepository = $estadoRepo;
    }

    /**
     * Display a listing of the estado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $estados = $this->estadoRepository->paginate(10);

        return view('estados.index')
            ->with('estados', $estados);
    }

    /**
     * Show the form for creating a new estado.
     *
     * @return Response
     */
    public function create()
    {
        $libro = libros::all()->pluck('Titulo', 'id');
        return view('estados.create')->with('Libro', $libro);
    }

    /**
     * Store a newly created estado in storage.
     *
     * @param CreateestadoRequest $request
     *
     * @return Response
     */
    public function store(CreateestadoRequest $request)
    {
        $input = $request->all();

        $estado = $this->estadoRepository->create($input);

        Flash::success('Estado saved successfully.');

        return redirect(route('estados.index'));
    }

    /**
     * Display the specified estado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estado = $this->estadoRepository->find($id);

        if (empty($estado)) {
            Flash::error('Estado not found');

            return redirect(route('estados.index'));
        }

        return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified estado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {    $libro = libros::all()->pluck('Titulo', 'id');
        $estado = $this->estadoRepository->find($id);

        if (empty($estado)) {
            Flash::error('Estado not found');

            return redirect(route('estados.index'));
        }

        return view('estados.edit')->with('estado', $estado)->with('Libro', $libro);
    }

    /**
     * Update the specified estado in storage.
     *
     * @param int $id
     * @param UpdateestadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateestadoRequest $request)
    {
        $estado = $this->estadoRepository->find($id);

        if (empty($estado)) {
            Flash::error('Estado not found');

            return redirect(route('estados.index'));
        }

        $estado = $this->estadoRepository->update($request->all(), $id);

        Flash::success('Estado updated successfully.');

        return redirect(route('estados.index'));
    }

    /**
     * Remove the specified estado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estado = $this->estadoRepository->find($id);

        if (empty($estado)) {
            Flash::error('Estado not found');

            return redirect(route('estados.index'));
        }

        $this->estadoRepository->delete($id);

        Flash::success('Estado deleted successfully.');

        return redirect(route('estados.index'));
    }
}
