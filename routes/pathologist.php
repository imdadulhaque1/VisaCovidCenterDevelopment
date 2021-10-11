<?php

use Illuminate\Support\Facades\Route;

// Pathologist route
Route::group(['prefix' => 'pathologist/', 'namespace' => 'Pathologist', 'as' => 'pathologist.', 'middleware' => ['auth', 'pathologist']], function () {

});