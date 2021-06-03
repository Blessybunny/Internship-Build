@extends('/layouts/master')

@section('title')
    Changelog
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "main section">
        <div class = "container">
            
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>CHANGELOG</h3>
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
                                    <a class = "nav-link active" href = "#y-2021" data-toggle = "tab">2021</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <hr/>
                </div>
            </div>
            
            <!-- Content wrapper -->
            <div class = "row tab-content">
                
                <!-- 2021 -->
                <div class = "tab-pane active" id = "y-2021">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-xl-12">
                                <br/>
                                <h6>Note: Only major changes are recorded.</h6>
                                <br/>
                                <ul>
                                    <h4>May 30</h4>
                                    <li>Added a pseudo database for apparels. I'm so tired.</li>
                                    <li>Merged "shirt" and "miscellaneous" pages to the "apparels" page.</li>
                                    <li>Image (.jpeg) optimization.</li>
                                </ul>
                                <ul>
                                    <h4>May 29</h4>
                                    <li>Revamped layout.</li>
                                </ul>
                                    <ul>
                                    <h4>May 24</h4>
                                    <li>Added "shirt" page.</li>
                                    <li>Added "miscellaneous" page.</li>
                                </ul>
                                <ul>
                                    <h4>May 23</h4>
                                    <li>Rebranded to "Naduma".</li>
                                </ul>
                                <ul>
                                    <h4>May 22</h4>
                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-kit-pro?partner=114912">Material kit</a> template.</li>
                                    <li>Added changelog page.</li>
                                    <li>Added logo and brand name "Opalescence".</li>
                                </ul>
                                <ul>
                                    <h4>May 21</h4>
                                    <li>Website deployment.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection