<?php

namespace App\Contracts;

use App\Models\Admin\Country;
use App\Http\Requests\CountryRequest;

interface CountryRepositoryInterface
{
    public function indexCountry();

    public function createCountry();

    public function storeCountry(CountryRequest $request);

    public function showCountry(Country $Country);

    public function editCountry(Country $Country);

    public function updateCountry(CountryRequest $request, Country $Country);

    public function destroyCountry(Country $Country);
}
