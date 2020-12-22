<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLanding_useRequest;
use App\Http\Requests\UpdateLanding_useRequest;
use App\Repositories\Landing_useRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Landing_useController extends AppBaseController
{
    /** @var  Landing_useRepository */
    private $landingUseRepository;

    public function __construct(Landing_useRepository $landingUseRepo)
    {
        $this->landingUseRepository = $landingUseRepo;
    }

    /**
     * Display a listing of the Landing_use.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->landingUseRepository->pushCriteria(new RequestCriteria($request));
        $landingUses = $this->landingUseRepository->all();

        return view('landing_uses.index')
            ->with('landingUses', $landingUses);
    }

    /**
     * Show the form for creating a new Landing_use.
     *
     * @return Response
     */
    public function create()
    {
        return view('landing_uses.create');
    }

    /**
     * Store a newly created Landing_use in storage.
     *
     * @param CreateLanding_useRequest $request
     *
     * @return Response
     */
    public function store(CreateLanding_useRequest $request)
    {
        $input = $request->all();

        $landingUse = $this->landingUseRepository->create($input);

        Flash::success('Landing Use saved successfully.');

        return redirect(route('landingUses.index'));
    }

    /**
     * Display the specified Landing_use.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $landingUse = $this->landingUseRepository->findWithoutFail($id);

        if (empty($landingUse)) {
            Flash::error('Landing Use not found');

            return redirect(route('landingUses.index'));
        }

        return view('landing_uses.show')->with('landingUse', $landingUse);
    }

    /**
     * Show the form for editing the specified Landing_use.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $landingUse = $this->landingUseRepository->findWithoutFail($id);

        if (empty($landingUse)) {
            Flash::error('Landing Use not found');

            return redirect(route('landingUses.index'));
        }

        return view('landing_uses.edit')->with('landingUse', $landingUse);
    }

    /**
     * Update the specified Landing_use in storage.
     *
     * @param  int              $id
     * @param UpdateLanding_useRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanding_useRequest $request)
    {
        $landingUse = $this->landingUseRepository->findWithoutFail($id);

        if (empty($landingUse)) {
            Flash::error('Landing Use not found');

            return redirect(route('landingUses.index'));
        }

        $landingUse = $this->landingUseRepository->update($request->all(), $id);

        Flash::success('Landing Use updated successfully.');

        return redirect(route('landingUses.index'));
    }

    /**
     * Remove the specified Landing_use from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $landingUse = $this->landingUseRepository->findWithoutFail($id);

        if (empty($landingUse)) {
            Flash::error('Landing Use not found');

            return redirect(route('landingUses.index'));
        }

        $this->landingUseRepository->delete($id);

        Flash::success('Landing Use deleted successfully.');

        return redirect(route('landingUses.index'));
    }
}
