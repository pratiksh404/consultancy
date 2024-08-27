<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\FacilityRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityRequest;
use App\Models\Admin\Facility;

class FacilityController extends Controller
{
    protected $facilityRepositoryInterface;

    public function __construct(FacilityRepositoryInterface $facilityRepositoryInterface)
    {
        $this->facilityRepositoryInterface = $facilityRepositoryInterface;
        $this->authorizeResource(Facility::class, 'facility');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facility.index', $this->facilityRepositoryInterface->indexFacility());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FacilityRequest $request)
    {
        $this->facilityRepositoryInterface->storeFacility($request);

        return redirect(adminRedirectRoute('facility'))->withSuccess('Facility Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        return view('admin.facility.show', $this->facilityRepositoryInterface->showFacility($facility));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return view('admin.facility.edit', $this->facilityRepositoryInterface->editFacility($facility));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(FacilityRequest $request, Facility $facility)
    {
        $this->facilityRepositoryInterface->updateFacility($request, $facility);

        return redirect(adminRedirectRoute('facility'))->withInfo('Facility Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        $this->facilityRepositoryInterface->destroyFacility($facility);

        return redirect(adminRedirectRoute('facility'))->withFail('Facility Deleted Successfully.');
    }
}
