@extends('/layouts/master')

@section('content')        

    <!-- CHANGELOG -->
    <div class = "profile-page">
        
        <div class = "page-header header-filter" data-parallax = "true" style = "background-image: url('./img/bg-8.jpg');"></div>
        <div class = "main">
            <div class = "section">
                <!-- Changelog -->
                <div class = "container">
                    <div id = "nav-tabs">
                        <h3>Changelog</h3>
                        <p>Only major changes are recorded.</p>
                        <div class = "row">
                            <div class = "col-md-12">
                                <div class = "card card-nav-tabs card-plain">
                                    <div class = "card-header card-header-primary">
                                        <div class = "nav-tabs-navigation">
                                            <div class = "nav-tabs-wrapper">
                                                <ul class = "nav nav-tabs" data-tabs = "tabs">
                                                    <li class = "nav-item">
                                                        <a class = "nav-link active" href = "#y-2021" data-toggle = "tab">2021</a>
                                                    </li>
                                                    <li class = "nav-item">
                                                        <a class = "nav-link" href = "#y-2022" data-toggle = "tab">2022</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class = "card-body">
                                        <div class = "tab-content">
                                            <div class = "tab-pane active" id = "y-2021">
                                                <ul>
                                                    <h4>May 26</h4>
                                                    <li>Image (jpeg) optimization.</li>
                                                </ul>
                                                <ul>
                                                    <h4>May 24</h4>
                                                    <li>Added "shirt" and "miscellaneous" pages.</li>
                                                </ul>
                                                <ul>
                                                    <h4>May 23</h4>
                                                    <li>Rebranded to "Naduma".</li>
                                                </ul>
                                                <ul>
                                                    <h4>May 22</h4>
                                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-kit-pro?partner=114912">Material kit</a> template.</li>
                                                    <li>Added "changelog" page.</li>
                                                    <li>Added "about" page.</li>
                                                    <li>Added logo and brand name "Opalescence".</li>
                                                </ul>
                                                <ul>
                                                    <h4>May 21</h4>
                                                    <li>Website deployment.</li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id = "y-2022"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dev Notes -->
                <script>
                    /*
                        To-do List:
                            - Steal ideas from other existing fashion sites?
                        Keep Consistency:
                            - Wallpapers should be 16:9 horizontal.
                            - Items should be  5:7 vertical.
                            - Color accents with ranges of red and yellow.
                            - Eliminate border radiuses from default.
                    */
                </script>
            </div>

        </div>
        
    </div>

@endsection