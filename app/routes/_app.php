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

app()->group('/clients', [
    'namespace' => 'App\Controllers\Clients',
    'middleware' => 'web-auth',
    function () {
        app()->get('/get-top-potential-clients', ['name' => 'clients.get-top-potential-clients', 'middleware' => 'permissionMiddleware', 'ClientController@get_top_potential_clients']);
    }
]);

app()->group('/invoices', [
    'namespace' => 'App\Controllers\Invoices',
    'middleware' => 'web-auth',
    function () {
        app()->post('/get-total-sales', ['name' => 'invoices.get-total-sales', 'InvoiceController@get_total_sales']);
    }
]);

app()->group('/categories', [
    'namespace' => 'App\Controllers\Categories',
    'middleware' => 'web-auth',
    function () {
        app()->get('/get-total-categories', ['name' => 'categories.get-total-categories', 'CategoryController@get_total_categories']);
    }
]);

app()->group('/brands', [
    'namespace' => 'App\Controllers\Brands',
    'middleware' => 'web-auth',
    function () {
        app()->get('/get-total-brands', ['name' => 'brands.get-total-brands', 'BrandController@get_total_brands']);
    }
]);

app()->group('/products', [
    'namespace' => 'App\Controllers\Products',
    'middleware' => 'web-auth',
    function () {
        app()->get('/get-total-products', ['name' => 'products.get-total-products', 'ProductController@get_total_products']);
    }
]);

app()->group('/users', [
    'namespace' => 'App\Controllers\Users',
    'middleware' => 'web-auth',
    function () {
        app()->post('/set-store-user', ['name' => 'users.set-store-user', 'middleware' => 'permissionMiddleware', 'UserController@set_store_user']);
        app()->get('/clear-store-user', ['name' => 'users.clear-store-user', 'middleware' => 'permissionMiddleware', 'UserController@clear_store_user']);
    }
]);


