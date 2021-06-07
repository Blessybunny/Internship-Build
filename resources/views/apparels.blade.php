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
                
            <!-- Navigation filter -->
            <div class = "row">
                <div class = "col filter">
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
                    <hr>
                </div>
            </div>
                
            <!-- Content wrapper -->
            <div class = "row tab-content">
                
                <!-- Igorotak shirts -->
                <div class = "tab-pane active" id = "igorotak-shirts">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <h3>Igorotak Shirts</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category_id == 1)
                                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if (
                                                    $apparel->stock_xs === 0 or
                                                    $apparel->stock_s === 0 or
                                                    $apparel->stock_m === 0 or
                                                    $apparel->stock_l === 0 or
                                                    $apparel->stock_xl === 0
                                            )
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
                                <h3>Ladies</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category_id == 2)
                                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if (
                                                    $apparel->stock_xs === 0 or
                                                    $apparel->stock_s === 0 or
                                                    $apparel->stock_m === 0 or
                                                    $apparel->stock_l === 0 or
                                                    $apparel->stock_xl === 0
                                            )
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
                                <h3>Accessories</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category_id == 3)
                                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if (
                                                    $apparel->stock_xs === 0 or
                                                    $apparel->stock_s === 0 or
                                                    $apparel->stock_m === 0 or
                                                    $apparel->stock_l === 0 or
                                                    $apparel->stock_xl === 0
                                            )
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
                                <h3>Other Prints</h3>
                                <hr/>
                            </div>
                        </div>
                        <div class = "row">
                            @foreach ($apparels as $apparel)
                                @if ($apparel->category_id == 4)
                                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                            <h4>{{ $apparel->name }}</h4>
                                            <h6>From PHP {{ $apparel->price }}</h6>
                                            @if (
                                                    $apparel->stock_xs === 0 or
                                                    $apparel->stock_s === 0 or
                                                    $apparel->stock_m === 0 or
                                                    $apparel->stock_l === 0 or
                                                    $apparel->stock_xl === 0
                                            )
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