<?php

namespace App\Http\Livewire\Website\Inquiry;

use App\Models\Admin\Inquiry;
use Livewire\Component;

class InquiryForm extends Component
{
    public $inquiry;

    /*
    |--------------------------------------------------------------------------
    | Customer Info
    |--------------------------------------------------------------------------
    |
    */
    public $name;

    public $email;

    public $phone;

    public $message;

    public $country_id;

    public $course_id;

    public $visa_id;

    protected $listeners = ['initialize-inquiry' => 'initialize_inquiry'];

    public function initialize_inquiry()
    {
        $this->dispatchBrowserEvent('initialize_inquiry');
    }

    public function send_inquiry()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'country_id' => $this->country_id,
            'course_id' => $this->course_id,
            'visa_id' => $this->visa_id,
        ];
        $this->validate([
            'name' => 'required|max:80|min:4',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:9000000000|max:9999999999',
            'message' => 'required',
            'country_id' => 'required|exists:countries,id',
            'course_id' => 'nullable|exists:courses,id',
            'visa_id' => 'required|exists:visas,id',
        ]);

        Inquiry::create($data);

        $this->emit('inquiry_success');

        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->message = null;
        $this->country_id = null;
        $this->course_id = null;
        $this->visa_id = null;
    }

    public function render()
    {
        return view('livewire.website.inquiry.inquiry-form');
    }
}
