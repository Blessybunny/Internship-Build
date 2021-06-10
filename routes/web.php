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
            $validated_fields = request()->validate([
                'email' => 'required',
                'payment-method' => 'required',
                'name' => 'required',
                'address' => 'required',
                'postal-code' => 'required',
                'city' => 'required',
                'region' => 'required',
                'country' => 'required'
            ]);
            $order = Order::create([
                'email' => $validated_fields['email'],
                'delivery_method' => $delivery_method['delivery-method'],
                'payment_method' => $validated_fields['payment-method'],
                'name' => $validated_fields['name'],
                'address' => $validated_fields['address'],
                'postal_code' => $validated_fields['postal-code'],
                'city' => $validated_fields['city'],
                'region' => $validated_fields['region'],
                'country' => $validated_fields['country'],
            ]);
        }
        
        //Validate if pick-up delivery
        else if ($delivery_method['delivery-method'] === 'pick-up') {
            $validated_fields = request()->validate([
                'email' => 'required',
            ]);
            $order = Order::create([
                'email' => $validated_fields['email'],
                'delivery_method' => $delivery_method['delivery-method']
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