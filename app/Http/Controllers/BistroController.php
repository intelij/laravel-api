<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateBistroRequest;
use App\Http\Requests\UpdateBistroRequest;
use App\Repositories\BistroRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BistroController extends AppBaseController
{
    /** @var  BistroRepository */
    private $bistroRepository;

    function __construct(BistroRepository $bistroRepo)
    {
        $this->bistroRepository = $bistroRepo;
    }

    /**
     * Display a listing of the Bistro.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bistroRepository->pushCriteria(new RequestCriteria($request));
        $bistros = $this->bistroRepository->all();

        return view('bistros.index')
            ->with('bistros', $bistros);
    }

    /**
     * Show the form for creating a new Bistro.
     *
     * @return Response
     */
    public function create()
    {
        return view('bistros.create');
    }

    /**
     * Store a newly created Bistro in storage.
     *
     * @param CreateBistroRequest $request
     *
     * @return Response
     */
    public function store(CreateBistroRequest $request)
    {
        $input = $request->all();

        $bistro = $this->bistroRepository->create($input);

        Flash::success('Bistro saved successfully.');

        return redirect(route('bistros.index'));
    }

    /**
     * Display the specified Bistro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bistro = $this->bistroRepository->findWithoutFail($id);

        if (empty($bistro)) {
            Flash::error('Bistro not found');

            return redirect(route('bistros.index'));
        }

        return view('bistros.show')->with('bistro', $bistro);
    }

    /**
     * Show the form for editing the specified Bistro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bistro = $this->bistroRepository->findWithoutFail($id);

        if (empty($bistro)) {
            Flash::error('Bistro not found');

            return redirect(route('bistros.index'));
        }

        return view('bistros.edit')->with('bistro', $bistro);
    }

    /**
     * Update the specified Bistro in storage.
     *
     * @param  int              $id
     * @param UpdateBistroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBistroRequest $request)
    {
        $bistro = $this->bistroRepository->findWithoutFail($id);

        if (empty($bistro)) {
            Flash::error('Bistro not found');

            return redirect(route('bistros.index'));
        }

        $this->bistroRepository->update($request->all(), $id);

        Flash::success('Bistro updated successfully.');

        return redirect(route('bistros.index'));
    }

    /**
     * Remove the specified Bistro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bistro = $this->bistroRepository->findWithoutFail($id);

        if (empty($bistro)) {
            Flash::error('Bistro not found');

            return redirect(route('bistros.index'));
        }

        $this->bistroRepository->delete($id);

        Flash::success('Bistro deleted successfully.');

        return redirect(route('bistros.index'));
    }
}
