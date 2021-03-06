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

$router->get('/', function () use ($router) {
    return "Belajar Lumen";
});

$router->get('/hello', function () use ($router) {
    return "Hello World";
});

$router->group([
    'prefix' => 'api'
], function() use ($router) {

    //Route for foods
    $router->group([
        'prefix' => 'foods'
    ], function() use ($router) {
        $router->get('/', 'FoodsController@index');
        $router->post('/', 'FoodsController@store');
        $router->get('/{id}', 'FoodsController@show');
        $router->delete('/{id}', 'FoodsController@destroy');
        $router->put('/{id}', 'FoodsController@update');
    });   
});