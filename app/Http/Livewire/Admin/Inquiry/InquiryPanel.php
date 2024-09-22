<?php

namespace App\Http\Livewire\Admin\Inquiry;

use App\Models\Admin\Inquiry;
use Livewire\Component;
use Livewire\WithPagination;

class InquiryPanel extends Component
{
    use WithPagination;

    public function render()
    {
        $inquiries = $this->getInquiries();

        return view('livewire.admin.inquiry.inquiry-panel', compact('inquiries'));
    }

    private function getInquiries()
    {

        $data = Inquiry::query();

        return $data->latest()->paginate(9);
    }
}
