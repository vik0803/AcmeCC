<?php
// Front-end Application pages

Route::group(
  ['middleware' => ['web']],
  function () {
      Route::get('/', 'PagesController@index');
      Route::auth();
  }
);

// Admin Application pages
Route::get('/dashboard', 'AdminController@index');

Route::get('/admin/users', 'Admin\UsersController@index');
Route::get('/admin/users/create', 'Admin\UsersController@create');
Route::post('/admin/users', 'Admin\UsersController@store');

Route::get('/admin/users/{id}/edit/', 'AdminController@edit');
Route::post('/admin/users/{id}', 'AdminController@update');

Route::get('/admin/subscriptions', 'AdminController@index');
Route::get('/admin/subscriptions/view/{id}', 'AdminController@index');


// API
Route::group(
  ['prefix' => 'api'],
  function () {
      Route::resource('users', 'Api\UsersController');
      Route::resource('products', 'Api\ProductsController');
      Route::resource('subscriptions', 'Api\SubscriptionsController');
  }
);

