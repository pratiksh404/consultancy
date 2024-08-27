<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use App\Http\Controllers\Controller;
use App\Contracts\CountryRepositoryInterface;

class CountryController extends Controller
{
    protected $countryRepositoryInterface;

    public function __construct(CountryRepositoryInterface $countryRepositoryInterface)
    {
        $this->countryRepositoryInterface = $countryRepositoryInterface;
        $this->authorizeResource(Country::class, 'country');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.country.index', $this->countryRepositoryInterface->indexCountry());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $this->countryRepositoryInterface->storeCountry($request);
        return redirect(adminRedirectRoute('country'))->withSuccess('Country Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('admin.country.show', $this->countryRepositoryInterface->showCountry($country));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.country.edit', $this->countryRepositoryInterface->editCountry($country));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @param  \App\Models\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, Country $country)
    {
        $this->countryRepositoryInterface->updateCountry($request, $country);
        return redirect(adminRedirectRoute('country'))->withInfo('Country Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $this->countryRepositoryInterface->destroyCountry($country);
        return redirect(adminRedirectRoute('country'))->withFail('Country Deleted Successfully.');
    }
}
