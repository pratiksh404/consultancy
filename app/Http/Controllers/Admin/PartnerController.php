<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;
use App\Http\Controllers\Controller;
use App\Contracts\PartnerRepositoryInterface;

class PartnerController extends Controller
{
    protected $partnerRepositoryInterface;

    public function __construct(PartnerRepositoryInterface $partnerRepositoryInterface)
    {
        $this->partnerRepositoryInterface = $partnerRepositoryInterface;
        $this->authorizeResource(Partner::class, 'partner');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partner.index', $this->partnerRepositoryInterface->indexPartner());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        $this->partnerRepositoryInterface->storePartner($request);
        return redirect(adminRedirectRoute('partner'))->withSuccess('Partner Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.partner.show', $this->partnerRepositoryInterface->showPartner($partner));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', $this->partnerRepositoryInterface->editPartner($partner));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PartnerRequest  $request
     * @param  \App\Models\Admin\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, Partner $partner)
    {
        $this->partnerRepositoryInterface->updatePartner($request, $partner);
        return redirect(adminRedirectRoute('partner'))->withInfo('Partner Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $this->partnerRepositoryInterface->destroyPartner($partner);
        return redirect(adminRedirectRoute('partner'))->withFail('Partner Deleted Successfully.');
    }
}
