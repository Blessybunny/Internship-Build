@extends('layouts.dashboard')

@section('link-3')
    active
@endsection

@section('title')
    Order Log - Pending &amp; Outgoing
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- Info -->
            <div class = "row">
                <div class = "col justify">
                    <button class = "btn btn-info" data-toggle = "modal" data-target = "#modalInfo">
                        <i class = "material-icons">info</i>
                        Info
                    </button>
                </div>
            </div>
            
            <div class = "row">
                
                <!-- Table: Pending orders -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "table-pending-header" class = "card-title"></h4>
                            <p class = "card-category">Includes orders delayed or not en route for delivery.</p>
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
                                            @if ($order->status === 'pending')
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
                                                               
                                                               {{ $order->branch_id }},
                                                               '{{ DB::table('branches')->where('id', $order->branch_id)->first()->name ?? null }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#modalOrder"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}"
                                                        class = "order-pending @if ($overdue === 'Yes') red @endif">
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
                
                <!-- Table: Outgoing orders -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "table-outgoing-header" class = "card-title"></h4>
                            <p class = "card-category">Includes orders currently en route for delivery.</p>
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
                                            @if ($order->status === 'outgoing')
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
                                                               
                                                               {{ $order->branch_id }},
                                                               '{{ DB::table('branches')->where('id', $order->branch_id)->first()->name ?? null }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#modalOrder"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}"
                                                        class = "order-outgoing @if ($overdue === 'Yes') red @endif">
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
            
            <!-- Modal: Orders -->
            <div class = "modal fade" id = "modalOrder">
                <div class = "modal-dialog modal-dialog-centered modal-lg">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "order-id" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-6">
                                    <table id = "order-info"></table>
                                </div>
                                <div class = "col-6">
                                    <p class = "bold">Order options:</p>
                                    <form id = "form-btn-pending" method = "POST">
                                        @csrf
                                        <button onclick = "return confirm('Are you sure to mark this order pending?')" type = "submit" class = "btn btn-sm btn-info" title = "Select this option if there's no outgoing delivery for it.">
                                            <i class = "material-icons">pending_actions</i> Mark as "Pending"
                                        </button>
                                    </form>
                                    <form id = "form-btn-outgoing" method = "POST">
                                        @csrf
                                        <div id = "form-branches">
                                            <p class = "bold">Selected Outgoing Branch:</p>
                                            @foreach ($branches as $branch)
                                                <div class = "form-check form-check-radio">
                                                    <label class = "form-check-label">
                                                        <input class = "form-check-input input-branches" name = "branch-id" type = "radio" value = "{{ $branch->id }}" />
                                                        <p>Branch {{ $branch->id }}: {{ $branch->name }}</p>
                                                        <span class = "circle">
                                                            <span class = "check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button onclick = "return confirm('Are you sure to mark this order outgoing?')" type = "submit" class = "btn btn-sm btn-info" title = "Select this option if the delivery is en route.">
                                            <i class = "material-icons">local_shipping</i> Mark as "Outgoing"
                                        </button>
                                    </form>
                                    <form id = "form-btn-delivered" method = "POST">
                                        @csrf
                                        <button onclick = "return confirm('Are you sure to mark this order delivered?')" type = "submit" class = "btn btn-sm btn-success" title = "Select this option if the delivery is completed.">
                                            <i class = "material-icons">check_circle</i> Mark as "Delivered"
                                        </button>
                                    </form>
                                    <form id = "form-btn-cancel" method = "POST">
                                        @csrf
                                        <button onclick = "return confirm('Are you sure to cancel this order?')" type = "submit" class = "btn btn-sm btn-danger" title = "Select this option at your own risk.">
                                            <i class = "material-icons">close</i> Cancel Order
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal: Info -->
            <div class = "modal fade" id = "modalInfo">
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 class = "modal-title">Info</h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-12">
                                    <h6>Overdue Orders:</h6>
                                    <p>Week overdue orders are marked red.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scripts -->
            <script>
                //Order count
                window.onload = () => {
                    document.getElementById(`table-pending-header`).innerHTML = `Pending Orders | ${document.getElementsByClassName(`order-pending`).length} Records`;
                    document.getElementById(`table-outgoing-header`).innerHTML = `Outgoing Orders | ${document.getElementsByClassName(`order-outgoing`).length} Records`;
                };
                
                //Modals
                let popModal = (order_id, order_created_at, order_status, order_overdue, apparel_name, apparel_quantity, apparel_size, apparel_price, order_delivery_method, order_payment_method, order_email, order_name, order_address, order_postal_code, order_city, order_region, order_country, order_branch_id, order_branch_name) => {
                    //Button actions and visibility
                    let btnPending = document.getElementById(`form-btn-pending`),
                        btnOutgoing = document.getElementById(`form-btn-outgoing`),
                        btnDelivered = document.getElementById(`form-btn-delivered`);
                    
                    btnPending.action = document.getElementById(`row-order-${order_id}`).getAttribute('data-status-target') + `/pending`;
                    btnOutgoing.action = document.getElementById(`row-order-${order_id}`).getAttribute('data-status-target') + `/outgoing`;
                    btnDelivered.action = document.getElementById(`row-order-${order_id}`).getAttribute('data-status-target') + `/delivered`;
                     
                    if (order_status === `pending`) {
                        btnPending.style.display = `none`;
                        btnDelivered.style.display = `none`;
                        btnOutgoing.style.display = `block`;
                    }
                    if (order_status === `outgoing`) {
                        btnPending.style.display = `block`;
                        btnDelivered.style.display = `block`;
                        btnOutgoing.style.display = `none`;
                    }
                    
                    document.getElementById(`form-btn-cancel`).action = document.getElementById(`row-order-${order_id}`).getAttribute('data-status-target') + `/cancel`;
                   
                    //Branch selection for shipping
                    let formBranches = document.getElementById(`form-branches`),
                        branches = document.getElementsByName(`branch-id`);
                    if (order_delivery_method === `ship`) {
                        formBranches.style.display = `block`;
                        for (let i = 0, ii = branches.length; i < ii; i++) branches[i].required = true;
                        branches[order_branch_id - 1].checked = true;
                    }
                    else {
                        formBranches.style.display = `none`;
                        for (let i = 0, ii = branches.length; i < ii; i++) branches[i].required = false;
                    }
                    
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
                            ${order_branch_name ? `<tr>
                                <td class = "bold">Branch:</td>
                                <td>${order_branch_name}</td>
                            </tr>`: ``}
                        </tbody>
                    `;
                };
            </script>
            
        </div>
    </div>

@endsection