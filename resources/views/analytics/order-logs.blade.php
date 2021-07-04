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
            
            <!-- Tables -->
            <div class = "row">
                
                <!-- Pending orders -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "table-pending-header" class = "card-title"></h4>
                            <p class = "card-category">Includes orders delayed or not en route for delivery.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Date</th>
                                            <th class = "text-center">Overdue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === "pending")
                                                @php
                                                    $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first();
                                                    $branch = DB::table('branches')->where('id', $order->branch_id)->first()->name ?? '';
                                                    $overdue = (strtotime($order->created_at) > strtotime('-'.$due.' days')) ? 'No' : 'Yes';
                                                @endphp
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->email }}',
                                                               '{{ $order->delivery_method }}',
                                                               '{{ $branch }}',
                                                               '{{ $order->payment_method }}',
                                                               '{{ $order->name }}',
                                                               '{{ $order->address }}',
                                                               '{{ $order->postal_code }}',
                                                               '{{ $order->city }}',
                                                               '{{ $order->region }}',
                                                               '{{ $order->country }}',
                                                               '{{ $apparel->name }}',
                                                               '{{ $apparel->price }}',
                                                               '{{ $order->apparel_quantity }}',
                                                               '{{ $order->apparel_size }}',
                                                               '{{ asset($apparel->img_url) }}',
                                                               '{{ $order->status }}',
                                                               '{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}',
                                                               '{{ $overdue }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#orderModal"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}"
                                                        class = "order-pending @if ($overdue === 'Yes') red @endif">
                                                    <td># {{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}</td>
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
                
                <!-- Outgoing orders -->
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "table-outgoing-header" class = "card-title"></h4>
                            <p class = "card-category">Includes orders currently en route for delivery.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Date</th>
                                            <th class = "text-center">Overdue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === "outgoing")
                                                @php
                                                    $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first();
                                                    $branch = DB::table('branches')->where('id', $order->branch_id)->first()->name ?? '';
                                                    $overdue = (strtotime($order->created_at) > strtotime('-'.$due.' days')) ? 'No' : 'Yes';
                                                @endphp
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->email }}',
                                                               '{{ $order->delivery_method }}',
                                                               '{{ $branch }}',
                                                               '{{ $order->payment_method }}',
                                                               '{{ $order->name }}',
                                                               '{{ $order->address }}',
                                                               '{{ $order->postal_code }}',
                                                               '{{ $order->city }}',
                                                               '{{ $order->region }}',
                                                               '{{ $order->country }}',
                                                               '{{ $apparel->name }}',
                                                               '{{ $apparel->price }}',
                                                               '{{ $order->apparel_quantity }}',
                                                               '{{ $order->apparel_size }}',
                                                               '{{ asset($apparel->img_url) }}',
                                                               '{{ $order->status }}',
                                                               '{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}',
                                                               '{{ $overdue }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#orderModal"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}"
                                                        class = "order-pending @if ($overdue === 'Yes') red @endif">
                                                    <td># {{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}</td>
                                                    <td class = "text-center">{{ $overdue }}</td>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Modal pop-up -->
            <div class = "modal fade" id = "orderModal">
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
                                <div class = "col-12">
                                    <img id = "modal-apparel-image"/>
                                    <p>Order details:</p>
                                    <table id = "order-info"></table>
                                    <hr/>
                                    <p>Order options:</p>
                                    <div style = "display: flex;">
                                        <form id = "form-btn-pending" method = "POST">
                                            @csrf
                                            <button onclick = "return confirm('Are you sure to mark this order pending?')" type = "submit" class = "btn btn-sm btn-info" title = "Select this option if there's no outgoing delivery for it.">
                                                <i class = "material-icons">pending_actions</i> Mark as "Pending"
                                            </button>
                                        </form>
                                        <form id = "form-btn-outgoing" method = "POST">
                                            @csrf
                                            <button onclick = "return confirm('Are you sure to mark this order outgoing?')" type = "submit" class = "btn btn-sm btn-info" title = "Select this option if the delivery is en route.">
                                                <i class = "material-icons">local_shipping</i> Mark as "Outgoing"
                                            </button>
                                        </form>
                                    </div>
                                    <div style = "display: flex;">
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
            </div>

            <!-- Scripts -->
            <script>
                //Order count
                window.onload = () => {
                    document.getElementById(`table-pending-header`).innerHTML = `Pending Orders | ${document.getElementsByClassName(`order-pending`).length} Orders`;
                    document.getElementById(`table-outgoing-header`).innerHTML = `Outgoing Orders | ${document.getElementsByClassName(`order-outgoing`).length} Orders`;
                };
                
                //Modals
                let popModal = (id, email, deliveryMethod, branch, paymentMethod, name, address, postalCode, city, region, country, apparelName, apparelPrice, apparelQuantity, apparelSize, imgUrl, status, dateOrdered, overdue) => {
                    //Print apparel name and image
                    document.getElementById(`order-id`).innerHTML = `Order ID #${id}`;
                    document.getElementById(`modal-apparel-image`).src = imgUrl;

                    //Buttons
                    document.getElementById(`form-btn-pending`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/pending`;
                    document.getElementById(`form-btn-outgoing`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/outgoing`;
                    document.getElementById(`form-btn-delivered`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/delivered`;
                    document.getElementById(`form-btn-cancel`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/cancel`;
                    
                    //Order details
                    document.getElementById(`order-info`).innerHTML = `
                        <tbody>
                            <tr>
                                <td>Order Date</td>
                                <td>${dateOrdered}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td class = "capitalize">${status}</td>
                            </tr>
                            <tr>
                                <td>Overdue</td>
                                <td class = "capitalize">${overdue}</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Apparel Name</td>
                                <td>${apparelName}</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>${apparelQuantity}</td>
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td>PHP ${(apparelPrice * apparelQuantity).toFixed(2)}</td>
                            </tr>
                            ${apparelSize ? `<tr>
                                <td>Size</td>
                                <td class = "uppercase">${apparelSize}</td>
                            </tr>` : ``}
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>${email}</td>
                            </tr>
                            <tr>
                                <td>Delivery Method</td>
                                <td class = "capitalize">${deliveryMethod}</td>
                            </tr>
                            ${paymentMethod ? `<tr>
                                <td>Payment Method</td>
                                <td>${paymentMethod}</td>
                            </tr>`: ``}
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            ${name ? `<tr>
                                <td>Name</td>
                                <td>${name}</td>
                            </tr>`: ``}
                            ${address ? `<tr>
                                <td>Address</td>
                                <td>${address}</td>
                            </tr>`: ``}
                            ${postalCode ? `<tr>
                                <td>Postal Code</td>
                                <td>${postalCode}</td>
                            </tr>`: ``}
                            ${city ? `<tr>
                                <td>City</td>
                                <td>${city}</td>
                            </tr>`: ``}
                            ${region ? `<tr>
                                <td>Region</td>
                                <td>${region}</td>
                            </tr>`: ``}
                            ${country ? `<tr>
                                <td>Country</td>
                                <td>${country}</td>
                            </tr>`: ``}
                            ${branch ? `<tr>
                                <td>Branch Pick-up</td>
                                <td>${branch}</td>
                            </tr>`: ``}
                        </tbody>
                    `;
                };
            </script>
            
        </div>
    </div>

@endsection