<?php

namespace App\Core\Listeners;

use App\Core\Events\BookCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\sendmailaftercreatedbook;
class SendEmailAfterBookCreatedListener implements ShouldQueue
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
     * @param  BookCreatedEvent  $event
     * @return void
     */
    public function handle(BookCreatedEvent $event)
    {
        Mail::to('daominhtu245@gmail.com')->send( new sendmailaftercreatedbook($event->book));
    }
}
