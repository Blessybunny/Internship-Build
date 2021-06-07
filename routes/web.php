<?php

use App\Apparel;

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
    Route::get('/', function () {
        $apparels = Apparel::all();
        return view('home', compact('apparels'));
    });
    Route::get('/apparels', function () {
        $apparels = Apparel::all();
        return view('apparels', compact('apparels'));
    });

//APPAREL
    Route::get('/apparels/view/{id}', function ($id) {
        $apparel = Apparel::findOrFail($id);
        return view('layouts/apparel', compact('apparel'));
    });

//FOOTER
    Route::get('/changelog', function () {return view('changelog');});

//PREDICTIVE ANALYTICS
    Route::get('/statistics', function () {return view('analytics.statistics');});
    Route::get('/statistics/inventory-apparels', function () {return view('analytics.inventory-apparels');});
    Route::get('/statistics/inventory-materials', function () {return view('analytics.inventory-materials');});
    Route::get('/statistics/shipping', function () {return view('analytics.shipping');});
    Route::get('/statistics/sandbox', function () {return view('analytics.sandbox');});