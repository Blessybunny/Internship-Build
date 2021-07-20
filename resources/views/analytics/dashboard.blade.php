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
            
            <!-- Important Numbers -->
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class = "card card-stats">
                        <div class = "card-header card-header-success card-header-icon">
                            <div class = "card-icon">
                                <i class = "material-icons">store</i>
                            </div>
                            <p class = "card-category">Revenue</p>
                            <h3 class = "card-title">PHP
                                <small>{{ number_format($revenue_month_count, 2) }}</small>
                            </h3>
                        </div>
                        <div class = "card-footer">
                            <div class = "stats">
                                <i class="material-icons">date_range</i>{{ $sales_month->count() }} deliveries this month
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class = "card card-stats">
                        <div class = "card-header card-header-warning card-header-icon">
                            <div class = "card-icon">
                                <i class = "material-icons">shopping_cart</i>
                            </div>
                            <p class = "card-category">Active Orders</p>
                            <h3 class = "card-title">
                                <small>{{ $orders->where('status', '=', 'pending')->count() }} Pending | {{ $orders->where('status', '=', 'outgoing')->count() }} Outgoing</small>
                            </h3>
                        </div>
                        <div class = "card-footer">
                            <div class = "stats">
                                <a href = "{{ url('/dashboard/order-logs') }}">View Order Logs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class = "card card-stats">
                        <div class = "card-header card-header-warning card-header-icon">
                            <div class = "card-icon">
                                <i class = "material-icons">inventory</i>
                            </div>
                            <p class = "card-category">Inventory</p>
                            <h3 class = "card-title">{{ $conflict_count }}
                                <small>Conflicts</small>
                            </h3>
                        </div>
                        <div class = "card-footer">
                            <div class = "stats">
                                <a href = "{{ url('/dashboard/inventory') }}">View Inventory</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <hr/>
            <br/>
            
            <!-- Sales Record -->
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class = "card">
                        <div class = "card-header card-header-tabs card-header-success">
                            <div class = "nav-tabs-navigation">
                                <div class = "nav-tabs-wrapper">
                                    <span class = "nav-tabs-title">Sales Records || </span>
                                    <ul class = "nav nav-tabs" data-tabs = "tabs">
                                        <li class = "nav-item">
                                            <a class = "nav-link active" href = "#sales-record-week" data-toggle = "tab">
                                                This Week
                                                <div class = "ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class = "nav-item">
                                            <a class = "nav-link" href = "#sales-record-month" data-toggle = "tab">
                                                This Month
                                                <div class = "ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class = "nav-item">
                                            <a class = "nav-link" href = "#sales-record-year" data-toggle = "tab">
                                                This Year
                                                <div class = "ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class = "nav-item">
                                            <a class = "nav-link" href = "#sales-record-all" data-toggle = "tab">
                                                All Time
                                                <div class = "ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class = "card-body">
                            <div class = "tab-content">
                                <div class = "tab-pane active" id = "sales-record-week">
                                    <hr/>
                                    <ul>
                                        <h6>This week's status:</h6>
                                        <li>{{ $sales_week->count() }} orders delivered.</li>
                                        <li>{{ $cancels_week->count() }} orders cancelled.</li>
                                    </ul>
                                    <hr/>
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th class = "text-center">Amount</th>
                                                    <th>Price</th>
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
                                                            <td>PHP {{ number_format($apparel->price * $sales, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class = "tab-pane" id = "sales-record-month">
                                    <hr/>
                                    <ul>
                                        <h6>This week's status:</h6>
                                        <li>{{ $sales_month->count() }} orders delivered.</li>
                                        <li>{{ $cancels_month->count() }} orders cancelled.</li>
                                    </ul>
                                    <hr/>
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th class = "text-center">Amount</th>
                                                    <th>Price</th>
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
                                                            <td>PHP {{ number_format($apparel->price * $sales, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class = "tab-pane" id = "sales-record-year">
                                    <hr/>
                                    <ul>
                                        <h6>This week's status:</h6>
                                        <li>{{ $sales_year->count() }} orders delivered.</li>
                                        <li>{{ $cancels_year->count() }} orders cancelled.</li>
                                    </ul>
                                    <hr/>
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th class = "text-center">Amount</th>
                                                    <th>Price</th>
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
                                                            <td>PHP {{ number_format($apparel->price * $sales, 2) }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class = "tab-pane" id = "sales-record-all">
                                    <hr/>
                                    <ul>
                                        <h6>This week's status:</h6>
                                        <li>{{ $sales_all->count() }} orders delivered.</li>
                                        <li>{{ $cancels_all->count() }} orders cancelled.</li>
                                    </ul>
                                    <hr/>
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th class = "text-center">Amount</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($apparels as $apparel)
                                                    @php $sales = 0 @endphp
                                                    @foreach ($sales_all as $sale)
                                                        @if ($sale->apparel_id === $apparel->id)
                                                            @php $sales += $sale->apparel_quantity @endphp
                                                        @endif
                                                    @endforeach
                                                    @if ($sales !== 0)
                                                        <tr>
                                                            <td>{{ $apparel->name }}</td>
                                                            <td class = "text-center">{{ $sales }}</td>
                                                            <td>PHP {{ number_format($apparel->price * $sales, 2) }}</td>
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
            </div>
            </div>
            
            <!-- Older Orders And Statistics -->            
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-danger">
                            <h4 class = "card-title">Older Orders</h4>
                            <p class = "card-category">Oldest pending and outgoing orders (in order) of utmost importance.</p>
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
                                            <td>{{ $orders->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total orders delivered:</td>
                                            <td>{{ $sales_all->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total orders cancelled:</td>
                                            <td>{{ $cancels_all->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this week:</td>
                                            <td>{{ $orders->whereBetween('created_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this month:</td>
                                            <td>{{ $orders->whereBetween('created_at', [Carbon\Carbon::now()->startOfMonth(), Carbon\Carbon::now()->endOfMonth()])->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Created orders this year:</td>
                                            <td>{{ $orders->whereBetween('created_at', [Carbon\Carbon::now()->startOfYear(), Carbon\Carbon::now()->endOfYear()])->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Total pending orders:</td>
                                            <td>{{ $orders->where('status', '=', 'pending')->count() }}</td>
                                        </tr>
                                        <tr>
                                            <td class = "bold">Active outgoing orders:</td>
                                            <td>{{ $orders->where('status', '=', 'outgoing')->count() }}</td>
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