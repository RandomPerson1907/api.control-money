<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use FastRoute\Route;

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->group(['prefix' => 'users'], function () use ($router) {
            $router->post('register', "UserController@register");
            $router->post('login', "UserController@login");
            $router->get('logout', "UserController@logout");
        });

        $router->group(['prefix' => 'invoices', 'middleware' => 'auth'], function () use ($router) {
            $router->get('/', "InvoiceController@index");
        });
    });
});
