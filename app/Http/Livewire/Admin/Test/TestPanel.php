<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Admin\Test;
use Livewire\Component;

class TestPanel extends Component
{
    public function render()
    {
        $tests = Test::paginate(9);

        return view('livewire.admin.test.test-panel', compact('tests'));
    }
}
