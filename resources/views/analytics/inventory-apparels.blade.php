@extends('layouts.dashboard')

@section('link-2')
    active
@endsection

@section('title')
    Inventory - Apparels
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- Table - Shirts -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Shirts</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Apparel Name</th>
                                            <th>Price</th>
                                            <th class = "text-center">Quantity (XS)</th>
                                            <th class = "text-center">Quantity (SM)</th>
                                            <th class = "text-center">Quantity (MD)</th>
                                            <th class = "text-center">Quantity (LG)</th>
                                            <th class = "text-center">Quantity (XL)</th>
                                            <th class = "text-center">Total Quantity</th>
                                            <th class = "text-center">Total Price</th>
                                            <th class = "text-center">Total Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apparels as $apparel)
                                            @if ($apparel->type === "shirt")
                                                <tr onclick = "popModal({{ $apparel->id }}, '{{ $apparel->name }}', {{ $apparel->price }}, '{{ $apparel->type }}', {{ $apparel->stock_universal }}, [{{ $apparel->stock_xs }}, {{ $apparel->stock_sm }}, {{ $apparel->stock_md }}, {{ $apparel->stock_lg }}, {{ $apparel->stock_xl }}])" data-toggle = "modal" data-target = "#apparelModal">
                                                    <td id = "apparel-image-{{ $apparel->id }}" data-image = "{{ asset($apparel->img_url) }}">{{ $apparel->name }}</td>
                                                    <td>PHP {{ $apparel->price }}</td>
                                                    <td class = "text-center @if ($apparel->stock_xs >= $minmax['opt']) green @elseif ($apparel->stock_xs >= $minmax['mid'] and $apparel->stock_xs <= $minmax['opt']) black @elseif ($apparel->stock_xs <= $minmax['mid'] and $apparel->stock_xs >= $minmax['low']) orange @elseif ($apparel->stock_xs <= $minmax['low']) red @endif">{{ $apparel->stock_xs }}</td>
                                                    <td class = "text-center @if ($apparel->stock_sm >= $minmax['opt']) green @elseif ($apparel->stock_sm >= $minmax['mid'] and $apparel->stock_sm <= $minmax['opt']) black @elseif ($apparel->stock_sm <= $minmax['mid'] and $apparel->stock_sm >= $minmax['low']) orange @elseif ($apparel->stock_sm <= $minmax['low']) red @endif">{{ $apparel->stock_sm }}</td>
                                                    <td class = "text-center @if ($apparel->stock_md >= $minmax['opt']) green @elseif ($apparel->stock_md >= $minmax['mid'] and $apparel->stock_md <= $minmax['opt']) black @elseif ($apparel->stock_md <= $minmax['mid'] and $apparel->stock_md >= $minmax['low']) orange @elseif ($apparel->stock_md <= $minmax['low']) red @endif">{{ $apparel->stock_md }}</td>
                                                    <td class = "text-center @if ($apparel->stock_lg >= $minmax['opt']) green @elseif ($apparel->stock_lg >= $minmax['mid'] and $apparel->stock_lg <= $minmax['opt']) black @elseif ($apparel->stock_lg <= $minmax['mid'] and $apparel->stock_lg >= $minmax['low']) orange @elseif ($apparel->stock_lg <= $minmax['low']) red @endif">{{ $apparel->stock_lg }}</td>
                                                    <td class = "text-center @if ($apparel->stock_xl >= $minmax['opt']) green @elseif ($apparel->stock_xl >= $minmax['mid'] and $apparel->stock_xl <= $minmax['opt']) black @elseif ($apparel->stock_xl <= $minmax['mid'] and $apparel->stock_xl >= $minmax['low']) orange @elseif ($apparel->stock_xl <= $minmax['low']) red @endif">{{ $apparel->stock_xl }}</td>
                                                    <td class = "text-center">{{ $apparel->stock_xs + $apparel->stock_sm + $apparel->stock_md + $apparel->stock_lg + $apparel->stock_xl }}</td>
                                                    <td class = "text-center">PHP {{ number_format(($apparel->stock_xs + $apparel->stock_sm + $apparel->stock_md + $apparel->stock_lg + $apparel->stock_xl) * $apparel->price, 2) }}</td>
                                                    <td class = "text-center">{{ $apparel->sold }}</td>
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
            
            <!-- Table - Accessories -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Accessories</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Apparel Name</th>
                                            <th>Price</th>
                                            <th class = "text-center">Total Quantity</th>
                                            <th class = "text-center">Total Price</th>
                                            <th class = "text-center">Total Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($apparels as $apparel)
                                            @if ($apparel->type === "accessory")
                                                <tr onclick = "popModal({{ $apparel->id }}, '{{ $apparel->name }}', {{ $apparel->price }}, '{{ $apparel->type }}', {{ $apparel->stock_universal }}, [{{ $apparel->stock_xs }}, {{ $apparel->stock_s }}, {{ $apparel->stock_m }}, {{ $apparel->stock_l }}, {{ $apparel->stock_xl }}])" data-toggle = "modal" data-target = "#apparelModal">
                                                    <td id = "apparel-image-{{ $apparel->id }}" data-image = "{{ asset($apparel->img_url) }}">{{ $apparel->name }}</td>
                                                    <td>PHP {{ $apparel->price }}</td>
                                                    <td class = "text-center @if ($apparel->stock_universal >= $minmax['opt']) green @elseif ($apparel->stock_universal >= $minmax['mid'] and $apparel->stock_universal <= $minmax['opt']) black @elseif ($apparel->stock_universal >= $minmax['mid'] and $apparel->stock_universal >= $minmax['low']) orange @elseif ($apparel->stock_universal <= $minmax['low']) red @endif">{{ $apparel->stock_universal }}</td>
                                                    <td class = "text-center">PHP {{ number_format($apparel->stock_universal * $apparel->price, 2) }}</td>
                                                    <td class = "text-center">{{ $apparel->sold }}</td>
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
            <div class = "modal fade" id = "apparelModal">
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
                function popModal (id, name, price, type, stockUniversal, stocks) {
                    //Print apparel name and image
                    document.getElementById(`apparel-name`).innerHTML = `${name}`;
                    document.getElementById(`modal-apparel-image`).src = document.getElementById(`apparel-image-${id}`).getAttribute(`data-image`);

                    //Variables
                    let info = document.getElementById(`apparel-info`),
                        conflicts = document.getElementById(`modal-conflicts`);
                    conflicts.innerHTML = ``;

                    //Shirts
                    if (type === `shirt`) {
                        info.innerHTML = `
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>PHP ${price.toFixed(2)}</td>
                                </tr>
                                <tr>
                                    <td>Qty. (XS)</td>
                                    <td>${stocks[0]}</td>
                                </tr>
                                <tr>
                                    <td>Qty. (SM)</td>
                                    <td>${stocks[1]}</td>
                                </tr>
                                <tr>
                                    <td>Qty. (MD)</td>
                                    <td>${stocks[2]}</td>
                                </tr>
                                <tr>
                                    <td>Qty. (LG)</td>
                                    <td>${stocks[3]}</td>
                                </tr>
                                <tr>
                                    <td>Qty. (XL)</td>
                                    <td>${stocks[4]}</td>
                                </tr>
                                <tr>
                                    <td>Total Qty.</td>
                                    <td>${stocks[0] + stocks[1] + stocks[2] + stocks[3] + stocks[4]}</td>
                                </tr>
                                <tr>
                                    <td>Total Price</td>
                                    <td>PHP ${((stocks[0] + stocks[1] + stocks[2] + stocks[3] + stocks[4]) * price).toFixed(2)}</td>
                                </tr>
                            </tbody>
                        `;
                        let sizes = [`extra small`, `small`, 'medium', `large`, `extra large`];
                        for (let i = 0, ii = stocks.length; i < ii; i++) {
                            let list = document.createElement(`li`);
                            if (stocks[i] >= {{ $minmax['opt'] }}) {
                                list.innerHTML = `Stocks of ${sizes[i]} sizes are beyond maximum. Consider halting production.`;
                            }
                            else if (stocks[i] >= {{ $minmax['mid'] }} && stocks[i] <= {{ $minmax['opt'] }}) {}
                            else if (stocks[i] >= {{ $minmax['low'] }} && stocks[i] <= {{ $minmax['mid'] }}) {
                                list.className = `orange`;
                                list.innerHTML = `Stocks of ${sizes[i]} sizes are low.`;
                            }
                            else if (stocks[i] <= {{ $minmax['low'] }}) {
                                list.className = `red`;
                                list.innerHTML = `Stocks of ${sizes[i]} sizes are critically low.`;
                            }
                            conflicts.appendChild(list);
                        }
                    }

                    //Accessories
                    else if (type === `accessory`) {
                        info.innerHTML = `
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>PHP ${price.toFixed(2)}</td>
                                </tr>
                                <tr>
                                    <td>Total Qty.</td>
                                    <td>${stockUniversal}</td>
                                </tr>
                                <tr>
                                    <td>Total Price</td>
                                    <td>PHP ${(stockUniversal * price).toFixed(2)}</td>
                                </tr>
                            </tbody>
                        `;
                        let list = document.createElement(`li`);
                        if (stockUniversal >= {{ $minmax['opt'] }}) {
                            list.innerHTML = `Stocks are beyond maximum. Consider halting production.`;
                        }
                        else if (stockUniversal >= {{ $minmax['mid'] }} && stocks[i] <= {{ $minmax['opt'] }}) {}
                        else if (stockUniversal >= {{ $minmax['low'] }} && stocks[i] <= {{ $minmax['mid'] }}) {
                            list.className = `orange`;
                            list.innerHTML = `Stocks are low.`;
                        }
                        else if (stockUniversal <= {{ $minmax['low'] }}) {
                            list.className = `red`;
                            list.innerHTML = `Stocks are critically low.`;
                        }
                        conflicts.appendChild(list);
                    }
                }
            </script>
                    
        </div>
    </div>

@endsection