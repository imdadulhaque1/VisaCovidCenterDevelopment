<?php

use Illuminate\Support\Facades\Route;

// Volunteer route
Route::group(['prefix' => 'volunteer/', 'namespace' => 'Volunteer', 'as' => 'volunteer.', 'middleware' => ['auth', 'volunteer']], function () {

});
