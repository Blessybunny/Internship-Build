@extends('layouts.dashboard')

@section('link-4')
    active
@endsection

@section('title')
    Inventory - Orders
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col">
                    
                    <!-- Table - Ship -->
                    <h3>Shirts</h3>
                    <hr/>
                    <table class = "table table-shopping">
                        <thead>
                            <tr>
                                <th>Apparel Name</th>
                                <th>Price</th>
                                <th class = "text-center">Quantity (XS)</th>
                                <th class = "text-center">Quantity (S)</th>
                                <th class = "text-center">Quantity (M)</th>
                                <th class = "text-center">Quantity (L)</th>
                                <th class = "text-center">Quantity (XL)</th>
                                <th class = "text-center">Total Quantity</th>
                                <th class = "text-center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                'email' => request()->input('email'),
                'delivery_method' => request()->input('delivery-method'),
                'payment_method' => request()->input('payment-method'),
                'name' => request()->input('name'),
                'address' => request()->input('address'),
                'postal_code' => request()->input('postal-code'),
                'city' => request()->input('city'),
                'region' => request()->input('region'),
                'country' => request()->input('country'),
                'apparel_id' => request()->input('apparel-id'),
                'apparel_quantity' => request()->input('apparel-quantity'),
                'apparel_size' => request()->input('apparel-size')
                        </tbody>
                    </table>
                    
                    <!-- Table - Pick-up -->
                    <h3>Accessories</h3>
                    <hr/>
                    <table class = "table table-shopping">
                        <thead>
                            <tr>
                                <th>Apparel Name</th>
                                <th>Price</th>
                                <th class = "text-center">Quantity</th>
                                <th class = "text-center">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

@endsection