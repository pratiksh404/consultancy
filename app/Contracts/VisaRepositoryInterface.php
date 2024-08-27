<?php

namespace App\Contracts;

use App\Models\Admin\Visa;
use App\Http\Requests\VisaRequest;

interface VisaRepositoryInterface
{
    public function indexVisa();

    public function createVisa();

    public function storeVisa(VisaRequest $request);

    public function showVisa(Visa $Visa);

    public function editVisa(Visa $Visa);

    public function updateVisa(VisaRequest $request, Visa $Visa);

    public function destroyVisa(Visa $Visa);
}
