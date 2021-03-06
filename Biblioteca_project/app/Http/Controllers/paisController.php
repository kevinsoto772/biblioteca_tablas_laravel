<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepaisRequest;
use App\Http\Requests\UpdatepaisRequest;
use App\Repositories\paisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class paisController extends AppBaseController
{
    /** @var  paisRepository */
    private $paisRepository;

    public function __construct(paisRepository $paisRepo)
    {
        $this->paisRepository = $paisRepo;
    }

    /**
     * Display a listing of the pais.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pais = $this->paisRepository->paginate(10);

        return view('pais.index')
            ->with('pais', $pais);
    }

    /**
     * Show the form for creating a new pais.
     *
     * @return Response
     */
    public function create()
    {
        return view('pais.create');
    }

    /**
     * Store a newly created pais in storage.
     *
     * @param CreatepaisRequest $request
     *
     * @return Response
     */
    public function store(CreatepaisRequest $request)
    {
        $input = $request->all();

        $pais = $this->paisRepository->create($input);

        Flash::success('Pais saved successfully.');

        return redirect(route('pais.index'));
    }

    /**
     * Display the specified pais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            Flash::error('Pais not found');

            return redirect(route('pais.index'));
        }

        return view('pais.show')->with('pais', $pais);
    }

    /**
     * Show the form for editing the specified pais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            Flash::error('Pais not found');

            return redirect(route('pais.index'));
        }

        return view('pais.edit')->with('pais', $pais);
    }

    /**
     * Update the specified pais in storage.
     *
     * @param int $id
     * @param UpdatepaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepaisRequest $request)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            Flash::error('Pais not found');

            return redirect(route('pais.index'));
        }

        $pais = $this->paisRepository->update($request->all(), $id);

        Flash::success('Pais updated successfully.');

        return redirect(route('pais.index'));
    }

    /**
     * Remove the specified pais from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pais = $this->paisRepository->find($id);

        if (empty($pais)) {
            Flash::error('Pais not found');

            return redirect(route('pais.index'));
        }

        $this->paisRepository->delete($id);

        Flash::success('Pais deleted successfully.');

        return redirect(route('pais.index'));
    }
}
