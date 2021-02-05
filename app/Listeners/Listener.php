<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\Event;

abstract class Listener
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
     * @param  Event  $event
     * @return void
     */
    public function handle(Event $event): void
    {
        //
    }
}
