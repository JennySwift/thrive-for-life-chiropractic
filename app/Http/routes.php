<?php

Route::get('/', 'PagesController@home');
//Route::get('services', 'PagesController@services');
//Route::get('about', 'PagesController@about');
//Route::get('contact', 'PagesController@contact');
//Route::get('test', function()
//{
//    return view('pages.test');
//});

//Services

//Route::group(['prefix' => 'services'], function(){
//    Route::get('ak', 'PagesController@ak');
//    Route::get('chiropractic', 'PagesController@chiropractic');
//    Route::get('government', 'PagesController@government');
//    Route::get('lifestyle', 'PagesController@lifestyle');
//    Route::get('hra', 'PagesController@hra');
//    Route::get('rnr', 'PagesController@rnr');
//});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);