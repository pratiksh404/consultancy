<?php

namespace App\Repositories;

use App\Contracts\VisaRepositoryInterface;
use App\Http\Requests\VisaRequest;
use App\Models\Admin\Visa;
use Illuminate\Support\Facades\Cache;

class VisaRepository implements VisaRepositoryInterface
{
    // Visa Index
    public function indexVisa()
    {
        $visas = config('adminetic.caching', true)
            ? (Cache::has('visas') ? Cache::get('visas') : Cache::rememberForever('visas', function () {
                return Visa::latest()->get();
            }))
            : Visa::latest()->get();

        return compact('visas');
    }

    // Visa Create
    public function createVisa()
    {
        //
    }

    // Visa Store
    public function storeVisa(VisaRequest $request)
    {
        $visa = Visa::create($request->validated());
        $this->uploadImage($visa);
    }

    // Visa Show
    public function showVisa(Visa $visa)
    {
        return compact('visa');
    }

    // Visa Edit
    public function editVisa(Visa $visa)
    {
        return compact('visa');
    }

    // Visa Update
    public function updateVisa(VisaRequest $request, Visa $visa)
    {
        $visa->update($request->validated());
        $this->uploadImage($visa);
    }

    // Visa Destroy
    public function destroyVisa(Visa $visa)
    {
        $visa->delete();
    }

    // Upload Image
    private function uploadImage(Visa $visa)
    {
        if (request()->has('thumbnail')) {
            $visa
                ->addFromMediaLibraryRequest(request()->thumbnail)
                ->toMediaCollection('thumbnail');
        }
        if (request()->has('icon')) {
            $visa
                ->addFromMediaLibraryRequest(request()->icon)
                ->toMediaCollection('icon');
        }
    }
}
