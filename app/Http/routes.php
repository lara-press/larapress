<?php

/** @var LaraPress\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', function() {
    return view('home');
});

$router->handle(\App\Page::class, function() {
    die('caught');
});

$router->handle(\App\Post::class, function() {
    return 'asd';
});
