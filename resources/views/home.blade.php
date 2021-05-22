@extends('/layouts/master')

@section('content')

    <!-- STYLES -->
    <style>
        /* Carousel */
        #home-carousel {
            max-height: 960px;
            margin-top: -30px;
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
        
        /*News cards*/
        .news-container{
            padding: 30px;
        }
        .news-container .news-card{
            display: inline-flex;
        }
        .news-container .news-card .inner{
            box-shadow: 0 0 10px rgba(0, 0, 0, .25);
            overflow: hidden;
        }
        
        .news-container h4 {
            font-weight: bold;
            padding: 0 15px;
        }
        .news-container h6 {
            padding: 0 15px;
        }
        .news-container p {
            padding: 0 15px;
        }
        .news-container img {
            width: 100%;
        }
        
    </style>
    <!-- CAROUSEL -->
    <div id = "home-carousel" class = "carousel">
        <div id = "carouselExampleIndicators" class = "carousel slide" data-ride = "carousel" data-interval = "5000">
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

    <!-- MAIN CONTENT -->
    <div class = "main">
        
        <!-- News cards -->
        <div class = "news-container container">
            <div class = "row">
                <div class = "news-card col-sm-6 col-md-12 col-lg-12 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-1.jpg"/>
                        <h4>Sample news card 1 →</h4>
                        <h6>May 22, 2021</h6>
                        <p>What's the future for fashion, now that quarantine has taken over the world?</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-2.jpg"/>
                        <h4>Sample news card 2 →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Find ways to still show off your fashion tastes during lockdowns.</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-3.jpg"/>
                        <h4>Sample news card 3 →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Shopping malls might offer discounts and bonuses on products.</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-4.jpg"/>
                        <h4>Sample news card 3 →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Fashion topics aside, how well are you handling yourslef?</p>
                    </div>
                </div>
            </div>
        </div>
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