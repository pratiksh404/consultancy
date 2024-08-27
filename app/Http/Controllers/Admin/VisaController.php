<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Visa;
use Illuminate\Http\Request;
use App\Http\Requests\VisaRequest;
use App\Http\Controllers\Controller;
use App\Contracts\VisaRepositoryInterface;

class VisaController extends Controller
{
    protected $visaRepositoryInterface;

    public function __construct(VisaRepositoryInterface $visaRepositoryInterface)
    {
        $this->visaRepositoryInterface = $visaRepositoryInterface;
        $this->authorizeResource(Visa::class, 'visa');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.visa.index', $this->visaRepositoryInterface->indexVisa());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\VisaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisaRequest $request)
    {
        $this->visaRepositoryInterface->storeVisa($request);
        return redirect(adminRedirectRoute('visa'))->withSuccess('Visa Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function show(Visa $visa)
    {
        return view('admin.visa.show', $this->visaRepositoryInterface->showVisa($visa));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function edit(Visa $visa)
    {
        return view('admin.visa.edit', $this->visaRepositoryInterface->editVisa($visa));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\VisaRequest  $request
     * @param  \App\Models\Admin\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function update(VisaRequest $request, Visa $visa)
    {
        $this->visaRepositoryInterface->updateVisa($request, $visa);
        return redirect(adminRedirectRoute('visa'))->withInfo('Visa Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Visa  $visa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visa $visa)
    {
        $this->visaRepositoryInterface->destroyVisa($visa);
        return redirect(adminRedirectRoute('visa'))->withFail('Visa Deleted Successfully.');
    }
}
