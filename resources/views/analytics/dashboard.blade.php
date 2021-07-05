@extends('layouts.dashboard')

@section('link-1')
    active
@endsection

@section('title')
    Dashboard
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- General Status -->
            <div class = "row">
                
                <!-- Order Status -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-info">
                            <h4 class = "card-title">Order Status</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table">
                                    <tbody>
                                        <tr>
                                            <td>Total orders created</td>
                                            <td>{{ DB::table('orders')->count()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Total orders delivered</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'delivered')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total orders cancelled</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'cancelled')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created orders this week</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [$date_now->startOfWeek(), $date_now->endOfWeek()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created orders this month</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [$date_now->startOfMonth(), $date_now->endOfMonth()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created orders this year</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [$date_now->startOfYear(), $date_now->endOfYear()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total pending orders</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'pending')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td>Active outgoing orders</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'outgoing')->count() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Inventory Status -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-info">
                            <h4 class = "card-title">Inventory Status</h4>
                        </div>
                        <div class = "card-body">
                            <ul>
                                <li>Apparel conflict details for each branch.</li>
                                <li>Accessory conflict details for each branch.</li>
                                <li>Material conflict details for each branch.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Sales Status -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-info">
                            <h4 class = "card-title">Sales Status</h4>
                        </div>
                        <div class = "card-body">
                            <ul>
                                <li>Top sold item this week.</li>
                            </ul>
                        </div>
                    </div>
                </div>      
                        
            </div>
            
            <!-- Order Status -->
            <div class = "row">
                
                <!-- Recent Status -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Recent Orders (Pending)</h4>
                        </div>
                        <div class = "card-body">
                        </div>
                    </div>
                </div>
                
                <!-- Oldest -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Oldest Orders (Pending)</h4>
                            <p class = "card-category">Top 10 oldest orders of utmost importance.</p>
                        </div>
                        <div class = "card-body">
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

@endsection