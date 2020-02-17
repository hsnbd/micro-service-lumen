<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('user', function() {
   return response()->json(['name' => 'Hasan', 'email' => 'hasan@gmail.com', 'token' => '1234567890'], 200);
});
