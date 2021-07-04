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
                            <ul>
                                <li>Created orders all time.</li>
                                <li>Created orders this week.</li>
                                <li>Created orders this month.</li>
                                <li>Created orders this year.</li>
                                <br/>
                                <li>Current pending orders (include overdue) active.</li>
                                <li>Current outgoing orders (include overdue) active.</li>
                            </ul>
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

<!-- Temp -->
<script>
/*

            <div class = "row">
                <h3>One last thing to do...</h3>
                <p>Add warnings where each stock of apparels on different sizes are low on numbers.</p>
                <p>Add warnings where each stock of materials are low on numbers.</p>
                <p>Add warnings where shipping is long overdue.</p>
                <p>Add warnings where an apparel is overproduces (this warning is dismissable).</p>
            </div>
*/
</script>

@endsection