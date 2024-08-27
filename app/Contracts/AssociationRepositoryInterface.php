<?php

namespace App\Contracts;

use App\Models\Admin\Association;
use App\Http\Requests\AssociationRequest;

interface AssociationRepositoryInterface
{
    public function indexAssociation();

    public function createAssociation();

    public function storeAssociation(AssociationRequest $request);

    public function showAssociation(Association $Association);

    public function editAssociation(Association $Association);

    public function updateAssociation(AssociationRequest $request, Association $Association);

    public function destroyAssociation(Association $Association);
}
