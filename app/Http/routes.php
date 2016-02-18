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
Route::group(
  ['prefix' => 'admin'],
  function () {
      Route::resource('users', 'Admin\UsersController');
      Route::resource('subscriptions', 'Admin\SubscriptionsController');
  }
);

// API
Route::group(
  ['prefix' => 'api'],
  function () {
      Route::get(
        '/',
        function () {
            return view('welcome');
        }
      );
      Route::resource('users', 'Api\UsersController');
      Route::resource('products', 'Api\ProductsController');
      Route::resource('subscriptions', 'Api\SubscriptionsController');
  }
);

