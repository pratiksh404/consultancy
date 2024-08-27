<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Association;
use Illuminate\Http\Request;
use App\Http\Requests\AssociationRequest;
use App\Http\Controllers\Controller;
use App\Contracts\AssociationRepositoryInterface;

class AssociationController extends Controller
{
    protected $associationRepositoryInterface;

    public function __construct(AssociationRepositoryInterface $associationRepositoryInterface)
    {
        $this->associationRepositoryInterface = $associationRepositoryInterface;
        $this->authorizeResource(Association::class, 'association');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.association.index', $this->associationRepositoryInterface->indexAssociation());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.association.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AssociationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociationRequest $request)
    {
        $this->associationRepositoryInterface->storeAssociation($request);
        return redirect(adminRedirectRoute('association'))->withSuccess('Association Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        return view('admin.association.show', $this->associationRepositoryInterface->showAssociation($association));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('admin.association.edit', $this->associationRepositoryInterface->editAssociation($association));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AssociationRequest  $request
     * @param  \App\Models\Admin\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(AssociationRequest $request, Association $association)
    {
        $this->associationRepositoryInterface->updateAssociation($request, $association);
        return redirect(adminRedirectRoute('association'))->withInfo('Association Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        $this->associationRepositoryInterface->destroyAssociation($association);
        return redirect(adminRedirectRoute('association'))->withFail('Association Deleted Successfully.');
    }
}
