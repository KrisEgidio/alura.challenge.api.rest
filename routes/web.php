<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* Para gerar a key da aplicação
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});
*/

$router->group(['prefix' => 'revenue'], function () use ($router) {
    $router->get('/', 'RevenueController@index');
    $router->get('/{id}', 'RevenueController@show');
    $router->post('/', 'RevenueController@store');
    $router->put('/{id}', 'RevenueController@update');
    $router->delete('/{id}', 'RevenueController@destroy');
});
