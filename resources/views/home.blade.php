@extends('/layouts/master')

@section('content')

    <!-- STYLES -->
    <style>
        /* Banner */
        #banner {
            min-height: 480px;
            padding: 20%;
        }
        #banner .wallpaper {
            background-image: url("./img/bg-9.jpg");
            background-position: center top;
            background-size: cover;
            filter: brightness(.75) contrast(.75);
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -10;
        }
        #banner .content {
            background-color: rgba(0, 0, 0, .5);
            align-items: center;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        #banner .content h1 {
            color: #FFF;
            font-family: Segoe UI;
            font-size: 46px;
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
        }
        
        /* Newsletter */
        .newsletter.container img {
            width: 100%;
        }
        .newsletter.container .justified {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
    </style>

    <!-- BANNER -->
    <div id = "banner" class = "main">
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
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-1.jpg"/>
                        <h4>Igorotak Shirts Set 1</h4>
                        <h6>May 23, 2021</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-5.jpg"/>
                        <h4>Igorotak Shirts Set 2</h4>
                        <h6>May 23, 2021</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/misc/misc-1.jpg"/>
                        <h4>Sagada Themed Face Mask</h4>
                        <h6>May 25, 2021</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/misc/misc-2.jpg"/>
                        <h4>Cordillera Themed Face Mask</h4>
                        <h6>May 25, 2021</h6>
                    </a>
                </div>
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
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-1.jpg"/>
                        <h4>Igo Tribal 3 Ladies V-neck</h4>
                        <h6>From PHP 460</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-2.jpg"/>
                        <h4>Igorotak Beads Shirt</h4>
                        <h6>From PHP 480</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-3.jpg"/>
                        <h4>Igorotak Splash Shirt</h4>
                        <h6>From PHP 450</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-4.jpg"/>
                        <h4>Igorotak Beads Django Shirt</h4>
                        <h6>From PHP 480</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-5.jpg"/>
                        <h4>Igorotak Tangkil Shirt</h4>
                        <h6>From PHP 480</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-6.jpg"/>
                        <h4>Igorotak Seal Django Shirt</h4>
                        <h6>From PHP 450</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-7.jpg"/>
                        <h4>Pattong Ladies V-neck</h4>
                        <h6>From PHP 460</h6>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <a href = "{{ url('/apparels') }}">
                        <img src = "./img/shirts-igorotak/shirt-8.jpg"/>
                        <h4>Sangi Ladies V-neck</h4>
                        <h6>From PHP 460</h6>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Our story -->
        <div class = "newsletter container">
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
        <div class = "newsletter-container container">
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