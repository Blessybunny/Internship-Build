@extends('layouts.dashboard')

@section('link-4')
    active
@endsection

@section('title')
    Inventory - Order Logs
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- Table - Pending orders -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Pending Orders</h4>
                            <p class = "card-category">Includes orders delayed and not en route for delivery.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === "pending")
                                                @php $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first() @endphp
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->email }}',
                                                               '{{ $order->delivery_method }}',
                                                               '{{ $order->payment_method }}',
                                                               '{{ $order->name }}',
                                                               '{{ $order->address }}',
                                                               '{{ $order->postal_code }}',
                                                               '{{ $order->city }}',
                                                               '{{ $order->region }}',
                                                               '{{ $order->country }}',
                                                               '{{ $order->pickup_location }}',
                                                               '{{ $apparel->name }}',
                                                               '{{ $apparel->price }}',
                                                               '{{ $order->apparel_quantity }}',
                                                               '{{ $order->apparel_size }}',
                                                               '{{ asset($apparel->img_url) }}',
                                                               '{{ $order->status }}',
                                                               '{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#orderModal"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}">
                                                    <td># {{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}</td>
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
            
            <!-- Table - Outgoing orders -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Outgoing Orders</h4>
                            <p class = "card-category">Includes orders currently en route for delivery.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === "outgoing")
                                                @php $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first() @endphp
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->email }}',
                                                               '{{ $order->delivery_method }}',
                                                               '{{ $order->payment_method }}',
                                                               '{{ $order->name }}',
                                                               '{{ $order->address }}',
                                                               '{{ $order->postal_code }}',
                                                               '{{ $order->city }}',
                                                               '{{ $order->region }}',
                                                               '{{ $order->country }}',
                                                               '{{ $order->pickup_location }}',
                                                               '{{ $apparel->name }}',
                                                               '{{ $apparel->price }}',
                                                               '{{ $order->apparel_quantity }}',
                                                               '{{ $order->apparel_size }}',
                                                               '{{ asset($apparel->img_url) }}',
                                                               '{{ $order->status }}',
                                                               '{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#orderModal"
                                                        data-status-target = "{{ url('/dashboard/order-logs', ['id' => $order->id]) }}"
                                                        id = "row-order-{{ $order->id }}">
                                                    <td># {{ $order->id }}</td>
                                                    <td>{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}</td>
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
                                        <form id = "form-btn-delete" method = "POST">
                                            @csrf
                                            <button onclick = "return confirm('Are you sure to delete this order?')" type = "submit" class = "btn btn-sm btn-danger" title = "Select this option at your own risk.">
                                                <i class = "material-icons">close</i> Delete Order
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
                function popModal (id, email, deliveryMethod, paymentMethod, name, address, postalCode, city, region, country, pickupLocation, apparelName, apparelPrice, apparelQuantity, apparelSize, imgUrl, status, dateOrdered) {
                    //Print apparel name and image
                    document.getElementById(`order-id`).innerHTML = `Order ID #${id}`;
                    document.getElementById(`modal-apparel-image`).src = imgUrl;

                    //Buttons
                    document.getElementById(`form-btn-pending`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/pending`;
                    document.getElementById(`form-btn-outgoing`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/outgoing`;
                    document.getElementById(`form-btn-delivered`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/delivered`;
                    document.getElementById(`form-btn-delete`).action = document.getElementById(`row-order-${id}`).getAttribute('data-status-target') + `/delete`;
                    
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
                            ${pickupLocation ? `<tr>
                                <td>Pick-up Location</td>
                                <td>${pickupLocation}</td>
                            </tr>`: ``}
                        </tbody>
                    `;
                }
            </script>
            
        </div>
    </div>

@endsection