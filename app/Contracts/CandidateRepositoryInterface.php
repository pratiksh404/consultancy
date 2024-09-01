<?php

namespace App\Contracts;

use App\Models\Admin\Candidate;
use App\Http\Requests\CandidateRequest;

interface CandidateRepositoryInterface
{
    public function indexCandidate();

    public function createCandidate();

    public function storeCandidate(CandidateRequest $request);

    public function showCandidate(Candidate $Candidate);

    public function editCandidate(Candidate $Candidate);

    public function updateCandidate(CandidateRequest $request, Candidate $Candidate);

    public function destroyCandidate(Candidate $Candidate);
}
