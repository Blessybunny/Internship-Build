<?php

use App\Apparel;
use App\Order;
use App\Material;

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
        //Get apparel db
        $apparels = Apparel::all();
        
        //Return
        return view('home', compact('apparels'));
    });
    Route::get('/apparels', function () {
        //Get apparel db
        $apparels = Apparel::all();
        
        //Return
        return view('apparels', compact('apparels'));
    });

//APPAREL
    Route::get('/apparels/view/{id}', function ($id) {
        //Get apparel
        $apparel = Apparel::findOrFail($id);
        
        //Return
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

//PREDICTIVE ANALYTICS - Dashboard
    Route::get('/dashboard', function () {return view('analytics.dashboard');});

//PREDICTIVE ANALYTICS - Inventory
    Route::get('/dashboard/inventory-apparels', function () {
        //Apparel threshold
        $minmax = array('low' => 50, 'mid' => 100, 'opt' => 200); //0-50, 50-100, 100-200
        
        //Get apparel db
        $apparels = Apparel::all();
        
        //Return
        return view('analytics.inventory-apparels', compact('apparels', 'minmax'));
    });
    Route::get('/dashboard/inventory-materials', function () {
        //Supply threshold
        $minmax = array('low' => 100, 'mid' => 250, 'opt' => 500); //0-100, 100-250, 250-500
        
        //Get material db
        $materials = Material::all();
        return view('analytics.inventory-materials', compact('materials', 'minmax'));
    });

//PREDICTIVE ANALYTICS - Orders
    Route::get('/dashboard/order-logs', function () {
        //Get order db
        $orders = Order::all();
        
        //Return
        return view('analytics.order-logs', compact('orders'));
    });
    Route::post('/dashboard/order-logs/{id}/{status}', function ($id, $status) {
        //Update
        if ($status === 'pending') {
            $update = Order::where('id', $id)->update(['status' => 'pending']);
        }
        else if ($status === 'outgoing') {
            $update = Order::where('id', $id)->update(['status' => 'outgoing']);
        }
        else if ($status === 'delivered') {
            //Increment sales
            $order = Order::where('id', $id)->first();
            
            $apparel = Apparel::where('id', Order::where('id', $id)->first()->apparel_id)->first();
            $apparel->sold += $order->apparel_quantity;
            $apparel->save();
            
            //Decrement stock if accessory
            if ($order->apparel_size === null) {
                $apparel->stock_universal -= $order->apparel_quantity;
                $apparel->save();
            }
            
            //Decrement stock if shirt
            else if ($order->apparel_size === 'xs') {
                $apparel->stock_xs -= $order->apparel_quantity;
                $apparel->save();
            }
            else if ($order->apparel_size === 'sm') {
                $apparel->stock_sm -= $order->apparel_quantity;
                $apparel->save();
            }
            else if ($order->apparel_size === 'md') {
                $apparel->stock_md -= $order->apparel_quantity;
                $apparel->save();
            }
            else if ($order->apparel_size === 'lg') {
                $apparel->stock_lg -= $order->apparel_quantity;
                $apparel->save();
            }
            else if ($order->apparel_size === 'xl') {
                $apparel->stock_xl -= $order->apparel_quantity;
                $apparel->save();
            }
            
            //Update state
            $update = Order::where('id', $id)->update(['status' => 'delivered']);
        }
        else if ($status === 'delete') {
            $delete = Order::where('id', $id)->delete();
        }
        //Return to same page
        return redirect('/dashboard/order-logs');
    });
    Route::get('/dashboard/order-history', function () {
        //Get order db
        $orders = Order::all();
        
        //Return
        return view('analytics.order-history', compact('orders'));
    });