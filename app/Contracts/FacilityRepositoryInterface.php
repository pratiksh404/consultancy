<?php

namespace App\Contracts;

use App\Http\Requests\FacilityRequest;
use App\Models\Admin\Facility;

interface FacilityRepositoryInterface
{
    public function indexFacility();

    public function createFacility();

    public function storeFacility(FacilityRequest $request);

    public function showFacility(Facility $Facility);

    public function editFacility(Facility $Facility);

    public function updateFacility(FacilityRequest $request, Facility $Facility);

    public function destroyFacility(Facility $Facility);
}
