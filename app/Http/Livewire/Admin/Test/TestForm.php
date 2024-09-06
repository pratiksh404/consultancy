<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Admin\Test;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class TestForm extends Component
{
    // Test Attribute
    public $test_date;

    public $course_id;

    public function mount()
    {
        $this->test_date = Carbon::now();
    }

    public function save()
    {
        $this->validate([
            'test_date' => 'required|date|after_or_equal:today',
            'course_id' => 'required|exists:courses,id',
        ]);

        Test::create([
            'code' => Str::uuid()->toString(),
            'test_date' => $this->test_date,
            'course_id' => $this->course_id,
        ]);

        $this->emit('testAdded');
    }

    public function render()
    {
        return view('livewire.admin.test.test-form');
    }
}
