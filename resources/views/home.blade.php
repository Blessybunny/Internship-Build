@extends('layouts.master')

@section('title')
    NADUMA Store
@endsection

@section('content')

    <!-- BANNER -->
    <div class = "banner main">
        <div class = "wallpaper"></div>
        <div class = "content">
            <h1>Welcome to NADUMA</h1>
            <br/>
            <a href = "{{ url('/apparels') }}">
                <button class = "btn btn-primary btn-lg">
                    <i class = "material-icons">store</i> See what's in store
                </button>
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class = "main">
        
        <!-- Latest apparels -->
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <br/>
                    <hr/>
                    <h3>Latest Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                @foreach ($apparels as $apparel)
                    @if ($apparel->id >= 0)
                        <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                            <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                <img src = "{{ asset($apparel->img_url) }}"/>
                                <h4>{{ $apparel->name }}</h4>
                                <h6>From PHP {{ $apparel->price }}</h6>
                                @if ($apparel->type === "shirt")
                                    @if ($apparel->stock_xs === 0 and $apparel->stock_s === 0 and $apparel->stock_m === 0 and $apparel->stock_l === 0 and $apparel->stock_xl === 0)
                                        <h6 class = "sold-out">Sold Out</h6>
                                    @endif
                                @endif
                                @if ($apparel->type === "accessory")
                                    @if ($apparel->stock_universal === 0)
                                        <h6 class = "sold-out">Sold Out</h6>
                                    @endif
                                @endif
                            </a>
                        </div>
                    @endif
                    @if ($apparel->id == 4)
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        
        <!-- Featured apparels -->
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <hr/>
                    <h3>Featured Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                @foreach ($apparels as $apparel)
                    @if ($apparel->id >= 5)
                        <div class = "apparel-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                            <a href = "{{ url('/apparels/view', ['id' => $apparel->id]) }}">
                                <img src = "{{ asset($apparel->img_url) }}"/>
                                <h4>{{ $apparel->name }}</h4>
                                <h6>From PHP {{ $apparel->price }}</h6>
                                @if ($apparel->type === "shirt")
                                    @if ($apparel->stock_xs === 0 and $apparel->stock_s === 0 and $apparel->stock_m === 0 and $apparel->stock_l === 0 and $apparel->stock_xl === 0)
                                        <h6 class = "sold-out">Sold Out</h6>
                                    @endif
                                @endif
                                @if ($apparel->type === "accessory")
                                    @if ($apparel->stock_universal === 0)
                                        <h6 class = "sold-out">Sold Out</h6>
                                    @endif
                                @endif
                            </a>
                        </div>
                    @endif
                    @if ($apparel->id == 12)
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        
        <!-- Our story -->
        <div class = "story container">
            <div class = "row">
                <div class = "col">
                    <hr/>
                    <h3>Our Story</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "col">
                    <img src = "./img/misc-1.jpg"/>
                    <br/>
                    <p>We create high quality garments that share and preserve the Cordilleran culture.</p>
                    <br/>
                    <p>By incorporating native textiles and designs into our creations, our products are meticulously crafted to capture, depict, encapsulate and present the rich culture and traditions of the Northern Philippines Highlands.</p>
                    <br/>
                    <p>Each piece is a story of our heritage - <b>a heritage worth wearing proudly.</b></p>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class = "newsletter container">
            <div class = "row">
                <div class = "col">
                    <hr/>
                    <h3>Newsletter Updates</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "col">
                    <form>
                        <div class = "form-group">
                            <input type = "email" class = "form-control" placeholder = "Email address">
                            <small class = "form-text text-muted">Sign up to our newsletter to stay updated!</small>
                        </div>
                        <button type = "button" class = "btn btn-lg btn-primary" onclick = "window.alert('Dummy button clicked!');">
                            <i class = "material-icons">mail</i> Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection