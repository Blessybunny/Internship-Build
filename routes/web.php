<?php

use App\Apparel;
use App\Category;
use App\Material;
use App\Order;
use App\Branch;
use App\BranchApparel;
use App\BranchMaterial;

use Illuminate\Support\Facades\Route;

//GENERAL
    Route::get('/', function () {
        //Get relevant databases
        $apparels = Apparel::all();
        $branch_apparels = BranchApparel::all();
        
        //Get total sold and total stock quantity for each top 8 most sold apparel from every branch
        $featured_apparels = ([]);
        foreach ($apparels as $apparel) {
            $sold = 0;
            $quantity_universal = 0;
            $quantity_xs = 0;
            $quantity_sm = 0;
            $quantity_md = 0;
            $quantity_lg = 0;
            $quantity_xl = 0;
            foreach ($branch_apparels as $branch_apparel) {
                if ($apparel->id === $branch_apparel->apparel_id) {
                    $sold += $branch_apparel->quantity_sold;
                    $quantity_universal += $branch_apparel->quantity_universal;
                    $quantity_xs += $branch_apparel->quantity_xs;
                    $quantity_sm += $branch_apparel->quantity_sm;
                    $quantity_md += $branch_apparel->quantity_md;
                    $quantity_lg += $branch_apparel->quantity_lg;
                    $quantity_xl += $branch_apparel->quantity_xl;
                }
            }
            array_push ($featured_apparels, [
                'id' => $apparel->id,
                'quantity_universal' => $quantity_universal,
                'quantity_xs' => $quantity_xs,
                'quantity_sm' => $quantity_sm,
                'quantity_md' => $quantity_md,
                'quantity_lg' => $quantity_lg,
                'quantity_xl' => $quantity_xl,
                'sold' => $sold
            ]);
        }
        $featured_apparels = collect($featured_apparels)->sortBy('sold')->reverse()->toArray();
        $featured_apparels = array_slice($featured_apparels, 0, 8);
        
        //Return
        return view('home', compact('apparels', 'featured_apparels'));
    });
    Route::get('/apparels', function () {
        //Get relevant databases
        $apparels = Apparel::all();
        $categories = Category::all();
        $branch_apparels = BranchApparel::all();
        
        //Get total stock quantity for each apparel from every branch
        $all_apparels = ([]);
        foreach ($apparels as $apparel) {
            $quantity_universal = 0;
            $quantity_xs = 0;
            $quantity_sm = 0;
            $quantity_md = 0;
            $quantity_lg = 0;
            $quantity_xl = 0;
            foreach ($branch_apparels as $branch_apparel) {
                if ($apparel->id === $branch_apparel->apparel_id) {
                    $quantity_universal += $branch_apparel->quantity_universal;
                    $quantity_xs += $branch_apparel->quantity_xs;
                    $quantity_sm += $branch_apparel->quantity_sm;
                    $quantity_md += $branch_apparel->quantity_md;
                    $quantity_lg += $branch_apparel->quantity_lg;
                    $quantity_xl += $branch_apparel->quantity_xl;
                }
            }
            array_push ($all_apparels, [
                'id' => $apparel->id,
                'quantity_universal' => $quantity_universal,
                'quantity_xs' => $quantity_xs,
                'quantity_sm' => $quantity_sm,
                'quantity_md' => $quantity_md,
                'quantity_lg' => $quantity_lg,
                'quantity_xl' => $quantity_xl
            ]);
        }
        
        //Return
        return view('apparels', compact('apparels', 'categories', 'all_apparels'));
    });

