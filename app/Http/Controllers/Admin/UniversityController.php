<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\University;
use Illuminate\Http\Request;
use App\Http\Requests\UniversityRequest;
use App\Http\Controllers\Controller;
use App\Contracts\UniversityRepositoryInterface;

class UniversityController extends Controller
{
    protected $universityRepositoryInterface;

    public function __construct(UniversityRepositoryInterface $universityRepositoryInterface)
    {
        $this->universityRepositoryInterface = $universityRepositoryInterface;
        $this->authorizeResource(University::class, 'university');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.university.index', $this->universityRepositoryInterface->indexUniversity());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UniversityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniversityRequest $request)
    {
        $this->universityRepositoryInterface->storeUniversity($request);
        return redirect(adminRedirectRoute('university'))->withSuccess('University Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        return view('admin.university.show', $this->universityRepositoryInterface->showUniversity($university));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        return view('admin.university.edit', $this->universityRepositoryInterface->editUniversity($university));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UniversityRequest  $request
     * @param  \App\Models\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(UniversityRequest $request, University $university)
    {
        $this->universityRepositoryInterface->updateUniversity($request, $university);
        return redirect(adminRedirectRoute('university'))->withInfo('University Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $this->universityRepositoryInterface->destroyUniversity($university);
        return redirect(adminRedirectRoute('university'))->withFail('University Deleted Successfully.');
    }
}
