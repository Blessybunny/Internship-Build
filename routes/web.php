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
    Route::post('/apparels/view/{id}', function ($id) {
        /*
        
        //Validate
        $validated_fields = request()->validate([
            'title' => 'required',
            'date-year' => 'required',
            'date-month' => 'required',
            'date-day' => 'required',
            'runtime' => 'required',
            'age-rating' => 'required',
            'plot' => 'required',
            'genre' => 'nullable'
        ]);
        //Add user to database
        $movie = Movie::create([
            'title' => $validated_fields['title'],
            'release_date' => $validated_fields['date-year'].'-'.$validated_fields['date-month'].'-'.$validated_fields['date-day'],
            'runtime' => $validated_fields['runtime'],
            'age_rating' => $validated_fields['age-rating'],
            'plot' => $validated_fields['plot']
        ]);
        //Record new checked genres
        foreach ($validated_fields['genre'] as $record) {
            Genre::create(['movie_id' => $movie->id, 'genre' => $record]);
        }
        */
        //Return to same page
        return redirect('/apparels/view/'.$id.'');
    });

//FOOTER
    Route::get('/changelog', function () {return view('changelog');});

//PREDICTIVE ANALYTICS
    Route::get('/statistics', function () {return view('analytics.statistics');});
    Route::get('/statistics/inventory-apparels', function () {
        $apparels = Apparel::all();
        return view('analytics.inventory-apparels', compact('apparels'));
    });
    Route::get('/statistics/inventory-materials', function () {return view('analytics.inventory-materials');});
    Route::get('/statistics/orders', function () {return view('analytics.orders');});
    Route::get('/statistics/sandbox', function () {return view('analytics.sandbox');});