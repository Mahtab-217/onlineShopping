<?php

namespace App\Listeners;

use App\Events\createUserEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use PHPUnit\Metadata\BackupStaticProperties;

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
    public function handle(createUserEvent $event): void
    {
        //
        $customer=$event->customer;
       $user= User::create(
            [
               "name"=> $customer->name,
                "email"=>$customer->email,
                "password"=> bcrypt("Password123"),
                "user_type"=>"customer",
            ]
        );
        $customer->user_id=$user->id;
        $customer->save();
    }
}
