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
                    
                    <!-- Table - Shirts -->
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
                            @foreach ($apparels as $apparel)
                                @if ($apparel->type === "shirt")
                                    <tr onclick = "popModal({{ $apparel->id }}, '{{ $apparel->name }}', {{ $apparel->price }}, '{{ $apparel->type }}', {{ $apparel->stock_universal }}, [{{ $apparel->stock_xs }}, {{ $apparel->stock_s }}, {{ $apparel->stock_m }}, {{ $apparel->stock_l }}, {{ $apparel->stock_xl }}])" data-toggle = "modal" data-target = "#apparelModal">
                                        <td id = "apparel-image-{{ $apparel->id }}" data-image = "{{ asset($apparel->img_url) }}">{{ $apparel->name }}</td>
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
                    
                    <!-- Table - Accessories -->
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
                            @foreach ($apparels as $apparel)
                                @if ($apparel->type === "accessory")
                                    <tr onclick = "popModal({{ $apparel->id }}, '{{ $apparel->name }}', {{ $apparel->price }}, '{{ $apparel->type }}', {{ $apparel->stock_universal }}, [{{ $apparel->stock_xs }}, {{ $apparel->stock_s }}, {{ $apparel->stock_m }}, {{ $apparel->stock_l }}, {{ $apparel->stock_xl }}])" data-toggle = "modal" data-target = "#apparelModal">
                                        <td id = "apparel-image-{{ $apparel->id }}" data-image = "{{ asset($apparel->img_url) }}">{{ $apparel->name }}</td>
                                        <td>PHP {{ $apparel->price }}</td>
                                        <td class = "text-center @if ($apparel->stock_universal >= 40) green @elseif ($apparel->stock_universal >= 20) black @elseif ($apparel->stock_universal >= 10) orange @else red @endif">{{ $apparel->stock_universal }}</td>
                                        <td class = "text-center">PHP {{ number_format($apparel->stock_universal * $apparel->price, 2) }}</td>
                                    </tr>
                                @endif
                            @endforeach
                          </tbody>
                    </table>
                    
                    <!-- Modals - Apparels -->
                    <script>
                        function popModal (id, name, price, type, stockUniversal, stocks) {
                            //Print name and price
                            document.getElementById(`modal-apparel-name`).innerHTML = `${name} | PHP ${price.toFixed(2)}`;
                            document.getElementById(`modal-apparel-image`).src = document.getElementById(`apparel-image-${id}`).getAttribute(`data-image`);
                            
                            //Variables
                            let quantity = document.getElementById(`modal-quantity`);
                            quantity.innerHTML = ``;
                            
                            //Quantities for shirts
                            if (type === `shirt`) {
                                let sizes = [`extra small`, `small`, 'medium', `large`, `extra large`];
                                for (let i = 0, ii = stocks.length; i < ii; i++) {
                                    let paragraph = document.createElement(`p`);
                                    if (stocks[i] >= 40) {
                                        paragraph.innerHTML = `This product is too high in stock of ${sizes[i]} sizes (quantity: ${stocks[i]}, maximum of 40 recommended). Consider halting production.`;
                                    }
                                    else if (stocks[i] >= 20) {}
                                    else if (stocks[i] >= 10) {
                                        paragraph.className = `orange`;
                                        paragraph.innerHTML = `This product is low in stock of ${sizes[i]} sizes (quantity: ${stocks[i]}, minimum of 20 recommended).`;
                                    }
                                    else {
                                        paragraph.className = `red`;
                                        paragraph.innerHTML = `This product is very low in stock of ${sizes[i]} sizes (quantity: ${stocks[i]}, minimum of 20 recommended).`;
                                    }
                                    quantity.appendChild(paragraph);
                                }
                            }
                            
                            //Quantities for accessories
                            else if (type === `accessory`) {
                                let paragraph = document.createElement(`p`);
                                if (stockUniversal >= 40) {
                                    paragraph.innerHTML = `This product is too high in stock (quantity: ${stockUniversal}, maximum of 40 recommended). Consider halting production.`;
                                }
                                else if (stockUniversal >= 20) {}
                                else if (stockUniversal >= 10) {
                                    paragraph.className = `orange`;
                                    paragraph.innerHTML = `This product is low in stock (quantity: ${stockUniversal}, minimum of 20 recommended).`;
                                }
                                else {
                                    paragraph.className = `red`;
                                    paragraph.innerHTML = `This product is very low in stock (quantity: ${stockUniversal}, minimum of 20 recommended).`;
                                }
                                quantity.appendChild(paragraph);
                            }
                        }
                    </script>
                    <div class = "modal fade" id = "apparelModal">
                        <div class = "modal-dialog modal-dialog-centered modal-lg">
                            <div class = "modal-content">
                                <div class = "modal-header">
                                    <h4 id = "modal-apparel-name" class = "modal-title"></h4>
                                    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                        <span aria-hidden = "true">&times;</span>
                                    </button>
                                </div>
                                <div class = "modal-body">
                                    <div class = "row">
                                        <div class = "col-xl-4">
                                            <img id = "modal-apparel-image"/>
                                        </div>
                                        <div class = "col-xl-8">
                                            <h4>Notes: </h4>
                                            <div id = "modal-quantity"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection