<?php

namespace App\Http\Livewire\Admin\Counter;

use Livewire\Component;

class AppendedCounter extends Component
{
    public $counters = null;

    public function mount($counters = null)
    {
        $this->counters = $counters;
    }

    public function add()
    {
        $this->counters[] = [
            'name' => '',
            'count' => '',
            'suffix' => '',
        ];
    }

    public function remove($index)
    {
        $counters = $this->counters;
        unset($counters[$index]);
        $this->counters = $counters;
    }

    public function render()
    {
        return view('livewire.admin.counter.appended-counter');
    }
}
