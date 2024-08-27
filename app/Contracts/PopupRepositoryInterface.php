<?php

namespace App\Contracts;

use App\Http\Requests\PopupRequest;
use App\Models\Admin\Popup;

interface PopupRepositoryInterface
{
    public function indexPopup();

    public function createPopup();

    public function storePopup(PopupRequest $request);

    public function showPopup(Popup $Popup);

    public function editPopup(Popup $Popup);

    public function updatePopup(PopupRequest $request, Popup $Popup);

    public function destroyPopup(Popup $Popup);
}
