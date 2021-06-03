<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//NAVIGATION
    Route::get('/', 'GeneralController@view_home');
    Route::get('/apparels', 'GeneralController@view_apparels');

//FOOTER
    Route::get('/changelog', function () {return view('changelog');});

