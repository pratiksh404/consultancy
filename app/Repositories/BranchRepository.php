<?php

namespace App\Repositories;

use App\Models\Admin\Branch;
use Illuminate\Support\Facades\Cache;
use App\Contracts\BranchRepositoryInterface;
use App\Http\Requests\BranchRequest;

class BranchRepository implements BranchRepositoryInterface
{
    // Branch Index
    public function indexBranch()
    {
        $branches = config('adminetic.caching', true)
            ? (Cache::has('branches') ? Cache::get('branches') : Cache::rememberForever('branches', function () {
                return Branch::latest()->get();
            }))
            : Branch::latest()->get();
        return compact('branches');
    }

    // Branch Create
    public function createBranch()
    {
        //
    }

    // Branch Store
    public function storeBranch(BranchRequest $request)
    {
        Branch::create($request->validated());
    }

    // Branch Show
    public function showBranch(Branch $branch)
    {
        return compact('branch');
    }

    // Branch Edit
    public function editBranch(Branch $branch)
    {
        return compact('branch');
    }

    // Branch Update
    public function updateBranch(BranchRequest $request, Branch $branch)
    {
        $branch->update($request->validated());
    }

    // Branch Destroy
    public function destroyBranch(Branch $branch)
    {
        $branch->delete();
    }
}
