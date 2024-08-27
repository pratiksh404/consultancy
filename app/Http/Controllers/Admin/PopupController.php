<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\PopupRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\PopupRequest;
use App\Models\Admin\Popup;

class PopupController extends Controller
{
    protected $popupRepositoryInterface;

    public function __construct(PopupRepositoryInterface $popupRepositoryInterface)
    {
        $this->popupRepositoryInterface = $popupRepositoryInterface;
        $this->authorizeResource(Popup::class, 'popup');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.popup.index', $this->popupRepositoryInterface->indexPopup());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.popup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PopupRequest $request)
    {
        $this->popupRepositoryInterface->storePopup($request);

        return redirect(adminRedirectRoute('popup'))->withSuccess('Popup Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Popup $popup)
    {
        return view('admin.popup.show', $this->popupRepositoryInterface->showPopup($popup));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Popup $popup)
    {
        return view('admin.popup.edit', $this->popupRepositoryInterface->editPopup($popup));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PopupRequest $request, Popup $popup)
    {
        $this->popupRepositoryInterface->updatePopup($request, $popup);

        return redirect(adminRedirectRoute('popup'))->withInfo('Popup Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popup $popup)
    {
        $this->popupRepositoryInterface->destroyPopup($popup);

        return redirect(adminRedirectRoute('popup'))->withFail('Popup Deleted Successfully.');
    }
}
