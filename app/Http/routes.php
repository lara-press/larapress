<?php

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

/** @var LaraPress\Routing\Router $router */

$router->get('/', function() {
    return view('home');
});

//$router->arrest(\App\Page::class, 'PageController@catchPage');
//$router->arrest(\App\Post::class, 'PostController@catchPost');