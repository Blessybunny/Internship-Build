@extends('layouts.dashboard')

@section('link-1')
    active
@endsection

@section('title')
    Dashboard &amp; Statistics
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- General Report List -->
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class = "card">
                        <div class = "card-header card-header-info">
                            <h4 class = "card-title">General Report</h4>
                            <p class = "card-category">Every important details.</p>
                        </div>
                        <div class = "card-body">
                            <ul>
                                <li>
                                    There are {{ DB::table('orders')->whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->where('status', '=', 'delivered')->get()->count() }} delivered
                                    and {{ DB::table('orders')->whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->where('status', '=', 'cancelled')->get()->count() }} cancelled orders this week.
                                </li>
                                <li>
                                    There are {{ DB::table('orders')->where('status', '=', 'pending')->get()->count() + DB::table('orders')->where('status', '=', 'outgoing')->get()->count() }} pending and undelivered orders this week.
                                </li>
                                <li>
                                    @php $conflict_count = 0 @endphp
                                    @foreach ($branches as $branch)
                                        @foreach ($branch_apparels as $branch_apparel)
                                            @if ($branch_apparel->branch_id === $branch->id)
                                                @foreach ($apparels as $apparel)
                                                    @if ($branch_apparel->apparel_id === $apparel->id)
                                                        @if ($apparel->type === "shirt")
                                                            @php
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
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                                                                                                         
                                        @foreach ($branch_apparels as $branch_apparel)
                                            @if ($branch_apparel->branch_id === $branch->id)
                                                @foreach ($apparels as $apparel)
                                                    @if ($branch_apparel->apparel_id === $apparel->id)
                                                        @if ($apparel->type === "accessory")
                                                            @php
                                                                if ($branch_apparel->quantity_universal >= $minmax_apparels['opt']) {$conflict_count++;}
                                                                else if ($branch_apparel->quantity_universal >= $minmax_apparels['mid'] and $branch_apparel->quantity_universal <= $minmax_apparels['opt']) {}
                                                                else if ($branch_apparel->quantity_universal <= $minmax_apparels['mid'] and $branch_apparel->quantity_universal >= $minmax_apparels['low']) {$conflict_count++;}
                                                                else if ($branch_apparel->quantity_universal <= $minmax_apparels['low']) {$conflict_count++;}
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                                                                                                                
                                        @foreach ($branch_materials as $branch_material)
                                            @if ($branch_material->branch_id === $branch->id)
                                                @foreach ($materials as $material)
                                                    @if ($branch_material->material_id === $material->id)
                                                        @php
                                                            if ($branch_material->quantity >= $minmax_materials['opt']) {$conflict_count++;}
                                                            else if ($branch_material->quantity >= $minmax_materials['mid'] and $branch_material->quantity <= $minmax_materials['opt']) {}
                                                            else if ($branch_material->quantity <= $minmax_materials['mid'] and $branch_material->quantity >= $minmax_materials['low']) {$conflict_count++;}
                                                            else if ($branch_material->quantity <= $minmax_materials['low']) {$conflict_count++;}
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach
                                    There are a total of {{ $conflict_count }} conflicts found on the inventory system for every branch.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr/>
            <hr/>
            <br/>

            <!-- Statistics Tables -->
            <div class = "row">
                
                <!-- Order Statistics -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Order Statistics</h4>
                            <p class = "card-category">Every important numbers.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table">
                                    <tbody>
                                        <tr>
                                            <td class = "bold">Total orders created:</td>
                                            <td>{{ DB::table('orders')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total orders delivered:</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'delivered')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total orders cancelled:</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'cancelled')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this week:</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this month:</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [Carbon\Carbon::now()->startOfMonth(), Carbon\Carbon::now()->endOfMonth()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this year:</td>
                                            <td>{{ DB::table('orders')->whereBetween('created_at', [Carbon\Carbon::now()->startOfYear(), Carbon\Carbon::now()->endOfYear()])->get()->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total pending orders:</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'pending')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Active outgoing orders:</td>
                                            <td>{{ DB::table('orders')->where('status', '=', 'outgoing')->count() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href = "{{ url('/dashboard/order-logs') }}">
                                <button class = "btn btn-primary" data-toggle = "modal" data-target = "#modalInfo" style = "display: block; width: 100%;">
                                    <i class = "material-icons">local_shipping</i>
                                    View Order Logs
                                </button>
                            </a>
                            <a href = "{{ url('/dashboard/order-history') }}">
                                <button class = "btn btn-primary" data-toggle = "modal" data-target = "#modalInfo" style = "display: block; width: 100%;">
                                    <i class = "material-icons">history</i>
                                    View Order History
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Inventory Conflicts -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Inventory Conflicts</h4>
                            <p class = "card-category">Every important numbers.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td class = "text-center bold">Apparels</td>
                                            <td class = "text-center bold">Accessories</td>
                                            <td class = "text-center bold">Materials</td>
                                        </tr>
                                        @foreach ($branches as $branch)
                                            <tr>
                                                <td class = "bold">Branch {{ $branch->id }}</td>
                                                <td class = "text-center">
                                                    @php $conflict_count_shirt = 0 @endphp
                                                    @foreach ($branch_apparels as $branch_apparel)
                                                        @if ($branch_apparel->branch_id === $branch->id)
                                                            @foreach ($apparels as $apparel)
                                                                @if ($branch_apparel->apparel_id === $apparel->id)
                                                                    @if ($apparel->type === "shirt")
                                                                        @php
                                                                            if ($branch_apparel->quantity_xs >= $minmax_apparels['opt']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_xs >= $minmax_apparels['mid'] and $branch_apparel->quantity_xs <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_xs <= $minmax_apparels['mid'] and $branch_apparel->quantity_xs >= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_xs <= $minmax_apparels['low']) {$conflict_count_shirt++;}

                                                                            if ($branch_apparel->quantity_sm >= $minmax_apparels['opt']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_sm >= $minmax_apparels['mid'] and $branch_apparel->quantity_sm <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_sm <= $minmax_apparels['mid'] and $branch_apparel->quantity_sm >= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_sm <= $minmax_apparels['low']) {$conflict_count_shirt++;}

                                                                            if ($branch_apparel->quantity_md >= $minmax_apparels['opt']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_md >= $minmax_apparels['mid'] and $branch_apparel->quantity_md <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_md <= $minmax_apparels['mid'] and $branch_apparel->quantity_md >= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_md <= $minmax_apparels['low']) {$conflict_count_shirt++;}

                                                                            if ($branch_apparel->quantity_lg >= $minmax_apparels['opt']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_lg >= $minmax_apparels['mid'] and $branch_apparel->quantity_lg <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_lg <= $minmax_apparels['mid'] and $branch_apparel->quantity_lg >= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_lg <= $minmax_apparels['low']) {$conflict_count_shirt++;}

                                                                            if ($branch_apparel->quantity_xl >= $minmax_apparels['opt']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_xl >= $minmax_apparels['mid'] and $branch_apparel->quantity_xl <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_xl <= $minmax_apparels['mid'] and $branch_apparel->quantity_xl >= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                            else if ($branch_apparel->quantity_xl <= $minmax_apparels['low']) {$conflict_count_shirt++;}
                                                                        @endphp
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    {{ $conflict_count_shirt }}
                                                </td>
                                                <td class = "text-center">
                                                    @php $conflict_count_accessory = 0 @endphp
                                                    @foreach ($branch_apparels as $branch_apparel)
                                                        @if ($branch_apparel->branch_id === $branch->id)
                                                            @foreach ($apparels as $apparel)
                                                                @if ($branch_apparel->apparel_id === $apparel->id)
                                                                    @if ($apparel->type === "accessory")
                                                                        @php
                                                                            if ($branch_apparel->quantity_universal >= $minmax_apparels['opt']) {$conflict_count_accessory++;}
                                                                            else if ($branch_apparel->quantity_universal >= $minmax_apparels['mid'] and $branch_apparel->quantity_universal <= $minmax_apparels['opt']) {}
                                                                            else if ($branch_apparel->quantity_universal <= $minmax_apparels['mid'] and $branch_apparel->quantity_universal >= $minmax_apparels['low']) {$conflict_count_accessory++;}
                                                                            else if ($branch_apparel->quantity_universal <= $minmax_apparels['low']) {$conflict_count_accessory++;}
                                                                        @endphp
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    {{ $conflict_count_accessory }}
                                                </td>
                                                <td class = "text-center">
                                                    @php $conflict_count_material = 0 @endphp
                                                    @foreach ($branch_materials as $branch_material)
                                                        @if ($branch_material->branch_id === $branch->id)
                                                            @foreach ($materials as $material)
                                                                @if ($branch_material->material_id === $material->id)
                                                                    @php
                                                                        if ($branch_material->quantity >= $minmax_materials['opt']) {$conflict_count_material++;}
                                                                        else if ($branch_material->quantity >= $minmax_materials['mid'] and $branch_material->quantity <= $minmax_materials['opt']) {}
                                                                        else if ($branch_material->quantity <= $minmax_materials['mid'] and $branch_material->quantity >= $minmax_materials['low']) {$conflict_count_material++;}
                                                                        else if ($branch_material->quantity <= $minmax_materials['low']) {$conflict_count_material++;}
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    {{ $conflict_count_material }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href = "{{ url('/dashboard/inventory') }}">
                                <button class = "btn btn-primary" data-toggle = "modal" data-target = "#modalInfo" style = "display: block; width: 100%;">
                                    <i class = "material-icons">inventory</i>
                                    View Inventory
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                                      
            </div>
            
            <!-- Older Orders -->
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Older Orders</h4>
                            <p class = "card-category">Top 10 oldest pending and outgoing orders of utmost importance.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping table-record">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Order Date</th>
                                            <th class = "text-center">Overdue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === 'pending' or $order->status === 'outgoing')
                                                @php $overdue = (strtotime($order->created_at) > strtotime('-'.$order_due_threshold.' days')) ? 'No' : 'Yes' @endphp
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->created_at->format('F j, Y') }} at {{ $order->created_at->format('h:i A') }}',
                                                               '{{ $order->status }}',
                                                               '{{ $overdue }}',
                                                               
                                                               '{{ $apparels->find($order->apparel_id)->name }}',
                                                               '{{ $order->apparel_quantity }}',
                                                               '{{ $order->apparel_size }}',
                                                               '{{ $apparels->find($order->apparel_id)->price }}',
                                                               
                                                               '{{ $order->delivery_method }}',
                                                               '{{ $order->payment_method }}',
                                                               
                                                               '{{ $order->email }}',
                                                               '{{ $order->name }}',
                                                               '{{ $order->address }}',
                                                               '{{ $order->postal_code }}',
                                                               '{{ $order->city }}',
                                                               '{{ $order->region }}',
                                                               '{{ $order->country }}',
                                                               
                                                               '{{ DB::table('branches')->where('id', $order->branch_id)->first()->name ?? null }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#modalOrder"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}"
                                                        class = "@if ($overdue === 'Yes') red @endif">
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('F j, Y') }} at {{ $order->created_at->format('h:i A') }}</td>
                                                    <td class = "text-center">{{ $overdue }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                                    
            <!-- Sales -->
            <div class = "row">
                
                <!-- Sales of the Week -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Sales of the Week</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Product Name</th>
                                            <th class = "text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apparels as $apparel)
                                            
                                            @php $sales = 0 @endphp
                                        
                                            @foreach ($sales_week as $sale)
                                                @if ($sale->apparel_id === $apparel->id)
                                                    @php $sales += $sale->apparel_quantity @endphp
                                                @endif
                                            @endforeach
                                            
                                            @if ($sales !== 0)
                                                <tr>
                                                    <td>{{ $apparel->name }}</td>
                                                    <td class = "text-center">{{ $sales }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sales of the Month -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Sales of the Month</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Product Name</th>
                                            <th class = "text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apparels as $apparel)
                                            
                                            @php $sales = 0 @endphp
                                        
                                            @foreach ($sales_month as $sale)
                                                @if ($sale->apparel_id === $apparel->id)
                                                    @php $sales += $sale->apparel_quantity @endphp
                                                @endif
                                            @endforeach
                                            
                                            @if ($sales !== 0)
                                                <tr>
                                                    <td>{{ $apparel->name }}</td>
                                                    <td class = "text-center">{{ $sales }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sales of the Year -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title">Sales of the Year</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Product Name</th>
                                            <th class = "text-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apparels as $apparel)
                                            
                                            @php $sales = 0 @endphp
                                        
                                            @foreach ($sales_year as $sale)
                                                @if ($sale->apparel_id === $apparel->id)
                                                    @php $sales += $sale->apparel_quantity @endphp
                                                @endif
                                            @endforeach
                                            
                                            @if ($sales !== 0)
                                                <tr>
                                                    <td>{{ $apparel->name }}</td>
                                                    <td class = "text-center">{{ $sales }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                                                    
            <!-- Modal: Order -->
            <div class = "modal fade" id = "modalOrder">
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "order-id" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col">
                                    <table id = "order-info"></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scripts -->
            <script>
                //Modals
                let popModal = (order_id, order_created_at, order_status, order_overdue, apparel_name, apparel_quantity, apparel_size, apparel_price, order_delivery_method, order_payment_method, order_email, order_name, order_address, order_postal_code, order_city, order_region, order_country, order_branch) => {
                    //Order details
                    document.getElementById(`order-id`).innerHTML = `Order ID #${order_id}`;
                    document.getElementById(`order-info`).innerHTML = `
                        <tbody>
                            <tr>
                                <td class = "bold">Order Date:</td>
                                <td>${order_created_at}</td>
                            </tr>
                            <tr>
                                <td class = "bold">Status:</td>
                                <td class = "capitalize">${order_status}</td>
                            </tr>
                            <tr>
                                <td class = "bold">Overdue:</td>
                                <td class = "capitalize">${order_overdue}</td>
                            </tr>
                            <tr>
                                <td colspan = "2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class = "bold">Apparel Name:</td>
                                <td>${apparel_name}</td>
                            </tr>
                            <tr>
                                <td class = "bold">Quantity:</td>
                                <td>${apparel_quantity}</td>
                            </tr>
                            ${apparel_size ? `<tr>
                                <td class = "bold">Size:</td>
                                <td class = "uppercase">${apparel_size}</td>
                            </tr>` : ``}
                            <tr>
                                <td class = "bold">Total Price:</td>
                                <td>PHP ${(apparel_price * apparel_quantity).toFixed(2)}</td>
                            </tr>
                            <tr>
                                <td colspan = "2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class = "bold">Delivery Method:</td>
                                <td class = "capitalize">${order_delivery_method}</td>
                            </tr>
                            ${order_payment_method ? `<tr>
                                <td class = "bold">Payment Method:</td>
                                <td>${order_payment_method}</td>
                            </tr>`: ``}
                            <tr>
                                <td colspan = "2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class = "bold">Email:</td>
                                <td>${order_email}</td>
                            </tr>
                            ${order_name ? `<tr>
                                <td class = "bold">Name:</td>
                                <td>${order_name}</td>
                            </tr>`: ``}
                            ${order_address ? `<tr>
                                <td class = "bold">Address:</td>
                                <td>${order_address}</td>
                            </tr>`: ``}
                            ${order_postal_code ? `<tr>
                                <td class = "bold">Postal Code:</td>
                                <td>${order_postal_code}</td>
                            </tr>`: ``}
                            ${order_city ? `<tr>
                                <td class = "bold">City:</td>
                                <td>${order_city}</td>
                            </tr>`: ``}
                            ${order_region ? `<tr>
                                <td class = "bold">Region:</td>
                                <td>${order_region}</td>
                            </tr>`: ``}
                            ${order_country ? `<tr>
                                <td class = "bold">Country:</td>
                                <td>${order_country}</td>
                            </tr>`: ``}
                            ${order_branch ? `<tr>
                                <td class = "bold">Branch:</td>
                                <td>${order_branch}</td>
                            </tr>`: ``}
                        </tbody>
                    `;
                };
            </script>
                                                    
        </div>
    </div>

@endsection