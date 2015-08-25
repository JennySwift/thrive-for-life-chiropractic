<?php

use App\User;

Route::get('/test', function()
{
    $user = User::first();
    //dd($user);
    return $user;
});

Route::get('/', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);