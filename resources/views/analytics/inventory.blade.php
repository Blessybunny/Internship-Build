@extends('layouts.dashboard')

@section('link-2')
    active
@endsection

@section('title')
    Inventory - Apparels &amp; Materials
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">
            
            <!-- Info -->
            <div class = "row">
                <div class = "col justified">
                    <button class = "btn btn-info" data-toggle = "modal" data-target = "#modalInfo">
                        <i class = "material-icons">info</i>
                        Info
                    </button>
                </div>
            </div>
            
            <!-- Branch selection -->
            <div class = "row justified">
                <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 id = "branch-header" class = "card-title"></h4>
                        </div>
                        <div class = "card-body">
                            <div class = "dropdown">
                                <button class = "btn btn-primary dropdown-toggle" data-toggle = "dropdown">
                                    <i class = "material-icons">store</i>
                                    Select Branch
                                </button>
                                <div class = "dropdown-menu">
                                    @foreach ($branches as $branch)
                                        <a id = "branch-{{ $branch->id }}-link" class = "dropdown-item branch-item" href = "#" onclick = "selectBranch({{ $branch->id }}, '{{ $branch->name }}')">Branch {{ $branch->id }}: {{ $branch->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <hr/>
                            <h6 id = "branch-id"></h6>
                            <p id = "branch-name"></p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Branch containers -->
            @foreach ($branches as $branch)
                <div class = "branch-container hidden" id = "branch-{{ $branch->id }}-container">
                    
                    <!-- Table: Apparels -->
                    <div class = "row">
                        <div class = "col">
                            <div class = "card">
                                <div class = "card-header card-header-primary">
                                    <h4 class = "card-title apparel-header"></h4>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($branch_apparels as $branch_apparel)
                                                    @if ($branch_apparel->branch_id === $branch->id)
                                                        @foreach ($apparels as $apparel)
                                                            @if ($branch_apparel->apparel_id === $apparel->id)
                                                                @if ($apparel->type === "shirt")
                                                                    <tr onclick = "modalApparel(
                                                                                   '{{ $apparel->id }}',
                                                                                   '{{ $apparel->name }}',
                                                                                   '{{ $apparel->type }}',
                                                                                   {{ $apparel->price }},
                                                                                   '{{ asset($apparel->img_url) }}',
                                                                                   {{ $branch_apparel->quantity_universal }},
                                                                                   [{{ $branch_apparel->quantity_xs }}, {{ $branch_apparel->quantity_sm }}, {{ $branch_apparel->quantity_md }}, {{ $branch_apparel->quantity_lg }}, {{ $branch_apparel->quantity_xl }}],
                                                                                   '{{ $branch_apparel->quantity_sold }}')"
                                                                            data-toggle = "modal"
                                                                            data-target = "#modalApparel"
                                                                            class = "apparel-{{ $branch->id }}">
                                                                        <td>{{ $apparel->name }}</td>
                                                                        <td>PHP {{ $apparel->price }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_xs >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_xs >= $minmax_apparels['mid'] and $branch_apparel->quantity_xs <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_xs <= $minmax_apparels['mid'] and $branch_apparel->quantity_xs >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_xs <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_xs }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_sm >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_sm >= $minmax_apparels['mid'] and $branch_apparel->quantity_sm <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_sm <= $minmax_apparels['mid'] and $branch_apparel->quantity_sm >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_sm <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_sm }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_md >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_md >= $minmax_apparels['mid'] and $branch_apparel->quantity_md <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_md <= $minmax_apparels['mid'] and $branch_apparel->quantity_md >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_md <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_md }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_lg >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_lg >= $minmax_apparels['mid'] and $branch_apparel->quantity_lg <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_lg <= $minmax_apparels['mid'] and $branch_apparel->quantity_lg >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_lg <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_lg }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_xl >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_xl >= $minmax_apparels['mid'] and $branch_apparel->quantity_xl <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_xl <= $minmax_apparels['mid'] and $branch_apparel->quantity_xl >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_xl <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_xl }}</td>
                                                                        <td class = "text-center">{{ $branch_apparel->quantity_xs + $branch_apparel->quantity_sm + $branch_apparel->quantity_md + $branch_apparel->quantity_lg + $branch_apparel->quantity_xl }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "row">
                        
                        <!-- Table: Accessories -->
                        <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class = "card">
                                <div class = "card-header card-header-primary">
                                    <h4 class = "card-title accessory-header"></h4>
                                </div>
                                <div class = "card-body">
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Apparel Name</th>
                                                    <th>Price</th>
                                                    <th class = "text-center">Total Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($branch_apparels as $branch_apparel)
                                                    @if ($branch_apparel->branch_id === $branch->id)
                                                        @foreach ($apparels as $apparel)
                                                            @if ($branch_apparel->apparel_id === $apparel->id)
                                                                @if ($apparel->type === "accessory")
                                                                    <tr onclick = "modalApparel(
                                                                                   '{{ $apparel->id }}',
                                                                                   '{{ $apparel->name }}',
                                                                                   '{{ $apparel->type }}',
                                                                                   {{ $apparel->price }},
                                                                                   '{{ asset($apparel->img_url) }}',
                                                                                   {{ $branch_apparel->quantity_universal }},
                                                                                   [{{ $branch_apparel->quantity_xs }}, {{ $branch_apparel->quantity_sm }}, {{ $branch_apparel->quantity_md }}, {{ $branch_apparel->quantity_lg }}, {{ $branch_apparel->quantity_xl }}],
                                                                                   '{{ $branch_apparel->quantity_sold }}')"
                                                                            data-toggle = "modal"
                                                                            data-target = "#modalApparel"
                                                                            class = "accessory-{{ $branch->id }}">
                                                                        <td>{{ $apparel->name }}</td>
                                                                        <td>PHP {{ $apparel->price }}</td>
                                                                        <td class = "text-center @if ($branch_apparel->quantity_universal >= $minmax_apparels['opt']) green @elseif ($branch_apparel->quantity_universal >= $minmax_apparels['mid'] and $branch_apparel->quantity_universal <= $minmax_apparels['opt']) black @elseif ($branch_apparel->quantity_universal <= $minmax_apparels['mid'] and $branch_apparel->quantity_universal >= $minmax_apparels['low']) orange @elseif ($branch_apparel->quantity_universal <= $minmax_apparels['low']) red @endif">{{ $branch_apparel->quantity_universal }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Table: Materials -->
                        <div class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class = "card">
                                <div class = "card-header card-header-primary">
                                    <h4 class = "card-title material-header"></h4>
                                </div>
                                <div class = "card-body">
                                    <div class = "table-responsive">
                                        <table class = "table table-shopping">
                                            <thead class = "text-primary">
                                                <tr>
                                                    <th>Material Name</th>
                                                    <th class = "text-center">Total Quantity</th>
                                                    <th class = "text-center">Unit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($branch_materials as $branch_material)
                                                    @if ($branch_material->branch_id === $branch->id)
                                                        @foreach ($materials as $material)
                                                            @if ($branch_material->material_id === $material->id)
                                                                <tr onclick = "modalMaterial(
                                                                               '{{ $material->name }}',
                                                                               '{{ $material->unit }}',
                                                                               {{ $branch_material->quantity }})"
                                                                        data-toggle = "modal"
                                                                        data-target = "#modalMaterial"
                                                                        class = "material-{{ $branch->id }}">
                                                                    <td>{{ $material->name }}</td>
                                                                    <td class = "text-center @if ($branch_material->quantity >= $minmax_materials['opt']) green @elseif ($branch_material->quantity >= $minmax_materials['mid'] and $branch_material->quantity <= $minmax_materials['opt']) black @elseif ($branch_material->quantity <= $minmax_materials['mid'] and $branch_material->quantity >= $minmax_materials['low']) orange @elseif ($branch_material->quantity <= $minmax_materials['low']) red @endif">{{ $branch_material->quantity }}</td>
                                                                    <td class = "capitalize text-center">{{ $material->unit }}</td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
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
            @endforeach
            
            <!-- Modal: Apparel and accessory -->
            <div class = "modal fade" id = "modalApparel">
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "modal-apparel-name" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-12">
                                    <img id = "modal-apparel-image"/>
                                    <p>Product details:</p>
                                    <table id = "modal-apparel-info"></table>
                                    <br/>
                                    <p>Conflicts: </p>
                                    <ul id = "modal-apparel-conflicts"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: Material -->
            <div class = "modal fade" id = "modalMaterial">
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "modal-material-id" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-12">
                                    <p id = "modal-material-details"></p>
                                    <p>Conflicts: </p>
                                    <ul id = "modal-material-conflicts"></ul>
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
                                    <h6>Branch:</h6>
                                    <p>Select a branch to view each of their tables.</p>
                                    <h6>Apparel / Accessory Quantity Range Indicators:</h6>
                                    <p>
                                        0-{{ $minmax_apparels['low'] }}: Critical low supply (marked red).<br/>
                                        {{ $minmax_apparels['low'] }}-{{ $minmax_apparels['mid'] }}: Low supply (marked yellow).<br/>
                                        {{ $minmax_apparels['mid'] }}-{{ $minmax_apparels['opt'] }}: Optimal.<br/>
                                        {{ $minmax_apparels['opt'] }}+ : Oversupply (marked green).
                                    </p>
                                    <h6>Material Quantity Range Indicators:</h6>
                                    <p>
                                        0-{{ $minmax_materials['low'] }}: Critical low supply (marked red).<br/>
                                        {{ $minmax_materials['low'] }}-{{ $minmax_materials['mid'] }}: Low supply (marked yellow).<br/>
                                        {{ $minmax_materials['mid'] }}-{{ $minmax_materials['opt'] }}: Optimal.<br/>
                                        {{ $minmax_materials['opt'] }}+ : Oversupply (marked green).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scripts -->
            <script>
                //Onload functions
                window.onload = () => {
                    //Load default branch
                    document.getElementById(`branch-1-link`).onclick();
                    
                    //Branch count
                    document.getElementById(`branch-header`).innerHTML = `Branch Selection | ${document.getElementsByClassName(`branch-item`).length} Branches`;
                
                    //Apparel count
                    let headerApparel = document.getElementsByClassName(`apparel-header`);
                    for (let i = 0, ii = headerApparel.length; i < ii; i++) headerApparel[i].innerHTML = `Apparels | ${document.getElementsByClassName(`apparel-${i + 1}`).length} Items`;
                
                    //Accessory count
                    let headerAccessory = document.getElementsByClassName(`accessory-header`);
                    for (let i = 0, ii = headerAccessory.length; i < ii; i++) headerAccessory[i].innerHTML = `Accessories | ${document.getElementsByClassName(`accessory-${i + 1}`).length} Items`;
                
                    //Material count
                    let headerMaterial = document.getElementsByClassName(`material-header`);
                    for (let i = 0, ii = headerMaterial.length; i < ii; i++) headerMaterial[i].innerHTML = `Materials | ${document.getElementsByClassName(`material-${i + 1}`).length} Items`;
                };
                
                //Branch selection
                const selectBranch = (id, name) => {
                    //Branch id and name
                    document.getElementById(`branch-id`).innerHTML = `Branch ${id}`;
                    document.getElementById(`branch-name`).innerHTML = `${name}`;
                    
                    //Show branch container
                    let containers = document.getElementsByClassName(`branch-container`);
                    for (let i = 0, ii = containers.length; i < ii; i++) containers[i].className = `branch-container hidden`;
                    document.getElementById(`branch-${id}-container`).className = `branch-container visible`;
                };
                
                //Modal: Apparel and accessory
                const modalApparel = (id, name, type, price, imgUrl, stockUniversal, stocks, sold) => {
                    //Print apparel name and image
                    document.getElementById(`modal-apparel-name`).innerHTML = `${name}`;
                    document.getElementById(`modal-apparel-image`).src = imgUrl;

                    //Variables
                    let info = document.getElementById(`modal-apparel-info`),
                        conflicts = document.getElementById(`modal-apparel-conflicts`);
                    conflicts.innerHTML = ``;

                    //Shirt details
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
                                <tr>
                                    <td>Total Sold</td>
                                    <td>${sold}</td>
                                </tr>
                            </tbody>
                        `;
                        let sizes = [`extra small`, `small`, 'medium', `large`, `extra large`];
                        for (let i = 0, ii = stocks.length; i < ii; i++) {
                            let list = document.createElement(`li`);
                            if (stocks[i] >= {{ $minmax_apparels['opt'] }}) list.innerHTML = `Stocks of ${sizes[i]} sizes are beyond maximum. Consider halting production.`;
                            else if (stocks[i] >= {{ $minmax_apparels['mid'] }} && stocks[i] <= {{ $minmax_apparels['opt'] }}) {}
                            else if (stocks[i] >= {{ $minmax_apparels['low'] }} && stocks[i] <= {{ $minmax_apparels['mid'] }}) {
                                list.className = `orange`;
                                list.innerHTML = `Stocks of ${sizes[i]} sizes are low.`;
                            }
                            else if (stocks[i] <= {{ $minmax_apparels['low'] }}) {
                                list.className = `red`;
                                list.innerHTML = `Stocks of ${sizes[i]} sizes are critically low.`;
                            }
                            conflicts.appendChild(list);
                        }
                    }

                    //Accessory details
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
                                <tr>
                                    <td>Total Sold</td>
                                    <td>${sold}</td>
                                </tr>
                            </tbody>
                        `;
                        let list = document.createElement(`li`);
                        if (stockUniversal >= {{ $minmax_apparels['opt'] }}) list.innerHTML = `Stocks are beyond maximum. Consider halting production.`;
                        else if (stockUniversal >= {{ $minmax_apparels['mid'] }} && stockUniversal <= {{ $minmax_apparels['opt'] }}) {}
                        else if (stockUniversal >= {{ $minmax_apparels['low'] }} && stockUniversal <= {{ $minmax_apparels['mid'] }}) {
                            list.className = `orange`;
                            list.innerHTML = `Stocks are low.`;
                        }
                        else if (stockUniversal <= {{ $minmax_apparels['low'] }}) {
                            list.className = `red`;
                            list.innerHTML = `Stocks are critically low.`;
                        }
                        conflicts.appendChild(list);
                    }
                };
                
                //Modal: Material
                const modalMaterial = (name, unit, quantity) => {
                    //Print material name and stock
                    document.getElementById(`modal-material-id`).innerHTML = `${name}`;
                    document.getElementById(`modal-material-details`).innerHTML = `Quantity: ${quantity} ${unit}(s)`;

                    //Material details
                    let list = document.createElement(`li`);
                    if (quantity >= {{ $minmax_materials['opt'] }}) list.innerHTML = `Stocks are beyond maximum. Consider halting supply deliveries.`;
                    else if (quantity >= {{ $minmax_materials['mid'] }} && quantity <= {{ $minmax_materials['opt'] }}) {}
                    else if (quantity >= {{ $minmax_materials['low'] }} && quantity <= {{ $minmax_materials['mid'] }}) {
                        list.className = `orange`;
                        list.innerHTML = `Stocks are low.`;
                    }
                    else if (quantity <= {{ $minmax_materials['low'] }}) {
                        list.className = `red`;
                        list.innerHTML = `Stocks are critically low.`;
                    }
                    document.getElementById(`modal-material-conflicts`).appendChild(list);
                };
            </script>
            
        </div>
    </div>

@endsection