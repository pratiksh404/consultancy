<?php

namespace App\Observers;

use App\Mail\Test\ConfirmationMail;
use App\Mail\Test\RegistrationMail;
use App\Models\Admin\Candidate;
use Illuminate\Support\Facades\Mail;

class CandidateObserver
{
    /**
     * Handle the Candidate "created" event.
     */
    public function created(Candidate $candidate): void
    {
        $receiver =
        (object) [
            'email' => $candidate->email,
            'name' => $candidate->name,
        ];
        if ($candidate->candidateable_type == 'App\Models\Admin\Test') {
            if ($candidate->type != Candidate::TEST) {
                $candidate->update([
                    'type' => Candidate::TEST,
                ]);
            }
            if ($candidate->verified) {
                // System Notification
                generalNotify([
                    'title' => $candidate->candidateable->name.' Confirmation Alert',
                    'subject' => 'Candidate confirmation verified for '.$candidate->candidateable->name,
                    'message' => 'Candidate '.$candidate->name.'('.$candidate->code.') confirmation verified for '.$candidate->candidateable->name,
                ]);

                // Mail To Candidate
                if ($candidate->candidateable->confirmation_email_status ?? true) {
                    Mail::to($receiver)->send(new ConfirmationMail($candidate->candidateable, $candidate));
                }
            } else {
                // System Notification
                generalNotify([
                    'title' => $candidate->candidateable->name.' Registration Alert',
                    'subject' => 'Candidate registered for '.$candidate->candidateable->name,
                    'message' => 'Candidate '.$candidate->name.'('.$candidate->code.') registered for '.$candidate->candidateable->name,
                ]);

                // Mail To Candidate
                if ($candidate->candidateable->registration_email_status ?? true) {
                    Mail::to($receiver)->send(new RegistrationMail($candidate->candidateable, $candidate));
                }
            }
        }
    }

    /**
     * Handle the Candidate "updated" event.
     */
    public function updated(Candidate $candidate): void
    {
        //
    }

    /**
     * Handle the Candidate "deleted" event.
     */
    public function deleted(Candidate $candidate): void
    {
        //
    }

    /**
     * Handle the Candidate "restored" event.
     */
    public function restored(Candidate $candidate): void
    {
        //
    }

    /**
     * Handle the Candidate "force deleted" event.
     */
    public function forceDeleted(Candidate $candidate): void
    {
        //
    }
}