//APPAREL
    Route::get('/apparels/view/{id}', function ($id) {
        //Get relevant databases
        $apparel = Apparel::findOrFail($id);
        $branches = Branch::all();
        $branch_apparels = BranchApparel::all();
        
        //Get total stock quantity from every branch
        $quantity_universal = 0;
        $quantity_xs = 0;
        $quantity_sm = 0;
        $quantity_md = 0;
        $quantity_lg = 0;
        $quantity_xl = 0;
        foreach ($branch_apparels as $branch_apparel) {
            if ($apparel->id === $branch_apparel->apparel_id) {
                $quantity_universal += $branch_apparel->quantity_universal;
                $quantity_xs += $branch_apparel->quantity_xs;
                $quantity_sm += $branch_apparel->quantity_sm;
                $quantity_md += $branch_apparel->quantity_md;
                $quantity_lg += $branch_apparel->quantity_lg;
                $quantity_xl += $branch_apparel->quantity_xl;
            }
        }
        $quantity = [
            'quantity_universal' => $quantity_universal,
            'quantity_xs' => $quantity_xs,
            'quantity_sm' => $quantity_sm,
            'quantity_md' => $quantity_md,
            'quantity_lg' => $quantity_lg,
            'quantity_xl' => $quantity_xl
        ];
        
        //Return
        return view('layouts/apparel', compact('apparel', 'quantity', 'branches'));
    });
    Route::post('/apparels/view/{id}', function ($id) {
        //Ship
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
        
        //Pick-up
        else if ($delivery_method['delivery-method'] === 'pick-up') {
            $order = Order::create([
                'email' => request()->input('email'),
                'delivery_method' => request()->input('delivery-method'),
                'branch_id' => request()->input('branch-id'),
                'apparel_id' => request()->input('apparel-id'),
                'apparel_quantity' => request()->input('apparel-quantity'),
                'apparel_size' => request()->input('apparel-size')
            ]);
        }
        
        //Return to same page
        return redirect('/apparels/view/'.$id.'');
    });

//OTHER
    Route::get('/changelog', function () {return view('changelog');});

//PREDICTIVE ANALYTICS - Dashboard (WIP)
    Route::get('/dashboard', function () {
        //Apparel and material level indicators
        $minmax_apparels = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
        $minmax_materials = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
        
        //Get relevant databases
        $apparels = Apparel::all();
        $materials = Material::all();
        $branches = Branch::all();
        $branch_apparels = BranchApparel::all();
        $branch_materials = BranchMaterial::all();
        
        //Get relevant databases
        $orders = Order::all();
        
        //Get latest orders (wip)
        $latest_orders = ([]);
        
        //Get oldest orders (wip)
        $oldest_orders = ([]);
        
        //Return
        return view('analytics.dashboard');
    });

//PREDICTIVE ANALYTICS - Inventory
    Route::get('/dashboard/inventory', function () {
        //Apparel and material level indicators
        $minmax_apparels = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
        $minmax_materials = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
        
        //Get relevant databases
        $apparels = Apparel::all();
        $materials = Material::all();
        $branches = Branch::all();
        $branch_apparels = BranchApparel::all();
        $branch_materials = BranchMaterial::all();
        
        //Return
        return view('analytics.inventory', compact('apparels', 'materials', 'branches', 'branch_apparels', 'branch_materials', 'minmax_apparels', 'minmax_materials'));
    });

//PREDICTIVE ANALYTICS - Orders
    Route::get('/dashboard/order-logs', function () {
        //Get relevant databases
        $orders = Order::all();
        
        //Due maximum days
        $due = 7;
        
        //Return
        return view('analytics.order-logs', compact('orders', 'due'));
    });
    Route::get('/dashboard/order-history', function () {
        //Get relevant databases
        $orders = Order::orderBy('updated_at', 'DESC')->get();
        
        //Return
        return view('analytics.order-history', compact('orders'));
    });
    /*
        WIP
        Suggestion:
        Select from the branch with the highest stock, as a starting point.

        Status:
        Leave this until supervisors give the best suggestions.
    */
    Route::post('/dashboard/order-logs/{id}/{status}', function ($id, $status) {
        //Basic status change
        if ($status === 'pending') {
            $update = Order::where('id', $id)->update(['status' => 'pending']);
        }
        else if ($status === 'outgoing') {
            $update = Order::where('id', $id)->update(['status' => 'outgoing']);
        }
        else if ($status === 'cancel') {
            $update = Order::where('id', $id)->update(['status' => 'cancelled']);
        }
        
        //Delivered (BROKEN)
        else if ($status === 'delivered') {
            /*
            
            
            
            
            
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
            }*/
            
            //Update state
            $update = Order::where('id', $id)->update(['status' => 'delivered']);
        }
        
        //Return to same page
        return redirect('/dashboard/order-logs');
    });