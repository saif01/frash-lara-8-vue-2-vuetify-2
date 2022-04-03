<?php

use Illuminate\Support\Facades\Route;



// Auth Route Start
Route::namespace('App\Http\Controllers')->group(function(){

    // // Demo Start
    Route::namespace('Demo')->group(function(){

        // Admin
        Route::namespace('Admin')->prefix('admin')->group(function(){

            Route::get('{any?}', 'IndexController@index');
        });

        // User
        Route::namespace('User')->group(function(){


            Route::get('{any?}', 'IndexController@index');
        });
    });
    // // Demo End

});