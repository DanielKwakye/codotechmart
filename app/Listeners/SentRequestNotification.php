<?php

namespace App\Listeners;

use App\Events\sentRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SentRequestNotification
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
     * @param  sentRequest  $event
     * @return void
     */
    public function handle(sentRequest $event)
    {
        //
        $event->courier->notify(new RequestSent());
    }
}
