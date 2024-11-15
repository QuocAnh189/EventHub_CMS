<?php

namespace App\Listeners\Auth;

use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateLoginData implements ShouldQueue
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
    }
}
