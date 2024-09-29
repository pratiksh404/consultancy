<?php

namespace App\Contracts;

use App\Models\Admin\Branch;
use App\Http\Requests\BranchRequest;

interface BranchRepositoryInterface
{
    public function indexBranch();

    public function createBranch();

    public function storeBranch(BranchRequest $request);

    public function showBranch(Branch $Branch);

    public function editBranch(Branch $Branch);

    public function updateBranch(BranchRequest $request, Branch $Branch);

    public function destroyBranch(Branch $Branch);
}
