<?php

Route::get('/', 'PagesController@home');
Route::get('/test', function ()
{
    return view('test');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);