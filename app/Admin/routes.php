<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();


Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    Route::get('/',function(){
        return Redirect::to('admin/works');
    });
    $router->resource('users', UserController::class);
    $router->resource('works', WorkController::class);

});
