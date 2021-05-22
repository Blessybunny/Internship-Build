@extends('/layouts/master')

@section('content')

    <!-- STYLES -->
    <style>
        /* Carousel */
        #home-carousel {
            max-height: 960px;
            margin: 0;
            padding: 0;
            transform: translateY(-30px);
        }
        #home-carousel .carousel-indicators li{
            border-radius: 0;
        }
        #home-carousel .card {
            border-radius: 0;
        }
        #home-carousel .carousel-item {
            background-position: center top;
            background-size: cover;
            min-height: 480px;
            max-height: 720px;
        }
        #home-carousel .carousel-item::after {
            background-image: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .25), rgba(0, 0, 0, .75));
            content: "";
            left: 0;
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }
        #home-carousel .d-block {
            opacity: 0;
            visibility: hidden;
        }
        #home-carousel .carousel-caption {
            padding-bottom: 7.5%;
        }
        #home-carousel .carousel-caption h1 {
            font-size: 250%;
            font-weight: 600;
            text-shadow: 0 5px 5px #000000;
            text-transform: uppercase;
        }
        #home-carousel .carousel-caption h4 {
            text-shadow: 0 5px 5px #000000;
        }
        
    </style>
    <!-- CAROUSEL -->
    <div id = "home-carousel" class = "container-fluid">
        <div class = "card card-raised card-carousel">
            <div id = "carouselExampleIndicators" class="carousel slide" data-ride = "carousel" data-interval = "5000">
                <ol class = "carousel-indicators">
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "2"></li>
                </ol>
                <div class = "carousel-inner">
                    <div class = "carousel-item active" style = "background-image: url('./img/bg-1.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-1.jpg" alt = "First slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h1>Welcome to Opalescence</h1>
                            <h4>Home to your casual fashion needs.</h4>
                            <button class = "btn btn-primary btn-lg">START CRAVING</button>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-2.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-2.jpg" alt = "Second slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>"Style is a way to say who you are without having to speak."</h4>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-3.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-3.jpg" alt = "Third slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>"Clothes mean nothing until someone lives in them."</h4>
                        </div>
                    </div>
                </div>
                <a class = "carousel-control-prev" href = "#carouselExampleIndicators" role = "button" data-slide = "prev">
                    <i class = "material-icons">keyboard_arrow_left</i>
                    <span class = "sr-only">Previous</span>
                </a>
                <a class = "carousel-control-next" href = "#carouselExampleIndicators" role = "button" data-slide = "next">
                    <i class = "material-icons">keyboard_arrow_right</i>
                    <span class = "sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>         

    <!-- MAIN CONTENT -->
    <div class = "main main-raised">
        <!-- Span 1 -->
        <div class = "section section-basic">
            <div class = "container">
                <h1>To-do List</h1>
                <ul>
                    <li>Improvise carousel word content.</li>
                    <li>Add a pseudo newsletter update box at the bottom of this landing page.</li>
                    <li>Add a "shirt", "pants", and "miscellaneous" pages.</li>
                    <li>Add a "featured" card for trending clothes to this landing page.</li>
                    <li>Steal ideas from other existing fashion sites?</li>
                    <li>Wallpapers should be 16:9 horizontal.</li>
                    <li>Items should be 16:9 vertical.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection