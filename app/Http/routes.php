<?php

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/fees', 'PagesController@fees');
Route::get('/meet-pete', 'PagesController@meetPete');
Route::get('/services', 'PagesController@services');

Route::get('/test', function ()
{
    return view('test');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);