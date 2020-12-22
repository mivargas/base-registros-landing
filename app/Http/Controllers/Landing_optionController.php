<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLanding_optionRequest;
use App\Http\Requests\UpdateLanding_optionRequest;
use App\Repositories\Landing_optionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Landing_optionController extends AppBaseController
{
    /** @var  Landing_optionRepository */
    private $landingOptionRepository;

    public function __construct(Landing_optionRepository $landingOptionRepo)
    {
        $this->landingOptionRepository = $landingOptionRepo;
    }

    /**
     * Display a listing of the Landing_option.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->landingOptionRepository->pushCriteria(new RequestCriteria($request));
        $landingOptions = $this->landingOptionRepository->paginate(15);

        return view('landing_options.index')
            ->with('landingOptions', $landingOptions);
    }

    /**
     * Show the form for creating a new Landing_option.
     *
     * @return Response
     */
    public function create()
    {
        return view('landing_options.create');
    }

    /**
     * Store a newly created Landing_option in storage.
     *
     * @param CreateLanding_optionRequest $request
     *
     * @return Response
     */
    public function store(CreateLanding_optionRequest $request)
    {
        $input = $request->all();

        $landingOption = $this->landingOptionRepository->create($input);

        Flash::success('Se ha creado una nueva opción para landing.');

        return redirect(route('landingOptions.index'));
    }

    /**
     * Display the specified Landing_option.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $landingOption = $this->landingOptionRepository->findWithoutFail($id);

        if (empty($landingOption)) {
            Flash::error('Landing Option not found');

            return redirect(route('landingOptions.index'));
        }

        return view('landing_options.show')->with('landingOption', $landingOption);
    }

    /**
     * Show the form for editing the specified Landing_option.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $landingOption = $this->landingOptionRepository->findWithoutFail($id);

        if (empty($landingOption)) {
            Flash::error('Landing Option not found');

            return redirect(route('landingOptions.index'));
        }

        return view('landing_options.edit')->with('landingOption', $landingOption);
    }

    /**
     * Update the specified Landing_option in storage.
     *
     * @param  int              $id
     * @param UpdateLanding_optionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanding_optionRequest $request)
    {
        $landingOption = $this->landingOptionRepository->findWithoutFail($id);

        if (empty($landingOption)) {
            Flash::error('Landing Option not found');

            return redirect(route('landingOptions.index'));
        }

        $landingOption = $this->landingOptionRepository->update($request->all(), $id);

        Flash::success('Landing Option updated successfully.');

        return redirect(route('landingOptions.index'));
    }

    /**
     * Remove the specified Landing_option from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $landingOption = $this->landingOptionRepository->findWithoutFail($id);

        if (empty($landingOption)) {
            Flash::error('Landing Option not found');

            return redirect(route('landingOptions.index'));
        }

        $this->landingOptionRepository->delete($id);

        Flash::success('Landing Option deleted successfully.');

        return redirect(route('landingOptions.index'));
    }
}
