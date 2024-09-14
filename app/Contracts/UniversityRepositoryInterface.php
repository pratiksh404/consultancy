<?php

namespace App\Contracts;

use App\Models\Admin\University;
use App\Http\Requests\UniversityRequest;

interface UniversityRepositoryInterface
{
    public function indexUniversity();

    public function createUniversity();

    public function storeUniversity(UniversityRequest $request);

    public function showUniversity(University $University);

    public function editUniversity(University $University);

    public function updateUniversity(UniversityRequest $request, University $University);

    public function destroyUniversity(University $University);
}
