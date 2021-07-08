@extends('layouts.dashboard')

@section('link-4')
    active
@endsection

@section('title')
    Order Log - History
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- Table: Order history -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "table-history-header" class = "card-title"></h4>
                            <p class = "card-category">Includes orders successfully delivered or cancelled.</p>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping table-record">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Last Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status === 'delivered' or $order->status === 'cancelled')
                                                <tr onclick = "popModal(
                                                               '{{ $order->id }}',
                                                               '{{ $order->created_at->format('F j, Y') }} at {{ $order->created_at->format('h:i A') }}',
                                                               '{{ $order->updated_at->format('F j, Y') }} at {{ $order->updated_at->format('h:i A') }}',
                                                               '{{ $order->status }}',
                                                               
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
                                                               
                                                               '{{ $branches->find($order->branch_id)->name ?? null }}')"
                                                        data-toggle = "modal"
                                                        data-target = "#modalOrder"
                                                        class = "order-history">
                                                    <td>{{ $order->id }}</td>
                                                    <td class = "capitalize">{{ $order->status }}</td>
                                                    <td>{{ $order->created_at->format('F j, Y') }} at {{ $order->created_at->format('h:i A') }}</td>
                                                    <td>{{ $order->updated_at->format('F j, Y') }} at {{ $order->updated_at->format('h:i A') }}</td>
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
                //Order count
                window.onload = () => document.getElementById(`table-history-header`).innerHTML = `Order History | ${document.getElementsByClassName(`order-history`).length} Records`;
                
                //Modals
                let popModal = (order_id, order_created_at, order_updated_at, order_status, apparel_name, apparel_quantity, apparel_size, apparel_price, order_delivery_method, order_payment_method, order_email, order_name, order_address, order_postal_code, order_city, order_region, order_country, order_branch) => {
                    //Order details
                    document.getElementById(`order-id`).innerHTML = `Order #${order_id}`;
                    document.getElementById(`order-info`).innerHTML = `
                        <tbody>
                            <tr>
                                <td class = "bold">Order Date:</td>
                                <td>${order_created_at}</td>
                            </tr>
                            <tr>
                                <td class = "bold">Last Status:</td>
                                <td>${order_updated_at}</td>
                            </tr>
                            <tr>
                                <td class = "bold">Status:</td>
                                <td class = "capitalize">${order_status}</td>
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