<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;
use App\Http\Controllers\Controller;
use App\Contracts\BranchRepositoryInterface;

class BranchController extends Controller
{
    protected $branchRepositoryInterface;

    public function __construct(BranchRepositoryInterface $branchRepositoryInterface)
    {
        $this->branchRepositoryInterface = $branchRepositoryInterface;
        $this->authorizeResource(Branch::class, 'branch');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.branch.index', $this->branchRepositoryInterface->indexBranch());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchRequest $request)
    {
        $this->branchRepositoryInterface->storeBranch($request);
        return redirect(adminRedirectRoute('branch'))->withSuccess('Branch Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        return view('admin.branch.show', $this->branchRepositoryInterface->showBranch($branch));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('admin.branch.edit', $this->branchRepositoryInterface->editBranch($branch));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BranchRequest  $request
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(BranchRequest $request, Branch $branch)
    {
        $this->branchRepositoryInterface->updateBranch($request, $branch);
        return redirect(adminRedirectRoute('branch'))->withInfo('Branch Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $this->branchRepositoryInterface->destroyBranch($branch);
        return redirect(adminRedirectRoute('branch'))->withFail('Branch Deleted Successfully.');
    }
}
