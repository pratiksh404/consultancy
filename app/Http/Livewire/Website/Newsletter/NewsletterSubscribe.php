<?php

namespace App\Http\Livewire\Website\Newsletter;

use Adminetic\Newsletter\Models\Admin\Subscriber;
use Livewire\Component;

class NewsletterSubscribe extends Component
{
    public $email;

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|unique:subscribers,email|email:rfc,dns',
        ]);
        $subscriber = Subscriber::create([
            'email' => $this->email,
        ]);

        if (setting('subscription_mail', config('newsletter.subscription_mail' ?? false))) {
            $subscriber->send_subscription_notification_email();
        }
        $message = 'The email '.$this->email.' is successfully subscribed to our newsletter.';
        $this->emit('subscribe_success', $message);
        $this->email = null;
    }

    public function render()
    {
        return view('livewire.website.newsletter.newsletter-subscribe');
    }
}
