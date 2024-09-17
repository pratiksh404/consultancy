<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Step;
use Illuminate\Http\Request;
use App\Http\Requests\StepRequest;
use App\Http\Controllers\Controller;
use App\Contracts\StepRepositoryInterface;

class StepController extends Controller
{
    protected $stepRepositoryInterface;

    public function __construct(StepRepositoryInterface $stepRepositoryInterface)
    {
        $this->stepRepositoryInterface = $stepRepositoryInterface;
        $this->authorizeResource(Step::class, 'step');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.step.index', $this->stepRepositoryInterface->indexStep());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.step.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StepRequest $request)
    {
        $this->stepRepositoryInterface->storeStep($request);
        return redirect(adminRedirectRoute('step'))->withSuccess('Step Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step)
    {
        return view('admin.step.show', $this->stepRepositoryInterface->showStep($step));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        return view('admin.step.edit', $this->stepRepositoryInterface->editStep($step));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StepRequest  $request
     * @param  \App\Models\Admin\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function update(StepRequest $request, Step $step)
    {
        $this->stepRepositoryInterface->updateStep($request, $step);
        return redirect(adminRedirectRoute('step'))->withInfo('Step Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function destroy(Step $step)
    {
        $this->stepRepositoryInterface->destroyStep($step);
        return redirect(adminRedirectRoute('step'))->withFail('Step Deleted Successfully.');
    }
}
