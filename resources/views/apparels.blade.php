@extends('/layouts/master')

@section('content')        
    <!-- STYLES -->
    <style>
        /* Filter navigation */
        .filter.navbar {
            box-shadow: none;
            margin: 0;
            padding: 0;
        }
        .filter.navbar a {
            border-radius: 0 !important;
        }
        .filter.navbar .navbar-nav {
            flex-direction: row;
        }
        .filter.navbar .active {
            background-color: #EEEEEE;
        }
    </style>

    <!-- APPARELS -->
    <div class = "profile-page">
        <div class = "main section">
            <div class = "container">
                
                <!-- Header -->
                <div class = "row">
                    <div class = "col">
                        <h3>Apparels</h3>
                        <hr/>
                    </div>
                </div>
                
                <!-- Navigation filter -->
                <div class = "row">
                    <div class = "col">
                        <nav class = "filter navbar">
                            <div class = "container">
                                <ul class = "nav navbar-nav" data-tabs = "tabs">
                                    <li class = "nav-item">
                                        <a class = "nav-link active" href = "#shirts" data-toggle = "tab">Shirts</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#miscellaneous" data-toggle = "tab">Miscellaneous</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <hr/>
                    </div>
                </div>
                
                <!-- Wrapper -->
                <div class = "row tab-content">
                    <!-- Shirts -->
                    <div class = "tab-pane active" id = "shirts">
                        
                        <!-- Igorotak shirts -->
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h4>Igorotak Shirts</h4>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-1.jpg"/>
                                        <h4>Igo Tribal 3 Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-2.jpg"/>
                                        <h4>Igorotak Beads Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-3.jpg"/>
                                        <h4>Igorotak Splash Shirt</h4>
                                        <h6>From PHP 450</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-4.jpg"/>
                                        <h4>Igorotak Beads Django Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-5.jpg"/>
                                        <h4>Igorotak Tangkil Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-6.jpg"/>
                                        <h4>Igorotak Seal Django Shirt</h4>
                                        <h6>From PHP 450</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-7.jpg"/>
                                        <h4>Pattong Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-8.jpg"/>
                                        <h4>Sangi Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Other prints -->
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h4>Other Prints</h4>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-1.jpg"/>
                                        <h4>Igo Tribal 3 Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-2.jpg"/>
                                        <h4>Igorotak Beads Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-3.jpg"/>
                                        <h4>Igorotak Splash Shirt</h4>
                                        <h6>From PHP 450</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-4.jpg"/>
                                        <h4>Igorotak Beads Django Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-5.jpg"/>
                                        <h4>Igorotak Tangkil Shirt</h4>
                                        <h6>From PHP 480</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-6.jpg"/>
                                        <h4>Igorotak Seal Django Shirt</h4>
                                        <h6>From PHP 450</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-7.jpg"/>
                                        <h4>Pattong Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a href = "{{ url('/apparels') }}">
                                        <img src = "./img/shirts-igorotak/shirt-8.jpg"/>
                                        <h4>Sangi Ladies V-neck</h4>
                                        <h6>From PHP 460</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Miscellaneous -->
                    <div class = "tab-pane" id = "miscellaneous">
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
                
@endsection