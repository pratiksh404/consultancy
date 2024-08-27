<?php

namespace App\Repositories;

use App\Models\Admin\Country;
use Illuminate\Support\Facades\Cache;
use App\Contracts\CountryRepositoryInterface;
use App\Http\Requests\CountryRequest;

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
        Country::create($request->validated());
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
    }

    // Country Destroy
    public function destroyCountry(Country $country)
    {
        $country->delete();
    }
}
