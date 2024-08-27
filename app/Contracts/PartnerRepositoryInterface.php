<?php

namespace App\Contracts;

use App\Models\Admin\Partner;
use App\Http\Requests\PartnerRequest;

interface PartnerRepositoryInterface
{
    public function indexPartner();

    public function createPartner();

    public function storePartner(PartnerRequest $request);

    public function showPartner(Partner $Partner);

    public function editPartner(Partner $Partner);

    public function updatePartner(PartnerRequest $request, Partner $Partner);

    public function destroyPartner(Partner $Partner);
}
