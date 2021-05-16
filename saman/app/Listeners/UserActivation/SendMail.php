<?php

namespace App\Listeners\UserActivation;

use App\Events\UserActivation;
use App\Mail\ActivationUserAccount;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserActivation  $event
     * @return void
     */
    public function handle(UserActivation $event)
    {
//        dd($event->user->mobile);
//        Mail::to($event->user)->send(new ActivationUserAccount($event->user,$event->activationCode));
    }
}
