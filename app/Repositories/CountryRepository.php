<?php

namespace App\Repositories;

use App\Contracts\CountryRepositoryInterface;
use App\Http\Requests\CountryRequest;
use App\Models\Admin\Country;
use Illuminate\Support\Facades\Cache;

class CountryRepository implements CountryRepositoryInterface
{
    // Country Index
    public function indexCountry()
    {
        $countries = config('adminetic.caching', true)
            ? (Cache::has('countries') ? Cache::get('countries') : Cache::rememberForever('countries', function () {
                return Country::latest()->get();
            }))
            : Country::latest()->get();

        return compact('countries');
    }

    // Country Create
    public function createCountry()
    {
        //
    }

    // Country Store
    public function storeCountry(CountryRequest $request)
    {
        $country = Country::create($request->validated());
        $this->uploadImage($country);
    }

    // Country Show
    public function showCountry(Country $country)
    {
        return compact('country');
    }

    // Country Edit
    public function editCountry(Country $country)
    {
        return compact('country');
    }

    // Country Update
    public function updateCountry(CountryRequest $request, Country $country)
    {
        $country->update($request->validated());
        $this->uploadImage($country);
    }

    // Country Destroy
    public function destroyCountry(Country $country)
    {
        $country->delete();
    }

    // Upload Image
    private function uploadImage(Country $country)
    {
        if (request()->has('image')) {
            $country
                ->addFromMediaLibraryRequest(request()->image)
                ->toMediaCollection('image');
        }
        if (request()->has('images')) {
            $country
                ->addFromMediaLibraryRequest(request()->images)
                ->toMediaCollection('images');
        }
        if (request()->has('downloads')) {
            $country
                ->addFromMediaLibraryRequest(request()->downloads)
                ->toMediaCollection('downloads');
        }
    }
}
