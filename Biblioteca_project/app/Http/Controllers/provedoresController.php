<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprovedoresRequest;
use App\Http\Requests\UpdateprovedoresRequest;
use App\Repositories\provedoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use \App\Models\libros;
class provedoresController extends AppBaseController
{
    /** @var  provedoresRepository */
    private $provedoresRepository;

    public function __construct(provedoresRepository $provedoresRepo)
    {
        $this->provedoresRepository = $provedoresRepo;
    }

    /**
     * Display a listing of the provedores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $provedores = $this->provedoresRepository->paginate(10);

        return view('provedores.index')
            ->with('provedores', $provedores);
    }

    /**
     * Show the form for creating a new provedores.
     *
     * @return Response
     */
    public function create()
    {
        $libro = libros::all()->pluck('Titulo', 'id');
        return view('provedores.create')->with('Libro', $libro);
    }

    /**
     * Store a newly created provedores in storage.
     *
     * @param CreateprovedoresRequest $request
     *
     * @return Response
     */
    public function store(CreateprovedoresRequest $request)
    {
        $input = $request->all();

        $provedores = $this->provedoresRepository->create($input);

        Flash::success('Provedores saved successfully.');

        return redirect(route('provedores.index'));
    }

    /**
     * Display the specified provedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $provedores = $this->provedoresRepository->find($id);

        if (empty($provedores)) {
            Flash::error('Provedores not found');

            return redirect(route('provedores.index'));
        }

        return view('provedores.show')->with('provedores', $provedores);
    }

    /**
     * Show the form for editing the specified provedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $libro = libros::all()->pluck('Titulo', 'id');
        $provedores = $this->provedoresRepository->find($id);

        if (empty($provedores)) {
            Flash::error('Provedores not found');

            return redirect(route('provedores.index'));
        }

        return view('provedores.edit')->with('provedores', $provedores)->with('Libro', $libro);
    }

    /**
     * Update the specified provedores in storage.
     *
     * @param int $id
     * @param UpdateprovedoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprovedoresRequest $request)
    {
        $provedores = $this->provedoresRepository->find($id);

        if (empty($provedores)) {
            Flash::error('Provedores not found');

            return redirect(route('provedores.index'));
        }

        $provedores = $this->provedoresRepository->update($request->all(), $id);

        Flash::success('Provedores updated successfully.');

        return redirect(route('provedores.index'));
    }

    /**
     * Remove the specified provedores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $provedores = $this->provedoresRepository->find($id);

        if (empty($provedores)) {
            Flash::error('Provedores not found');

            return redirect(route('provedores.index'));
        }

        $this->provedoresRepository->delete($id);

        Flash::success('Provedores deleted successfully.');

        return redirect(route('provedores.index'));
    }
}
