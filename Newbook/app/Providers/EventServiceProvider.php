<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Core\Events\BookCreatedEvent' => [
            'App\Core\Listeners\SendEmailAfterBookCreatedListener',
            
        ],
         'App\Core\Events\BookEditedEvent' => [
            'App\Core\Listeners\BookEditedListener',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
