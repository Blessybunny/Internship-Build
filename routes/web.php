<?php

use App\Apparel;
use App\Category;
use App\Material;
use App\Order;
use App\Branch;
use App\BranchApparel;
use App\BranchMaterial;

use Illuminate\Support\Facades\Route;

//GLOBAL VARIABLES
    $order_due_threshold = 7;

//GENERAL
    Route::get('/', function () {
        //Get relevant databases
        $apparels = Apparel::orderBy('created_at', 'DESC')->get()->take(8);
        $branch_apparels = BranchApparel::get();
        
        //Return
        return view('home', compact('apparels', 'branch_apparels'));
    });
    Route::get('/apparels', function () {
        //Get relevant databases
        $apparels = Apparel::get();
        $categories = Category::get();
        $branch_apparels = BranchApparel::get();
        
        //Return
        return view('apparels', compact('apparels', 'categories', 'branch_apparels'));
    });

//APPAREL
    Route::get('/apparels/view/{id}', function ($id) {
        //Get relevant databases
        $apparel = Apparel::findOrFail($id);
        $branches = Branch::get();
        $branch_apparels = BranchApparel::get();
        
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

//ADMINISTRATIVE SCOPE
    Route::get('/login', function () {return view('analytics.login');})->name('login');
    Route::post('/login', function () {
        //Validate
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        //Authenticate
        if (Auth::attempt([
            'email' => request()->email,
            'password' => request()->password,
        ]))
            
        //Success
        {return redirect('/dashboard');}
        
        //Fail
        return back()->withErrors(['credentials' => 'Incorrect email or password.']);
    });
    Route::middleware(['auth'])->group(function () {
        //LOGOUT
        Route::get('/logout', function () {
            Auth::logout();
            return redirect('/login');
        });
        
        //PREDICTIVE ANALYTICS - Dashboard
            Route::get('/dashboard', function () {
                //Apparel and material level indicators
                $minmax_apparels = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
                $minmax_materials = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+

                //Due maximum days
                $order_due_threshold = 7;

                //Get relevant databases
                $apparels = Apparel::get();
                $materials = Material::get();
                $orders = Order::get();
                $branches = Branch::get();
                $branch_apparels = BranchApparel::get();
                $branch_materials = BranchMaterial::get();

                $cancels_week = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->where('status', '=', 'cancelled');
                $cancels_month = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfMonth(), Carbon\Carbon::now()->endOfMonth()])->where('status', '=', 'cancelled');
                $cancels_year = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfYear(), Carbon\Carbon::now()->endOfYear()])->where('status', '=', 'cancelled');
                $cancels_all = $orders->where('status', '=', 'cancelled');
                
                $sales_week = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->where('status', '=', 'delivered');
                $sales_month = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfMonth(), Carbon\Carbon::now()->endOfMonth()])->where('status', '=', 'delivered');
                $sales_year = $orders->whereBetween('updated_at', [Carbon\Carbon::now()->startOfYear(), Carbon\Carbon::now()->endOfYear()])->where('status', '=', 'delivered');
                $sales_all = $orders->where('status', '=', 'delivered');

                $revenue_month_count = 0;
                foreach ($apparels as $apparel) {
                    foreach ($sales_month as $sale) {
                        if ($sale->apparel_id === $apparel->id) {
                            $revenue_month_count += $sale->apparel_quantity * $apparel->price;
                        }
                    }
                }
                
                $conflict_count = 0;
                foreach ($branches as $branch) {
                    foreach ($branch_apparels as $branch_apparel) {
                        if ($branch_apparel->branch_id === $branch->id) {
                            foreach ($apparels as $apparel) {
                                if ($branch_apparel->apparel_id === $apparel->id) {
                                    if ($apparel->type === "shirt") {
                                        if ($branch_apparel->quantity_xs >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_xs >= $minmax_apparels['mid'] and $branch_apparel->quantity_xs <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_xs <= $minmax_apparels['mid'] and $branch_apparel->quantity_xs >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_xs <= $minmax_apparels['low']) {$conflict_count++;}

                                        if ($branch_apparel->quantity_sm >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_sm >= $minmax_apparels['mid'] and $branch_apparel->quantity_sm <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_sm <= $minmax_apparels['mid'] and $branch_apparel->quantity_sm >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_sm <= $minmax_apparels['low']) {$conflict_count++;}

                                        if ($branch_apparel->quantity_md >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_md >= $minmax_apparels['mid'] and $branch_apparel->quantity_md <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_md <= $minmax_apparels['mid'] and $branch_apparel->quantity_md >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_md <= $minmax_apparels['low']) {$conflict_count++;}

                                        if ($branch_apparel->quantity_lg >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_lg >= $minmax_apparels['mid'] and $branch_apparel->quantity_lg <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_lg <= $minmax_apparels['mid'] and $branch_apparel->quantity_lg >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_lg <= $minmax_apparels['low']) {$conflict_count++;}

                                        if ($branch_apparel->quantity_xl >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_xl >= $minmax_apparels['mid'] and $branch_apparel->quantity_xl <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_xl <= $minmax_apparels['mid'] and $branch_apparel->quantity_xl >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_xl <= $minmax_apparels['low']) {$conflict_count++;}
                                    }
                                }
                            }
                        }
                    }
                    foreach ($branch_apparels as $branch_apparel) {
                        if ($branch_apparel->branch_id === $branch->id) {
                            foreach ($apparels as $apparel) {
                                if ($branch_apparel->apparel_id === $apparel->id) {
                                    if ($apparel->type === "accessory") {
                                        if ($branch_apparel->quantity_universal >= $minmax_apparels['opt']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_universal >= $minmax_apparels['mid'] and $branch_apparel->quantity_universal <= $minmax_apparels['opt']) {}
                                        else if ($branch_apparel->quantity_universal <= $minmax_apparels['mid'] and $branch_apparel->quantity_universal >= $minmax_apparels['low']) {$conflict_count++;}
                                        else if ($branch_apparel->quantity_universal <= $minmax_apparels['low']) {$conflict_count++;}
                                    }
                                }
                            }
                        }
                    }
                    foreach ($branch_materials as $branch_material) {
                        if ($branch_material->branch_id === $branch->id) {
                            foreach ($materials as $material) {
                                if ($branch_material->material_id === $material->id) {
                                    if ($branch_material->quantity >= $minmax_materials['opt']) {$conflict_count++;}
                                    else if ($branch_material->quantity >= $minmax_materials['mid'] and $branch_material->quantity <= $minmax_materials['opt']) {}
                                    else if ($branch_material->quantity <= $minmax_materials['mid'] and $branch_material->quantity >= $minmax_materials['low']) {$conflict_count++;}
                                    else if ($branch_material->quantity <= $minmax_materials['low']) {$conflict_count++;}
                                }
                            }
                        }
                    }
                }
                
                //Return
                return view('analytics.dashboard', compact(
                    'apparels',
                    'orders',
                    'order_due_threshold',
                    
                    'revenue_month_count',
                    'conflict_count',
                    
                    'cancels_week',
                    'cancels_month',
                    'cancels_year',
                    'cancels_all',
                    
                    'sales_week',
                    'sales_month',
                    'sales_year',
                    'sales_all'
                ));
            });

        //PREDICTIVE ANALYTICS - Inventory
            Route::get('/dashboard/inventory', function () {
                //Apparel and material level indicators
                $minmax_apparels = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+
                $minmax_materials = array('low' => 250, 'mid' => 500, 'opt' => 1000); //0-250, 250-500, 500-1000, 1000+

                //Get relevant databases
                $apparels = Apparel::get();
                $materials = Material::get();
                $branches = Branch::get();
                $branch_apparels = BranchApparel::get();
                $branch_materials = BranchMaterial::get();

                //Return
                return view('analytics.inventory', compact('apparels', 'materials', 'branches', 'branch_apparels', 'branch_materials', 'minmax_apparels', 'minmax_materials'));
            });

        //PREDICTIVE ANALYTICS - Orders
            Route::get('/dashboard/order-logs', function () {
                //Get relevant databases
                $orders = Order::get();
                $apparels = Apparel::get();
                $branches = Branch::get();

                //Due maximum days
                $order_due_threshold = 7;

                //Return
                return view('analytics.order-logs', compact('orders', 'apparels', 'branches', 'order_due_threshold'));
            });
            Route::get('/dashboard/order-history', function () {
                //Get relevant databases
                $orders = Order::orderBy('updated_at', 'DESC')->get();
                $apparels = Apparel::get();
                $branches = Branch::get();

                //Return
                return view('analytics.order-history', compact('orders', 'apparels', 'branches'));
            });
            Route::post('/dashboard/order-logs/{id}/{status}', function ($id, $status) {
                //Basic status change
                if ($status === 'pending') {
                    $update = Order::where('id', $id)->update(['status' => 'pending']);
                }
                else if ($status === 'outgoing') {
                    $new_branch_id = request()->input('branch-id');
                    if ($new_branch_id !== null) {
                        $update = Order::where('id', $id)->update([
                            'status' => 'outgoing',
                            'branch_id' => request()->input('branch-id')
                        ]);
                    }
                    else {
                        $update = Order::where('id', $id)->update([
                            'status' => 'outgoing'
                        ]);
                    }
                }
                else if ($status === 'cancel') {
                    $update = Order::where('id', $id)->update(['status' => 'cancelled']);
                }

                //Delivered
                else if ($status === 'delivered') {
                    //Get apparel from its branch
                    $order = Order::where('id', $id)->first();
                    $apparel = BranchApparel::where([
                        ['branch_id', '=', $order->branch_id],
                        ['apparel_id', '=', $order->apparel_id]
                    ])->first();

                    //Decrement stock if accessory
                    if ($order->apparel_size === null) {
                        $apparel->quantity_universal -= $order->apparel_quantity;
                        $apparel->save();
                    }

                    //Decrement stock if shirt
                    else if ($order->apparel_size === 'xs') {
                        $apparel->quantity_xs -= $order->apparel_quantity;
                        $apparel->save();
                    }
                    else if ($order->apparel_size === 'sm') {
                        $apparel->quantity_sm -= $order->apparel_quantity;
                        $apparel->save();
                    }
                    else if ($order->apparel_size === 'md') {
                        $apparel->quantity_md -= $order->apparel_quantity;
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

                //Return to same page
                return redirect('/dashboard/order-logs');
            });
    });
