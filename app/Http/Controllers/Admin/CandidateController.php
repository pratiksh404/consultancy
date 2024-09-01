<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Candidate;
use Illuminate\Http\Request;
use App\Http\Requests\CandidateRequest;
use App\Http\Controllers\Controller;
use App\Contracts\CandidateRepositoryInterface;

class CandidateController extends Controller
{
    protected $candidateRepositoryInterface;

    public function __construct(CandidateRepositoryInterface $candidateRepositoryInterface)
    {
        $this->candidateRepositoryInterface = $candidateRepositoryInterface;
        $this->authorizeResource(Candidate::class, 'candidate');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.candidate.index', $this->candidateRepositoryInterface->indexCandidate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CandidateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        $this->candidateRepositoryInterface->storeCandidate($request);
        return redirect(adminRedirectRoute('candidate'))->withSuccess('Candidate Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return view('admin.candidate.show', $this->candidateRepositoryInterface->showCandidate($candidate));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('admin.candidate.edit', $this->candidateRepositoryInterface->editCandidate($candidate));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CandidateRequest  $request
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(CandidateRequest $request, Candidate $candidate)
    {
        $this->candidateRepositoryInterface->updateCandidate($request, $candidate);
        return redirect(adminRedirectRoute('candidate'))->withInfo('Candidate Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        $this->candidateRepositoryInterface->destroyCandidate($candidate);
        return redirect(adminRedirectRoute('candidate'))->withFail('Candidate Deleted Successfully.');
    }
}
