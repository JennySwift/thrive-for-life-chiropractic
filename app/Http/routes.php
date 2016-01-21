<?php

Route::get('/', 'PagesController@home');
Route::get('services', 'PagesController@services');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

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
//Route::group(['prefix' => 'services'], function(){
//    Route::get('applied-kinesiology', 'PagesController@appliedKinesiology');
//    Route::get('chiropractic', 'PagesController@chiropractic');
//    Route::get('government-supported-services', 'PagesController@governmentSupportedServices');
//    Route::get('health-promoting-lifestyle-advice', 'PagesController@healthPromotingLifestyleAdvice');
//    Route::get('health-risk-assessment', 'PagesController@healthRiskAssessment');
//    Route::get('retained-neonatal-reflexes', 'PagesController@retainedNeonatalReflexes');
//});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);