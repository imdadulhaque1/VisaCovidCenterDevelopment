<?php

use Illuminate\Support\Facades\Route;

// Super Admin route
// Route::group(['prefix' => 'super-admin/', 'namespace' => 'SuperAdmin', 'as' => 'superAdmin.', 'middleware' => ['auth', 'superAdmin']], function () {
Route::group(['prefix' => 'super-admin/', 'namespace' => 'SuperAdmin', 'as' => 'superAdmin.'] , function () {
    Route::get('/home', function () {
            return view('SuperAdmin.dashboard');
    });
});