<?php
    return [
        'defaults' => [
            'guard' => env('AUTH_GUARD', 'api'),
            'passwords' => 'users',
        ],

        'guards' => [
            'api' => [
                'driver' => 'token',
                'provider' => 'users',
            ],
        ],

        'user' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => App\Models\User::class,
            ],
        ],
    ];
