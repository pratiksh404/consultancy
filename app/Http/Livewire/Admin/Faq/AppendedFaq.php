<?php

namespace App\Http\Livewire\Admin\Faq;

use Livewire\Component;

class AppendedFaq extends Component
{
    public $faqs;

    public $question;

    public $answer;

    public function mount($faqs = null)
    {
        $this->faqs = $faqs;
    }

    public function add()
    {
        $this->faqs[] = [
            'question' => '',
            'answer' => '',
        ];
    }

    public function remove($index)
    {
        $faqs = $this->faqs;
        unset($faqs[$index]);
        $this->faqs = $faqs;
    }

    public function render()
    {
        return view('livewire.admin.faq.appended-faq');
    }
}
