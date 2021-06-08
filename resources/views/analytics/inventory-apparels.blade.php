@extends('layouts.dashboard')

@section('link-2')
    active
@endsection

@section('title')
    Inventory - Apparels
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content">
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col">
                    <h3>Apparels - Shirts</h3>
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
                            @foreach ($apparels as $apparel)
                                @if ($apparel->type === "shirt")
                                    <tr>
                                        <td>{{ $apparel->name }}</td>
                                        <td>PHP {{ $apparel->price }}</td>
                                        <td class = "text-center @if ($apparel->stock_xs >= 40) green @elseif ($apparel->stock_xs >= 20) black @elseif ($apparel->stock_xs >= 10) orange @else red @endif">{{ $apparel->stock_xs }}</td>
                                        <td class = "text-center @if ($apparel->stock_s >= 40) green @elseif ($apparel->stock_s >= 20) black @elseif ($apparel->stock_s >= 10) orange @else red @endif">{{ $apparel->stock_s }}</td>
                                        <td class = "text-center @if ($apparel->stock_m >= 40) green @elseif ($apparel->stock_m >= 20) black @elseif ($apparel->stock_m >= 10) orange @else red @endif">{{ $apparel->stock_m }}</td>
                                        <td class = "text-center @if ($apparel->stock_l >= 40) green @elseif ($apparel->stock_l >= 20) black @elseif ($apparel->stock_l >= 10) orange @else red @endif">{{ $apparel->stock_l }}</td>
                                        <td class = "text-center @if ($apparel->stock_xl >= 40) green @elseif ($apparel->stock_xl >= 20) black @elseif ($apparel->stock_xl >= 10) orange @else red @endif">{{ $apparel->stock_xl }}</td>
                                        <td class = "text-center">{{ $apparel->stock_xs + $apparel->stock_s + $apparel->stock_m + $apparel->stock_l + $apparel->stock_xl }}</td>
                                        <td class = "text-center">PHP {{ number_format(($apparel->stock_xs + $apparel->stock_s + $apparel->stock_m + $apparel->stock_l + $apparel->stock_xl) * $apparel->price, 2) }}</td>
                                    </tr>
                                @endif
                            @endforeach
                          </tbody>
                    </table>
                    <h3>Apparels - Accessories</h3>
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
                            @foreach ($apparels as $apparel)
                                @if ($apparel->type === "accessory")
                                    <tr>
                                        <td>{{ $apparel->name }}</td>
                                        <td>PHP {{ $apparel->price }}</td>
                                        <td class = "text-center @if ($apparel->stock_universal >= 40) green @elseif ($apparel->stock_universal >= 20) black @elseif ($apparel->stock_universal >= 10) orange @else red @endif">{{ $apparel->stock_universal }}</td>
                                        <td class = "text-center">PHP {{ number_format($apparel->stock_universal * $apparel->price, 2) }}</td>
                                    </tr>
                                @endif
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection