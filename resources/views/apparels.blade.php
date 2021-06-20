@extends('layouts.master')

@section('title')
    Apparels
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <div class = "main section">
        <div class = "container">
                
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>APPARELS</h3>
                    <hr/>
                </div>
            </div>
                
            <!-- Navigation tabs -->
            <div class = "tabs row">
                <div class = "col">
                    <ul class = "nav navbar-nav justify-content-center" data-tabs = "tabs">
                        <li class = "nav-item">
                            <a class = "nav-link active" href = "#igorotak-shirts" data-toggle = "tab">Igorotak Shirts</a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#ladies" data-toggle = "tab">Ladies</a>
                        </li>
                        <li class="nav-item">
                            <a class = "nav-link" href = "#accessories" data-toggle = "tab">Accessories</a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#other-prints" data-toggle = "tab">Other Prints</a>
                        </li>
                    </ul>
                </div>
            </div>
                
            <!-- Content wrapper -->
            <div class = "row tab-content">
                
                <!-- Igorotak shirts -->
                <div class = "tab-pane active" id = "igorotak-shirts">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <h3>Igorotak Shirts</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category === "igorotak")
                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if ($apparel->type === "shirt" and $apparel->stock_xs === 0 and $apparel->stock_sm === 0 and $apparel->stock_md === 0 and $apparel->stock_lg === 0 and $apparel->stock_xl === 0)
                                                <h6 class = "sold-out">Sold Out</h6>
                                            @endif
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Ladies -->
                <div class = "tab-pane" id = "ladies">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <h3>Ladies</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category === "ladies")
                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if ($apparel->type === "shirt" and $apparel->stock_xs === 0 and $apparel->stock_sm === 0 and $apparel->stock_md === 0 and $apparel->stock_lg === 0 and $apparel->stock_xl === 0)
                                                <h6 class = "sold-out">Sold Out</h6>
                                            @endif
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Accessories -->
                <div class = "tab-pane" id = "accessories">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <h3>Accessories</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category === "accessory")
                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if ($apparel->type === "accessory" and $apparel->stock_universal === 0)
                                                <h6 class = "sold-out">Sold Out</h6>
                                            @endif
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Other prints -->
                <div class = "tab-pane" id = "other-prints">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <h3>Other Prints</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category === "other")
                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if ($apparel->type === "shirt" and $apparel->stock_xs === 0 and $apparel->stock_sm === 0 and $apparel->stock_md === 0 and $apparel->stock_lg === 0 and $apparel->stock_xl === 0)
                                                <h6 class = "sold-out">Sold Out</h6>
                                            @endif
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
                
        </div>
    </div>

@endsection