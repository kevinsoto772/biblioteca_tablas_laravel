<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateeditorialRequest;
use App\Http\Requests\UpdateeditorialRequest;
use App\Repositories\editorialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class editorialController extends AppBaseController
{
    /** @var  editorialRepository */
    private $editorialRepository;

    public function __construct(editorialRepository $editorialRepo)
    {
        $this->editorialRepository = $editorialRepo;
    }

    /**
     * Display a listing of the editorial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $editorials = $this->editorialRepository->paginate(10);

        return view('editorials.index')
            ->with('editorials', $editorials);
    }

    /**
     * Show the form for creating a new editorial.
     *
     * @return Response
     */
    public function create()
    {
        return view('editorials.create');
    }

    /**
     * Store a newly created editorial in storage.
     *
     * @param CreateeditorialRequest $request
     *
     * @return Response
     */
    public function store(CreateeditorialRequest $request)
    {
        $input = $request->all();

        $editorial = $this->editorialRepository->create($input);

        Flash::success('Editorial saved successfully.');

        return redirect(route('editorials.index'));
    }

    /**
     * Display the specified editorial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        return view('editorials.show')->with('editorial', $editorial);
    }

    /**
     * Show the form for editing the specified editorial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        return view('editorials.edit')->with('editorial', $editorial);
    }

    /**
     * Update the specified editorial in storage.
     *
     * @param int $id
     * @param UpdateeditorialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateeditorialRequest $request)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        $editorial = $this->editorialRepository->update($request->all(), $id);

        Flash::success('Editorial updated successfully.');

        return redirect(route('editorials.index'));
    }

    /**
     * Remove the specified editorial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $editorial = $this->editorialRepository->find($id);

        if (empty($editorial)) {
            Flash::error('Editorial not found');

            return redirect(route('editorials.index'));
        }

        $this->editorialRepository->delete($id);

        Flash::success('Editorial deleted successfully.');

        return redirect(route('editorials.index'));
    }
}
