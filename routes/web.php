<?php

use App\Apparel;
use App\Order;

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
        //Validate if ship delivery
        $delivery_method = request()->validate(['delivery-method' => 'required']);
        if ($delivery_method['delivery-method'] === 'ship') {
            $order = Order::create([
                'email' => request()->input('email'),
                'delivery_method' => request()->input('delivery-method'),
                'payment_method' => request()->input('payment-method'),
                'name' => request()->input('name'),
                'address' => request()->input('address'),
                'postal_code' => request()->input('postal-code'),
                'city' => request()->input('city'),
                'region' => request()->input('region'),
                'country' => request()->input('country'),
                'apparel_id' => request()->input('apparel-id'),
                'apparel_quantity' => request()->input('apparel-quantity'),
                'apparel_size' => request()->input('apparel-size')
            ]);
        }
        
        //Validate if pick-up delivery
        else if ($delivery_method['delivery-method'] === 'pick-up') {
            $order = Order::create([
                'email' => request()->input('email'),
                'delivery_method' => request()->input('delivery-method'),
                'pickup_location' => request()->input('pickup-location'),
                'apparel_id' => request()->input('apparel-id'),
                'apparel_quantity' => request()->input('apparel-quantity'),
                'apparel_size' => request()->input('apparel-size')
            ]);
        }
        
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