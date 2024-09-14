<?php

namespace App\Http\Livewire\Admin\Test;

use App\Models\Admin\Test;
use Livewire\Component;

class TestPanel extends Component
{
    protected $listeners = ['initialize_test_panel', 'testAdded' => '$refresh'];

    public function initialize_test_panel()
    {
        $this->dispatchBrowserEvent('initializeTestPanel');
    }

    public function render()
    {
        $tests = Test::latest()->paginate(9);

        return view('livewire.admin.test.test-panel', compact('tests'));
    }
}
