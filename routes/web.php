<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');



    
});
Route::get('/create_insert', 'ControllerConsula@create_insert' );

Route::get('/crateManhy', 'ControllerConsula@crateManhy' );
