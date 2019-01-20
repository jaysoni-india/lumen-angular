<?php

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return view('index');
});

$prefix = env('API_PREFIX');

$router->group(['prefix' => $prefix ], function() use ($router) {

        $router->post('login', 'AuthController@login');
        $router->post('register', 'AuthController@register');
        $router->get('events', 'EventController@events');

});

$router->group([ 'middleware' => 'jwt.auth', 'prefix' => $prefix.'/auth' ],function() use ($router) {

          $router->get('members', 'UserController@members');
          $router->get('user', 'UserController@user');

});
