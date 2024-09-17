<?php

namespace App\Contracts;

use App\Models\Admin\Step;
use App\Http\Requests\StepRequest;

interface StepRepositoryInterface
{
    public function indexStep();

    public function createStep();

    public function storeStep(StepRequest $request);

    public function showStep(Step $Step);

    public function editStep(Step $Step);

    public function updateStep(StepRequest $request, Step $Step);

    public function destroyStep(Step $Step);
}
