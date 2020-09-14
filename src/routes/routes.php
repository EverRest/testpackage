<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Locations Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the routes for your package. These
| routes will automatically be loaded when installing this package.
|
*/


Route::prefix('api')->group(function () {
    Route::prefix('test')->group(function() {
        Route::get('/v1', function() {
            return 'Hello Locations!';
        });
    });
});
