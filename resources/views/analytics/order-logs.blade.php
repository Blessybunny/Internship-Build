@extends('layouts.dashboard')

@section('link-4')
    active
@endsection

@section('title')
    Inventory - Order Logs
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col">
                    <div id = "accordion" class = "card-collapse">
                        <div class = "card card-plain">
                            <!-- Table - Ship -->
                            <div class = "card-header" id = "headingOne">
                                <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
                                    Ship Orders
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </div>
                            <div id = "collapseOne" class = "collapse show">
                                <div class = "card-body">
                                    <table class = "table table-shopping">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th class = "text-center">Payment Method</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th class = "text-center">Postal Code</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>Product</th>
                                                <th class = "text-center">Quantity</th>
                                                <th class = "text-center">Shirt Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                @if ($order->delivery_method === "ship")
                                                    @php $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first() @endphp
                                                    <tr>
                                                        <td>{{ $order->email }}</td>
                                                        <td class = "text-center">{{ $order->payment_method }}</td>
                                                        <td>{{ $order->name }}</td>
                                                        <td>{{ $order->address }}</td>
                                                        <td class = "text-center">{{ $order->postal_code }}</td>
                                                        <td>{{ $order->city }}</td>
                                                        <td>{{ $order->country }}</td>
                                                        <td>{{ $apparel->name }}</td>
                                                        <td class = "text-center">{{ $order->apparel_quantity }}</td>
                                                        <td class = "text-center">{{ $order->apparel_size }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Table - Pick-up -->
                            <div class = "card-header" id = "headingOne">
                                <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseTwo">
                                    Pick-up Orders
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </div>
                            <div id = "collapseTwo" class = "collapse show">
                                <div class = "card-body">
                                    <table class = "table table-shopping">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Pick-up Location</th>
                                                <th>Product</th>
                                                <th class = "text-center">Quantity</th>
                                                <th class = "text-center">Shirt Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                @if ($order->delivery_method === "pick-up")
                                                    @php $apparel = DB::table('apparels')->where('id', $order->apparel_id)->first() @endphp
                                                    <tr>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->pickup_location }}</td>
                                                        <td>{{ $apparel->name }}</td>
                                                        <td class = "text-center">{{ $order->apparel_quantity }}</td>
                                                        <td class = "text-center">{{ $order->apparel_size }}</td>
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
    </div>

@endsection