<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class createUserEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //

    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //
       $customer= $event->customer;
     $user=  new User();
     $user->name=$customer->name;
     $user->email=$customer->email;
     $user->password=bcrypt("Password123");
    }
}
