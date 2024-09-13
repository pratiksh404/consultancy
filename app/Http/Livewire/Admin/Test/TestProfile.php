<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Admin\Test;
use Livewire\Component;

class TestProfile extends Component
{
    public $test;

    // Add Candidate
    public $candidate_first_name;

    public $candidate_middle_name;

    public $candidate_last_name;

    public $candidate_email;

    public $candidate_phone;

    public $candidate_address;

    public $candidate_country_id;

    public $candidate_visa_id;

    // Test Marks
    public $marks;

    protected $listeners = [
        'candidateUpdated' => '$refresh',
    ];

    public function mount(Test $test)
    {
        $this->test = $test;
        $this->marks = $test->marks;
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

        $this->candidate_name = null;
        $this->candidate_email = null;
        $this->candidate_phone = null;
        $this->candidate_address = null;
        $this->candidate_country_id = null;
        $this->candidate_visa_id = null;

        $this->emit('candidateAdded');
    }

    public function saveMarks()
    {

        $data = $this->test->data;
        $data['marks'] = $this->marks;
        $this->test->update([
            'data' => $data,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.test.test-profile');
    }
}
