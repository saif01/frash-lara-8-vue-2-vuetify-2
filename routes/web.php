<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::namespace('App\Http\Controllers')->group(function(){ 



    // Demo Start
    Route::namespace('Demo')->group(function(){

        // Admin
        Route::namespace('Admin')->prefix('admin')->group(function(){

            //Room 
            // Route::namespace('Room')->prefix('room')->group(function(){
            //     Route::get('/index', 'IndexController@index');
            //     Route::post('/store', 'IndexController@store');
            //     Route::put('/update/{id}', 'IndexController@update');
            //     Route::delete('/destroy_temp/{id}', 'IndexController@destroy_temp');
            //     Route::delete('/destroy/{id}', 'IndexController@destroy');
            //     Route::post('/status/{id}', 'IndexController@status');
            // });

            Route::get('{any?}', 'IndexController@index');
        });

        // User
        Route::namespace('User')->group(function(){

        
            Route::get('{any?}', 'IndexController@index');
        });


        
    });
    // Demo End




});