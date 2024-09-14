<?php

namespace App\Repositories;

use App\Contracts\UniversityRepositoryInterface;
use App\Http\Requests\UniversityRequest;
use App\Models\Admin\University;
use Illuminate\Support\Facades\Cache;

class UniversityRepository implements UniversityRepositoryInterface
{
    // University Index
    public function indexUniversity()
    {
        $universities = config('adminetic.caching', true)
            ? (Cache::has('universities') ? Cache::get('universities') : Cache::rememberForever('universities', function () {
                return University::latest()->get();
            }))
            : University::latest()->get();

        return compact('universities');
    }

    // University Create
    public function createUniversity()
    {
        //
    }

    // University Store
    public function storeUniversity(UniversityRequest $request)
    {
        $university = University::create($request->validated());
        $this->uploadImage($university);
    }

    // University Show
    public function showUniversity(University $university)
    {
        return compact('university');
    }

    // University Edit
    public function editUniversity(University $university)
    {
        return compact('university');
    }

    // University Update
    public function updateUniversity(UniversityRequest $request, University $university)
    {
        $university->update($request->validated());
        $this->uploadImage($university);
    }

    // University Destroy
    public function destroyUniversity(University $university)
    {
        $university->delete();
    }

    private function uploadImage(University $university)
    {
        if (request()->has('logo')) {
            $university
                ->addFromMediaLibraryRequest(request()->logo)
                ->toMediaCollection('logo');
        }
    }
}
