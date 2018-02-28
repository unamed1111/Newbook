<?php

namespace App\Core\Listeners;

use App\Core\Events\BookEditedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookEditedListener
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
     * @param  BookEditedEvent  $event
     * @return void
     */
    public function handle(BookEditedEvent $event)
    {
        //
    }
    
}
