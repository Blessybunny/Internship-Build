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
    Route::get('/', 'ApparelsController@view_home');
    Route::get('/apparels', 'ApparelsController@view_apparels');

//FOOTER
    Route::get('/changelog', function () {return view('changelog');});

//PREDICTIVE ANALYTICS
    Route::get('/analytics', function () {return view('analytics');});