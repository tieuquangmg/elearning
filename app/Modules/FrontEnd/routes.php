<?php
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('dash', 'DashboardController@getIndex');
    Route::get('my', 'DashboardController@getDashboard');
    Route::get('course/{id}', 'DashboardController@getCourse');
    Route::controller('profile', 'ProfileController', [
        'getIndex' => 'profile.index',
    ]);
});