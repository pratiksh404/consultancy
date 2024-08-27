<?php

namespace App\Repositories;

use App\Contracts\PartnerRepositoryInterface;
use App\Http\Requests\PartnerRequest;
use App\Models\Admin\Partner;
use Illuminate\Support\Facades\Cache;

class PartnerRepository implements PartnerRepositoryInterface
{
    // Partner Index
    public function indexPartner()
    {
        $partners = config('adminetic.caching', true)
            ? (Cache::has('partners') ? Cache::get('partners') : Cache::rememberForever('partners', function () {
                return Partner::latest()->get();
            }))
            : Partner::latest()->get();

        return compact('partners');
    }

    // Partner Create
    public function createPartner()
    {
        //
    }

    // Partner Store
    public function storePartner(PartnerRequest $request)
    {
        $partner = Partner::create($request->validated());
        $this->uploadImage($partner);
    }

    // Partner Show
    public function showPartner(Partner $partner)
    {
        return compact('partner');
    }

    // Partner Edit
    public function editPartner(Partner $partner)
    {
        return compact('partner');
    }

    // Partner Update
    public function updatePartner(PartnerRequest $request, Partner $partner)
    {
        $partner->update($request->validated());
        $this->uploadImage($partner);
    }

    // Partner Destroy
    public function destroyPartner(Partner $partner)
    {
        $partner->delete();
    }

    private function uploadImage(Partner $partner)
    {
        if (request()->has('logo')) {
            $partner
                ->addFromMediaLibraryRequest(request()->logo)
                ->toMediaCollection('logo');
        }
    }
}
