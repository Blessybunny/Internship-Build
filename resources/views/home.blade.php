@extends('/layouts/master')

@section('title')
    NADUMA Store
@endsection

@section('content')

    <!-- BANNER -->
    <div class = "main banner">
        <div class = "wallpaper"></div>
        <div class = "content">
            <h1>Welcome to NADUMA</h1>
            <br/>
            <a href = "{{ url('/apparels') }}">
                <button class = "btn btn-primary btn-lg">See what's in store</button>
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class = "main">
        
        <!-- Latest apparels -->
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <h3>Latest Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                @for ($i = 12; $i >= 9; $i--)
                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <a href = "{{ url('/apparels') }}">
                            <img src = "{{ $apparel_data[$i]['imgUrl'] }}"/>
                            <h4>{{ $apparel_data[$i]['name'] }}</h4>
                            <h6>From PHP {{ $apparel_data[$i]['price'] }}</h6>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        
        <!-- Featured apparels -->
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <h3>Featured Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                @for ($i = 8; $i >= 1; $i--)
                    <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <a href = "{{ url('/apparels') }}">
                            <img src = "{{ $apparel_data[$i]['imgUrl'] }}"/>
                            <h4>{{ $apparel_data[$i]['name'] }}</h4>
                            <h6>From PHP {{ $apparel_data[$i]['price'] }}</h6>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
        
        <!-- Our story -->
        <div class = "story container">
            <div class = "row">
                <div class = "col">
                    <h3>Our Story</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "justified col-sm-12 col-md-12 col-lg-6 col-xl-4">
                    <img src = "./img/misc-1.jpg"/>
                </div>
                <div class = "justified col-sm-12 col-md-12 col-lg-6 col-xl-8">
                    <p>We create high quality garments that share and preserve the Cordilleran culture.</p>
                    <p>By incorporating native textiles and designs into our creations, our products are meticulously crafted to capture, depict, encapsulate and present the rich culture and traditions of the Northern Philippines Highlands.</p>
                    <p>Each piece is a story of our heritage - <b>a heritage worth wearing proudly.</b></p>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <h3>Newsletter Updates</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form>
                        <div class = "form-group">
                            <input type = "email" class = "form-control" id = "exampleInputEmail1" aria-describedby = "emailHelp" placeholder = "Email address">
                            <small id = "emailHelp" class = "form-text text-muted">We'll keep your email private and safe.</small>
                        </div>
                        <button type = "submit" class = "btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection