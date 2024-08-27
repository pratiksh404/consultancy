<?php

namespace App\Repositories;

use App\Contracts\AssociationRepositoryInterface;
use App\Http\Requests\AssociationRequest;
use App\Models\Admin\Association;
use Illuminate\Support\Facades\Cache;

class AssociationRepository implements AssociationRepositoryInterface
{
    // Association Index
    public function indexAssociation()
    {
        $associations = config('adminetic.caching', true)
            ? (Cache::has('associations') ? Cache::get('associations') : Cache::rememberForever('associations', function () {
                return Association::latest()->get();
            }))
            : Association::latest()->get();

        return compact('associations');
    }

    // Association Create
    public function createAssociation()
    {
        //
    }

    // Association Store
    public function storeAssociation(AssociationRequest $request)
    {
        $association = Association::create($request->validated());
        $this->uploadImage($association);
    }

    // Association Show
    public function showAssociation(Association $association)
    {
        return compact('association');
    }

    // Association Edit
    public function editAssociation(Association $association)
    {
        return compact('association');
    }

    // Association Update
    public function updateAssociation(AssociationRequest $request, Association $association)
    {
        $association->update($request->validated());
        $this->uploadImage($association);
    }

    // Association Destroy
    public function destroyAssociation(Association $association)
    {
        $association->delete();
    }

    private function uploadImage(Association $association)
    {
        if (request()->has('logo')) {
            $association
                ->addFromMediaLibraryRequest(request()->logo)
                ->toMediaCollection('logo');
        }
    }
}
