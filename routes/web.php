<?php

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return view('index');
});

$router->group(['prefix' => 'main55'], function() use ($router) {

        $router->post('login', 'AuthController@authenticate');
        $router->post('register', 'AuthController@register');

});

$router->group([ 'middleware' => 'jwt.auth', 'prefix' => 'main55/auth' ],function() use ($router) {

          $router->get('users', 'ExampleController@users');

});
