<?php

namespace App\Http\Livewire\Admin\Branch;

use Livewire\Component;

class BranchContactManagement extends Component
{
    public $emails;

    public $phones;

    public function mount($emails = null, $phones = null)
    {
        $this->emails = $emails;
        $this->phones = $phones;
    }

    public function addEmail()
    {
        $this->emails[] = [
            'title' => '',
            'value' => '',
        ];
    }

    public function addPhone()
    {
        $this->phones[] = [
            'title' => '',
            'value' => '',
        ];
    }

    public function removeEmail($key)
    {
        $emails = $this->emails;
        unset($emails[$key]);
        $this->emails = $emails;
    }

    public function removePhone($key)
    {
        $phones = $this->phones;
        unset($phones[$key]);
        $this->phones = $phones;
    }

    public function render()
    {
        return view('livewire.admin.branch.branch-contact-management');
    }
}
