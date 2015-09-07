<?php

Route::get('/', 'PagesController@home');
Route::get('contact', 'PagesController@contact');
Route::get('fees', 'PagesController@fees');
Route::get('meet-pete', 'PagesController@meetPete');

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

Route::get('applied-kinesiology', 'PagesController@appliedKinesiology');
Route::get('chiropractic', 'PagesController@chiropractic');
Route::get('government-supported-services', 'PagesController@governmentSupportedServices');
Route::get('health-promoting-lifestyle-advice', 'PagesController@healthPromotingLifestyleAdvice');
Route::get('health-risk-assessment', 'PagesController@healthRiskAssessment');
Route::get('retained-neonatal-reflexes', 'PagesController@retainedNeonatalReflexes');

Route::get('/test', function ()
{
    return view('test');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);