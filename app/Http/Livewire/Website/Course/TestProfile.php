<?php

namespace App\Http\Livewire\Website\Course;

use App\Models\Admin\Candidate;
use App\Models\Admin\Test;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class TestProfile extends Component
{
    public $test;

    // Candidate
    public $candidate_first_name;

    public $candidate_middle_name;

    public $candidate_last_name;

    public $candidate_email;

    public $candidate_phone;

    public $candidate_address;

    public $candidate_country_id;

    public $candidate_visa_id;

    // Result
    public $code;

    public $candidate;

    public $candidate_mark;

    public function mount(Test $test)
    {
        $this->test = $test;
    }

    public function saveCandidate()
    {

        $this->validate([
            'candidate_first_name' => 'required|max:80',
            'candidate_middle_name' => 'nullable|max:80',
            'candidate_last_name' => 'nullable|max:80',
            'candidate_email' => 'required|email|max:60',
            'candidate_phone' => 'nullable',
            'candidate_address' => 'nullable|max:100',
            'candidate_country_id' => 'nullable|exists:countries,id',
            'candidate_visa_id' => 'nullable|exists:visas,id',
        ]);

        $this->test->candidates()->create([
            'code' => rand(100000, 999999),
            'first_name' => $this->candidate_first_name,
            'middle_name' => $this->candidate_middle_name,
            'last_name' => $this->candidate_last_name,
            'email' => $this->candidate_email,
            'phone' => $this->candidate_phone,
            'address' => $this->candidate_address,
            'country_id' => $this->candidate_country_id,
            'visa_id' => $this->candidate_visa_id,
            'course_id' => $this->test->course_id,
        ]);

        $this->test->refresh();

        $this->candidate_first_name = null;
        $this->candidate_middle_name = null;
        $this->candidate_last_name = null;
        $this->candidate_email = null;
        $this->candidate_phone = null;
        $this->candidate_address = null;
        $this->candidate_country_id = null;
        $this->candidate_visa_id = null;

        $this->emit('candidateAdded');
    }

    public function searchResult()
    {
        $this->validate([
            'code' => 'required|exists:candidates,code',
        ]);
        $candidate = Candidate::where('code', $this->code)->first();
        $this->candidate = $candidate;
        $this->candidate_mark = collect($this->test->marks)->first(function ($mark, $candidate_id) use ($candidate) {
            return $candidate_id == $candidate->id;
        });

    }

    public function printReportCard($candidate_id)
    {
        $report_card_html = View::make('admin.layouts.modules.test.results.report_card', ['test' => $this->test, 'candidate_ids' => [$candidate_id]])->render();
        $this->emit('printTestContent', $report_card_html);
    }

    public function render()
    {
        return view('livewire.website.course.test-profile');
    }
}
