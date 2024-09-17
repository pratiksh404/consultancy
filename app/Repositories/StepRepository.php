<?php

namespace App\Repositories;

use App\Contracts\StepRepositoryInterface;
use App\Http\Requests\StepRequest;
use App\Models\Admin\Step;
use Illuminate\Support\Facades\Cache;

class StepRepository implements StepRepositoryInterface
{
    // Step Index
    public function indexStep()
    {
        $steps = config('adminetic.caching', true)
            ? (Cache::has('steps') ? Cache::get('steps') : Cache::rememberForever('steps', function () {
                return Step::position()->get();
            }))
            : Step::position()->get();

        return compact('steps');
    }

    // Step Create
    public function createStep()
    {
        //
    }

    // Step Store
    public function storeStep(StepRequest $request)
    {
        Step::create($request->validated());
    }

    // Step Show
    public function showStep(Step $step)
    {
        return compact('step');
    }

    // Step Edit
    public function editStep(Step $step)
    {
        return compact('step');
    }

    // Step Update
    public function updateStep(StepRequest $request, Step $step)
    {
        $step->update($request->validated());
    }

    // Step Destroy
    public function destroyStep(Step $step)
    {
        $step->delete();
    }
}
