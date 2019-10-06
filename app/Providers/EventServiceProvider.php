<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserLoginEvent' => [
            'App\Listeners\UserLoginListener',
        ],
        'App\Events\GetInvoicesEvent' => [
            'App\Listeners\GetInvoicesListener',
        ],
    ];
}
