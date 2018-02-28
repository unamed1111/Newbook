<?php

namespace App\Listeners;

use App\Events\BookCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Book;
use Mail;



class SendEmailAfterBookCreated
{
    private $book;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Handle the event.
     *
     * @param  BookCreated  $event
     * @return void
     */
    public function handle(BookCreated $event)
    {   
        Mail::to('daominhtu245@gmail.com')->send( new mailsend());
    }
}
