<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ServiceRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Admin\Service;

class ServiceController extends Controller
{
    protected $serviceRepositoryInterface;

    public function __construct(ServiceRepositoryInterface $serviceRepositoryInterface)
    {
        $this->serviceRepositoryInterface = $serviceRepositoryInterface;
        $this->authorizeResource(Service::class, 'service');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index', $this->serviceRepositoryInterface->indexService());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $this->serviceRepositoryInterface->storeService($request);

        return redirect(adminRedirectRoute('service'))->withSuccess('Service Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.service.show', $this->serviceRepositoryInterface->showService($service));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', $this->serviceRepositoryInterface->editService($service));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $this->serviceRepositoryInterface->updateService($request, $service);

        return redirect(adminRedirectRoute('service'))->withInfo('Service Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->serviceRepositoryInterface->destroyService($service);

        return redirect(adminRedirectRoute('service'))->withFail('Service Deleted Successfully.');
    }
}
