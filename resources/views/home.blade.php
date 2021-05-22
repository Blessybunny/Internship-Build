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
    <div id = "home-carousel">
        <div id = "homeCarouselIndicators" class = "carousel slide" data-ride = "carousel" data-interval = "5000">
            <ol class = "carousel-indicators">
                <li data-target = "#homeCarouselIndicators" data-slide-to = "0" class = "active"></li>
                <li data-target = "#homeCarouselIndicators" data-slide-to = "1"></li>
                <li data-target = "#homeCarouselIndicators" data-slide-to = "2"></li>
            </ol>
            <div class = "carousel-inner">
                <div class = "carousel-item active" style = "background-image: url('./img/bg-1.jpg')">
                    <img class = "d-block w-100" src = "./img/bg-1.jpg">
                    <div class = "carousel-caption d-none d-md-block">
                        <h1>Welcome to Opalescence</h1>
                        <h4>Home to your casual fashion needs.</h4>
                        <button class = "btn btn-primary btn-lg">START CRAVING</button>
                    </div>
                </div>
                <div class = "carousel-item" style = "background-image: url('./img/bg-2.jpg')">
                    <img class = "d-block w-100" src = "./img/bg-2.jpg">
                    <div class = "carousel-caption d-none d-md-block">
                        <h4>"Style is a way to say who you are without having to speak."</h4>
                    </div>
                </div>
                <div class = "carousel-item" style = "background-image: url('./img/bg-3.jpg')">
                    <img class = "d-block w-100" src = "./img/bg-3.jpg">
                    <div class = "carousel-caption d-none d-md-block">
                        <h4>"Clothes mean nothing until someone lives in them."</h4>
                    </div>
                </div>
            </div>
            <a class = "carousel-control-prev" href = "#homeCarouselIndicators" role = "button" data-slide = "prev">
                <i class = "material-icons">keyboard_arrow_left</i>
                <span class = "sr-only">Previous</span>
            </a>
            <a class = "carousel-control-next" href = "#homeCarouselIndicators" role = "button" data-slide = "next">
                <i class = "material-icons">keyboard_arrow_right</i>
                <span class = "sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class = "main">
        
        <!-- New clothing lines -->
        <div class = "clothing-line-container container">
            <div class = "row">
                <div class = "col-md-12">
                    <h3 class = "header-3">Latest Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "news-card col-sm-3 col-md-6 col-lg-6 col-xl-3">
                    <div class = "inner">
                        <div id = "clothingLineCarousel1Indicator" class = "carousel slide" data-ride = "carousel" data-interval = "3000">
                            <ol class = "carousel-indicators">
                                <li data-target = "#clothingLineCarousel1Indicator" data-slide-to = "0" class = "active"></li>
                                <li data-target = "#clothingLineCarousel1Indicator" data-slide-to = "1"></li>
                                <li data-target = "#clothingLineCarousel1Indicator" data-slide-to = "2"></li>
                                <li data-target = "#clothingLineCarousel1Indicator" data-slide-to = "3"></li>
                            </ol>
                            <div class = "carousel-inner">
                                <div class = "carousel-item active">
                                    <img class = "d-block w-100" src = "./img/cloth-1.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-2.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-3.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-4.jpg">
                                </div>
                            </div>
                            <a class = "carousel-control-prev" href = "#clothingLineCarousel1Indicator" role = "button" data-slide = "prev">
                                <i class = "material-icons">keyboard_arrow_left</i>
                                <span class = "sr-only">Previous</span>
                            </a>
                            <a class = "carousel-control-next" href = "#clothingLineCarousel1Indicator" role = "button" data-slide = "next">
                                <i class = "material-icons">keyboard_arrow_right</i>
                                <span class = "sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class = "news-card col-sm-3 col-md-6 col-lg-6 col-xl-3">
                    <div class = "inner">
                        <div id = "clothingLineCarousel2Indicator" class = "carousel slide" data-ride = "carousel" data-interval = "3000">
                            <ol class = "carousel-indicators">
                                <li data-target = "#clothingLineCarousel2Indicator" data-slide-to = "0" class = "active"></li>
                                <li data-target = "#clothingLineCarousel2Indicator" data-slide-to = "1"></li>
                                <li data-target = "#clothingLineCarousel2Indicator" data-slide-to = "2"></li>
                                <li data-target = "#clothingLineCarousel2Indicator" data-slide-to = "3"></li>
                            </ol>
                            <div class = "carousel-inner">
                                <div class = "carousel-item active">
                                    <img class = "d-block w-100" src = "./img/cloth-5.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-6.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-7.jpg">
                                </div>
                                <div class = "carousel-item">
                                    <img class = "d-block w-100" src = "./img/cloth-8.jpg">
                                </div>
                            </div>
                            <a class = "carousel-control-prev" href = "#clothingLineCarousel2Indicator" role = "button" data-slide = "prev">
                                <i class = "material-icons">keyboard_arrow_left</i>
                                <span class = "sr-only">Previous</span>
                            </a>
                            <a class = "carousel-control-next" href = "#clothingLineCarousel2Indicator" role = "button" data-slide = "next">
                                <i class = "material-icons">keyboard_arrow_right</i>
                                <span class = "sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- News cards -->
        <div class = "news-container container">
            <div class = "row">
                <div class = "col-md-12">
                    <h3 class = "header-3">Latest News</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "news-card col-sm-6 col-md-12 col-lg-12 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-1.jpg"/>
                        <h4>Future Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>What's the future for fashion, now that quarantine has taken over the world?</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-2.jpg"/>
                        <h4>Prideful Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Find ways to still show off your fashion tastes during lockdowns.</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-3.jpg"/>
                        <h4>Discount Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Shopping malls might offer discounts and bonuses on products.</p>
                    </div>
                </div>
                <div class = "news-card col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class = "inner">
                        <img src = "./img/bg-4.jpg"/>
                        <h4>Quarantinsanity →</h4>
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
                    <li>Items should be  5:7 vertical.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection