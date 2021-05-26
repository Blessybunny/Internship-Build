@extends('/layouts/master')

@section('content')        
    <!-- STYLES -->
    <style>
        .link-card h4 {
        }
    </style>

    <!-- CHANGELOG -->
    <div class = "profile-page">
        
        <div class = "page-header header-filter" data-parallax = "true" style = "background-image: url('./img/bg-3.jpg');"></div>
        <div class = "main">
            <div class = "section">
                <div class = "container">
                    <!-- New clothing lines -->
                    <div class = "row">
                        <div class = "col">
                            <h3>Latest Apparels</h3>
                            <h6>Igorotak Shirt Sets 1 &amp; 2</h6>
                            <hr/>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-1.jpg"/>
                                <h4>Igo Tribal 3 Ladies V-neck</h4>
                                <h6>PHP460</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-2.jpg"/>
                                <h4>Igorotak Beads Shirt</h4>
                                <h6>PHP480</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-3.jpg"/>
                                <h4>Igorotak Splash Shirt</h4>
                                <h6>PHP450</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-4.jpg"/>
                                <h4>Igorotak Beads Django Shirt</h4>
                                <h6>PHP480</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-5.jpg"/>
                                <h4>Igorotak Tangkil Shirt</h4>
                                <h6>PHP480</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-6.jpg"/>
                                <h4>Igorotak Seal Django Shirt</h4>
                                <h6>PHP450</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-7.jpg"/>
                                <h4>Pattong Ladies V-neck</h4>
                                <h6>PHP460</h6>
                            </a>
                        </div>
                        <div class = "link-card col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a href = "#">
                                <img src = "./img/cloth-8.jpg"/>
                                <h4>Sangi Ladies V-neck</h4>
                                <h6>php460</h6>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Other clothing lines -->
                    <div class = "row">
                        <div class = "col">
                            <h3>Other Apparels</h3>
                            <h6>Various</h6>
                            <hr/>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection