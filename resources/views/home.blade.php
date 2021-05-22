@extends('/layouts/master')

    <!-- STYLES -->
    <style>
        /* Carousel */
        #home-carousel {
            max-height: 960px;
            margin: 0;
            padding: 0;
            transform: translateY(-30px);
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
            background-image: linear-gradient(rgba(0, 0, 0, .75), transparent, rgba(0, 0, 0, .5));
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
        
    </style>

@section('content')

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
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Yellowstone National Park, United States
                            </h4>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-2.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-2.jpg" alt = "Second slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Somewhere Beyond, United States
                            </h4>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-3.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-3.jpg" alt = "Third slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Yellowstone National Park, United States
                            </h4>
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
                    <li>Off-page landing redirect to UC Cordilleras' FB page (and possibly Twitter too).</li>
                </ul>
            </div>
        </div>
    </div>

@endsection