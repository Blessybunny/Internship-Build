@extends('layouts.master')

@section('title')
    Apparels
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <div class = "main section kit">
        <div class = "container">
                
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>APPARELS</h3>
                    <hr/>
                </div>
            </div>
                
            <!-- Navigation tabs -->
            <div class = "row tabs">
                <div class = "col">
                    <ul class = "nav navbar-nav justify-content-center" data-tabs = "tabs">
                        @foreach ($categories as $category)
                            <li class = "nav-item">
                                <a class = "nav-link" id = "category-link-{{ $category->id }}" href = "#category-tab-{{ $category->id }}" data-toggle = "tab">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <!-- Content wrapper -->
            <div class = "row tab-content">
                
                @foreach ($categories as $category)
                    <div class = "tab-pane" id = "category-tab-{{ $category->id }}">
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <hr/>
                                    <h3>{{ $category->name }}</h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                @foreach ($apparels as $apparel)
                                    @foreach ($all_apparels as $single_apparel)
                                        @if ($single_apparel['id'] === $apparel->id)
                                            @if ($apparel->category_id === $category->id)
                                                @if ($apparel->type === 'shirt')
                                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                                            <h4>{{ $apparel->name }}</h4>
                                                            <h6>From PHP {{ $apparel->price }}</h6>
                                                            @if ($single_apparel['quantity_xs'] === 0 and $single_apparel['quantity_sm'] === 0 and $single_apparel['quantity_md'] === 0 and $single_apparel['quantity_lg'] === 0 and $single_apparel['quantity_xl'] === 0)
                                                                <h6 class = "sold-out">Sold Out</h6>
                                                            @endif
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($apparel->type === 'accessory')
                                                    <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                                        <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                                            <img src = "{{ asset($apparel->img_url) }}"/>
                                                            <h4>{{ $apparel->name }}</h4>
                                                            <h6>From PHP {{ $apparel->price }}</h6>
                                                            @if ($single_apparel['quantity_universal'] === 0)
                                                                <h6 class = "sold-out">Sold Out</h6>
                                                            @endif
                                                        </a>
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
            <!-- Scripts -->
            <script>
                //Set first category as active
                window.onload = () => {
                    document.getElementById('category-link-1').className = `nav-link active`;
                    document.getElementById('category-tab-1').className = `tab-pane active`;
                };
            </script>
            
        </div>
    </div>

@endsection