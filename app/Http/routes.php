<?php

Route::get('/', 'PagesController@home');
Route::get('services', 'PagesController@services');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('test', function()
{
    return view('pages.test');
});

//Services

/**
 * @VP:
 * When I prefixed these routes with 'services,' the paths to my files stopped working.
 * This:
 * <link rel="stylesheet" href="css/app.css">
 * was trying to find this:
 * http://thrive_for_life.dev:8000/services/css/app.css
 * instead of this:
 * http://thrive_for_life.dev:8000/css/app.css
 * How to fix??
 */
Route::group(['prefix' => 'services'], function(){
    Route::get('ak', 'PagesController@ak');
    Route::get('chiropractic', 'PagesController@chiropractic');
    Route::get('government', 'PagesController@government');
    Route::get('lifestyle', 'PagesController@lifestyle');
    Route::get('hra', 'PagesController@hra');
    Route::get('rnr', 'PagesController@rnr');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);