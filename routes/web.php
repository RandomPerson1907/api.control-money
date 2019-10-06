<?php

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->group(['prefix' => 'users'], function () use ($router) {
            $router->post('register', "UserController@register");
            $router->post('login', "UserController@login");
            $router->post('logout', "UserController@logout");
        });

        $router->group(['prefix' => 'groups', 'middleware' => 'auth'], function () use ($router) {
            $router->get('/', "GroupController@list");
            $router->get('/{id}', "GroupController@one");
            $router->post('/', "GroupController@store");
            $router->patch('/{id}', "GroupController@update");
            $router->delete('/{id}', "GroupController@delete");
            $router->delete('/', "GroupController@deleteMany");
        });

        $router->group(['prefix' => 'invoices', 'middleware' => 'auth'], function () use ($router) {
            $router->get('/', "InvoiceController@list");
            $router->get('/{id}', "InvoiceController@one");
            $router->post('/', "InvoiceController@store");
            $router->patch('/{id}', "InvoiceController@update");
            $router->delete('/{id}', "InvoiceController@delete");
            $router->delete('/', "InvoiceController@deleteMany");
        });
    });
});
