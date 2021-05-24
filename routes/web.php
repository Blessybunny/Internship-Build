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
    Route::get('/', function () {return view('home');});
    Route::get('/home', function () {return redirect('/');});
    Route::get('/shirts', function () {return view('./apparel/shirts');});
    Route::get('/t-shirts', function () {return redirect('/shirts');});
    Route::get('/miscellaneous', function () {return view('./apparel/miscellaneous');});

//FOOTER
    Route::get('/changelog', function () {return view('changelog');});
    Route::get('/about', function () {return view('about');});
    Route::get('/about-us', function () {return redirect('/about');});

