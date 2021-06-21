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
            
            <!-- Table -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Orders</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Email</th>
                                            <th class = "text-center">Delivery Method</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @php $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first() @endphp
                                            <tr onclick = "popModal(
                                                    '{{ $order->email }}',
                                                    '{{ $order->delivery_method }}',
                                                    '{{ $order->payment_method }}',
                                                    '{{ $order->name }}',
                                                    '{{ $order->address }}',
                                                    '{{ $order->postal_code }}'
                                                )" data-toggle = "modal" data-target = "#orderModal">
                                                <td>{{ $order->email }}</td>
                                                <td class = "text-center">{{ $order->delivery_method }}</td>
                                                <td>{{ $apparel->name }}</td>
                                                <td>{{ $order->created_at->format('l jS \\of F Y h:i:s A') }}</td>
                                            </tr>
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
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "apparel-name" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-12">
                                    <img id = "modal-apparel-image"/>
                                    <p>Product details:</p>
                                    <table id = "apparel-info"></table>
                                    <br/>
                                    <p>Conflicts: </p>
                                    <ul id = "modal-conflicts"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scripts -->
            <script>
                function popModal (email, deliveryMethod, paymentMethod, name, address, postalCode) {
                    console.log(
                        email,
                        deliveryMethod,
                        paymentMethod,
                        name,
                        address,
                        postalCode
                    );
                }
            </script>
            
        </div>
    </div>

@endsection