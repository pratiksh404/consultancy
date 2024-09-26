<?php

namespace App\Http\Livewire\Admin\Test;

use App\Exports\Admin\Test\ResultTableExport;
use App\Models\Admin\Test;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\View;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

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

    // Test Attributes
    public $test_date;

    public $description;

    // Publish Type
    const TABLE_PUBLISH = 1;

    const INDIVIDUAL_PUBLISH = 2;

    const PHYSICAL_PUBLISH = 3;

    public $publish_type = self::TABLE_PUBLISH;

    protected $listeners = [
        'candidateUpdated' => '$refresh',
        'printReportCard',
        'printResultTable',
        'trix_value_updated',
    ];

    public function mount(Test $test)
    {
        $this->test = $test;
        $this->marks = $test->marks;
        $this->description = $test->description;
    }

    public function trix_value_updated($value)
    {
        $this->description = $value;
    }

    public function printReportCard($candidate_ids)
    {
        $report_card_html = View::make('admin.layouts.modules.test.results.report_card', ['test' => $this->test, 'candidate_ids' => array_values($candidate_ids)])->render();
        $this->emit('printTestContent', $report_card_html);
    }

    public function printResultTable()
    {
        $result_table = View::make('admin.layouts.modules.test.results.table', ['test' => $this->test])->render();
        $this->emit('printTestContent', $result_table);
    }

    public function downloadResultTable()
    {
        $pdfContent = PDF::loadView('admin.layouts.modules.test.results.table', ['test' => $this->test])->output();

        return response()->streamDownload(
            fn () => print ($pdfContent),
            Carbon::create($this->test->test_date)->format('Y-m-d').'.pdf'
        );
    }

    public function populateFakeCandidates()
    {
        Artisan::call('test:candidate --test='.$this->test->id);
        $this->test->refresh();
    }

    public function excelResultTable()
    {
        return Excel::download(new ResultTableExport($this->test->marks), Carbon::create($this->test->test_date)->format('Y-m-d').'.xlsx');
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

    public function saveMarks()
    {

        $data = $this->test->data;
        $data['marks'] = $this->marks;
        $this->test->update([
            'data' => $data,
        ]);
    }

    public function saveConfigurations()
    {
        $data = $this->test->data;
        $data['description'] = $this->description;
        $data['publish_type'] = $this->publish_type ?? self::TABLE_PUBLISH;
        $this->test->update([
            'data' => $data,
        ]);
    }

    public function publish()
    {
        return $this->test->update([
            'is_published' => ! $this->test->is_published,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.test.test-profile');
    }
}
