<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Admin\Test;
use Livewire\Component;

class TestCard extends Component
{
    public $test;

    public function mount(Test $test)
    {
        $this->test = $test;
    }

    public function render()
    {
        return view('livewire.admin.test.test-card');
    }
}
