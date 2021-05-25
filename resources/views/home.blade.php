@extends('/layouts/master')

@section('content')

    <!-- STYLES -->
    <style>
        /* Carousel */
        #home-carousel {
            max-height: 960px;
            margin-top: -30px;
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
            align-items: center;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1;
        }
        #home-carousel .carousel-caption h1 {
            font-size: 250%;
            font-weight: 600;
            text-shadow: 0 5px 5px #000000;
            text-transform: uppercase;
        }
        #home-carousel .carousel-control-prev {
            z-index: 2;
        }
        #home-carousel .carousel-control-next {
            z-index: 2;
        }
        
        /* Link cards */
        .link-card{
            display: inline-flex;
        }
        .link-card a{
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #000;
            overflow: hidden;
            width: 100%;
        }
        .link-card a:hover{
            filter: brightness(.9);
        }
        
        .link-card h4 {
            font-weight: bold;
            padding: 0 20px;
        }
        .link-card h6 {
            padding: 0 20px;
        }
        .link-card p {
            padding: 0 20px 5px 20px;
        }
        .link-card img {
            width: 100%;
        }
        
        /* Newsletter */
        .newsletter-container img {
            width: 100%;
        }
        
    </style>
    <!-- CAROUSEL -->
    <div id = "home-carousel">
        <div id = "homeCarouselIndicators" class = "carousel slide" data-ride = "carousel" data-interval = "5000">
            <ol class = "carousel-indicators">
                <li data-target = "#homeCarouselIndicators" data-slide-to = "0" class = "active"></li>
                <li data-target = "#homeCarouselIndicators" data-slide-to = "1"></li>
            </ol>
            <div class = "carousel-inner">
                    <div class = "carousel-caption">
                        <h1>Welcome to NADUMA</h1>
                        <a href = "{{ url('/shirts') }}"><button class = "btn btn-primary btn-lg">See what's in store</button></a>
                    </div>
                <div class = "carousel-item active" style = "background-image: url('./img/bg-7.jpg')">
                    <img class = "d-block w-100" src = "./img/bg-7.jpg">
                </div>
                <div class = "carousel-item" style = "background-image: url('./img/bg-6.jpg')">
                    <img class = "d-block w-100" src = "./img/bg-6.jpg">
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
                <div class = "col">
                    <h3>Latest Apparels</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "link-card col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href = "{{ url('/shirts') }}">
                        <img src = "./img/cloth-1.jpg"/>
                        <h4>Igorotak Shirts Set 1 →</h4>
                        <h6>May 23, 2021</h6>
                        <p>A new set of Igorotak shirts has arrived. Check it here out now!</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href = "{{ url('/shirts') }}">
                        <img src = "./img/cloth-5.jpg"/>
                        <h4>Igorotak Shirts Set 2 →</h4>
                        <h6>May 23, 2021</h6>
                        <p>A new set of Igorotak shirts has arrived. Check it here out now!</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href = "{{ url('/miscellaneous') }}">
                        <img src = "./img/cloth-9.jpg"/>
                        <h4>Sagada Themed Face Mask →</h4>
                        <h6>May 25, 2021</h6>
                        <p>Check out this Sagada weaving cloth manufactured face mask!</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href = "{{ url('/miscellaneous') }}">
                        <img src = "./img/cloth-10.jpg"/>
                        <h4>Cordillera Themed Face Mask →</h4>
                        <h6>May 25, 2021</h6>
                        <p>Check out this Cordillera themed face mask!</p>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- News cards -->
        <div class = "news-container container">
            <div class = "row">
                <div class = "col">
                    <h3>Latest News</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "link-card col-6 col-sm-6 col-md-12 col-lg-12 col-xl-3">
                    <a href = "#">
                        <img src = "./img/bg-1.jpg"/>
                        <h4>Future Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>What's the future for fashion, now that quarantine has taken over the world?</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <a href = "#">
                        <img src = "./img/bg-2.jpg"/>
                        <h4>Prideful Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Find ways to still show off your fashion tastes during lockdowns.</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <a href = "#">
                        <img src = "./img/bg-3.jpg"/>
                        <h4>Discount Fashion →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Shopping malls might offer discounts and bonuses on products.</p>
                    </a>
                </div>
                <div class = "link-card col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <a href = "#">
                        <img src = "./img/bg-4.jpg"/>
                        <h4>Quarantinsanity →</h4>
                        <h6>May 22, 2021</h6>
                        <p>Fashion topics aside, how well are you handling yourslef?</p>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Our Story -->
        <div class = "newsletter-container container">
            <div class = "row">
                <div class = "col">
                    <h3>Our Story</h3>
                    <hr/>
                </div>
            </div>
            <div class = "row">
                <div class = "col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <img src = "./img/misc-1.jpg"/>
                </div>
                <div class = "col-sm-12 col-md-6 col-lg-6 col-xl-8">
                    <p>We create high quality garments that share and preserve the Cordilleran culture.</p>
                    <p>By incorporating native textiles and designs into our creations, our products are meticulously crafted to capture, depict, encapsulate and present the rich culture and traditions of the Northern Philippines Highlands.</p>
                    <p>Each piece is a story of our heritage - <b>a heritage worth wearing proudly.</b></p>
                    <p>Naduma offers daily wear with ethnic designs or hand woven native cloth accents for everyone.</p>
                    <p>Aside from shirts, Naduma has also been making products such as bags, hats and jackets. As of now, a variety of quality made face masks are also available.</p>
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