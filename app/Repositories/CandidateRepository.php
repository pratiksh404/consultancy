<?php

namespace App\Repositories;

use App\Models\Admin\Candidate;
use Illuminate\Support\Facades\Cache;
use App\Contracts\CandidateRepositoryInterface;
use App\Http\Requests\CandidateRequest;

class CandidateRepository implements CandidateRepositoryInterface
{
    // Candidate Index
    public function indexCandidate()
    {
        $candidates = config('adminetic.caching', true)
            ? (Cache::has('candidates') ? Cache::get('candidates') : Cache::rememberForever('candidates', function () {
                return Candidate::latest()->get();
            }))
            : Candidate::latest()->get();
        return compact('candidates');
    }

    // Candidate Create
    public function createCandidate()
    {
        //
    }

    // Candidate Store
    public function storeCandidate(CandidateRequest $request)
    {
        Candidate::create($request->validated());
    }

    // Candidate Show
    public function showCandidate(Candidate $candidate)
    {
        return compact('candidate');
    }

    // Candidate Edit
    public function editCandidate(Candidate $candidate)
    {
        return compact('candidate');
    }

    // Candidate Update
    public function updateCandidate(CandidateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->validated());
    }

    // Candidate Destroy
    public function destroyCandidate(Candidate $candidate)
    {
        $candidate->delete();
    }
}
