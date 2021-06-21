@extends('layouts.dashboard')

@section('link-3')
    active
@endsection

@section('title')
    Inventory - Production Materials
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">

            <!-- Legend - Levels -->
            <div class = "row">
                <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Production Materials - Levels</h4>
                            <p class = "card-category">Level indicators for supply control.</p>
                        </div>
                        <div class = "card-body">
                            <p>0-{{ $minmax['low'] }}: Critical low supply.</p>
                            <p>{{ $minmax['low'] }}-{{ $minmax['mid'] }}: Low supply.</p>
                            <p>{{ $minmax['mid'] }}-{{ $minmax['opt'] }}: Normal.</p>
                            <p>{{ $minmax['opt'] }}+ : Oversupply.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Table - Production materials -->
            <div class = "row">
                <div class = "col">
                    <div class = "card">
                        <div class = "card-header card-header-primary">
                            <h4 class = "card-title ">Production Materials</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "table-responsive">
                                <table class = "table table-shopping">
                                    <thead class = "text-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th class = "text-center">Quantity</th>
                                            <th class = "text-center">Unit of Measure</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($materials as $material)
                                            <tr onclick = "popModal(
                                                           '{{ $material->name }}',
                                                           '{{ $material->unit }}',
                                                           {{ $material->quantity }})"
                                                        data-toggle = "modal"
                                                        data-target = "#materialModal">
                                                <td>{{ $material->name }}</td>
                                                <td class = "text-center @if ($material->quantity >= $minmax['opt']) green @elseif ($material->quantity >= $minmax['mid'] and $material->quantity <= $minmax['opt']) black @elseif ($material->quantity <= $minmax['mid'] and $material->quantity >= $minmax['low']) orange @elseif ($material->quantity <= $minmax['low']) red @endif">{{ $material->quantity }}</td>
                                                <td class = "capitalize text-center">{{ $material->unit }}</td>
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
            <div class = "modal fade" id = "materialModal">
                <div class = "modal-dialog modal-dialog-centered">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <h4 id = "material-id" class = "modal-title"></h4>
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                <span aria-hidden = "true">&times;</span>
                            </button>
                        </div>
                        <div class = "modal-body">
                            <div class = "row">
                                <div class = "col-12">
                                    <p id = "modal-details"></p>
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
                function popModal (name, unit, quantity) {
                    //Print material name and stock
                    document.getElementById(`material-id`).innerHTML = `${name}`;
                    document.getElementById(`modal-details`).innerHTML = `Quantity: ${quantity} ${unit}(s)`;

                    //Material details
                    let list = document.createElement(`li`);
                    if (quantity >= {{ $minmax['opt'] }}) {
                        list.innerHTML = `Stocks are beyond maximum. Consider halting supply deliveries.`;
                    }
                    else if (quantity >= {{ $minmax['mid'] }} && quantity <= {{ $minmax['opt'] }}) {}
                    else if (quantity >= {{ $minmax['low'] }} && quantity <= {{ $minmax['mid'] }}) {
                        list.className = `orange`;
                        list.innerHTML = `Stocks are low.`;
                    }
                    else if (quantity <= {{ $minmax['low'] }}) {
                        list.className = `red`;
                        list.innerHTML = `Stocks are critically low.`;
                    }
                    document.getElementById(`modal-conflicts`).appendChild(list);
                }
            </script>
            
        </div>
    </div>

@endsection