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
        'App\Events\UserLogoutEvent' => [
            'App\Listeners\UserLogoutListener',
        ],
        'App\Events\GetGroupsEvent' => [
            'App\Listeners\GetGroupsListener',
        ],
        'App\Events\GetGroupEvent' => [
            'App\Listeners\GetGroupListener',
        ],
        'App\Events\StoreGroupEvent' => [
            'App\Listeners\StoreGroupListener',
        ],

        'App\Events\GetInvoicesEvent' => [
            'App\Listeners\GetInvoicesListener',
        ],
    ];
}
