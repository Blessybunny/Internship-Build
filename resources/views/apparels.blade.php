@extends('/layouts/master')

@section('content')        
    <!-- STYLES -->
    <style>
        /* Content */
        .tab-content h6 {
            text-align: center;
        }
    </style>

    <!-- APPARELS -->
    <div class = "profile-page">
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
                    <div class = "col">
                        <nav class = "filter navbar">
                            <div class = "container">
                                <ul class = "nav navbar-nav" data-tabs = "tabs">
                                    <li class = "nav-item">
                                        <a class = "nav-link active" href = "#igorotak-shirts" data-toggle = "tab">Igorotak Shirts</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#ladies" data-toggle = "tab">Ladies</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#accessories" data-toggle = "tab">Accessories</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#other-prints" data-toggle = "tab">Other Prints</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <hr/>
                    </div>
                </div>
                
                <!-- Wrapper -->
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
                                @foreach ($apparel_data as $apparel)
                                    @if($apparel['category'] == 'igorotak-shirt')
                                        <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                            <a href = "{{ url('/apparels') }}">
                                                <img src = "{{ $apparel['imgUrl'] }}"/>
                                                <h4>{{ $apparel['name'] }}</h4>
                                                <h6>From PHP {{ $apparel['price'] }}</h6>
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
                                @foreach ($apparel_data as $apparel)
                                    @if($apparel['category'] == 'ladies')
                                        <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                            <a href = "{{ url('/apparels') }}">
                                                <img src = "{{ $apparel['imgUrl'] }}"/>
                                                <h4>{{ $apparel['name'] }}</h4>
                                                <h6>From PHP {{ $apparel['price'] }}</h6>
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
                                @foreach ($apparel_data as $apparel)
                                    @if($apparel['category'] == 'accessory')
                                        <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                            <a href = "{{ url('/apparels') }}">
                                                <img src = "{{ $apparel['imgUrl'] }}"/>
                                                <h4>{{ $apparel['name'] }}</h4>
                                                <h6>From PHP {{ $apparel['price'] }}</h6>
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
                                @foreach ($apparel_data as $apparel)
                                    @if($apparel['category'] == 'other')
                                        <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                            <a href = "{{ url('/apparels') }}">
                                                <img src = "{{ $apparel['imgUrl'] }}"/>
                                                <h4>{{ $apparel['name'] }}</h4>
                                                <h6>From PHP {{ $apparel['price'] }}</h6>
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
    </div>
                
@endsection