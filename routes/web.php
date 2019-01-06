<?php

$prefix = env('API_PREFIX');

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return view('index');
});

$router->group(['prefix' => $prefix ], function() use ($router) {

        $router->post('login', 'AuthController@login');
        $router->post('register', 'AuthController@register');

});

$router->group([ 'middleware' => 'jwt.auth', 'prefix' => $prefix.'/auth' ],function() use ($router) {

          $router->get('users', 'UserController@all');

});
