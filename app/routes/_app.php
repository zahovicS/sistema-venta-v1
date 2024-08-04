<?php

app()->get('/', function () {
    return _redirect('dashboard');
});

app()->group('/dashboard', [
    'namespace' => 'App\Controllers\Dashboard',
    'middleware' => 'web-auth',
    function () {
        app()->get('/', ['name' => 'dashboard', 'middleware' => 'permissionMiddleware', 'DashboardController@index']);
    }
]);

app()->group('/stores', [
    'namespace' => 'App\Controllers\Stores',
    'middleware' => 'web-auth',
    function () {
        app()->get('/get-all-stores', ['name' => 'stores.get-all-stores', 'middleware' => 'permissionMiddleware', 'StoreController@get_all_stores']);
    }
]);

app()->group('/users', [
    'namespace' => 'App\Controllers\Users',
    'middleware' => 'web-auth',
    function () {
        app()->post('/set-store-user', ['name' => 'users.set-store-user', 'middleware' => 'permissionMiddleware', 'UserController@set_store_user']);
    }
]);
