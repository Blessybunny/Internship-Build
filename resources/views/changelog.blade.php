@extends('layouts.master')

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
                
            <!-- Navigation tabs -->
            <div class = "tabs row">
                <div class = "col">
                    <ul class = "nav navbar-nav justify-content-center" data-tabs = "tabs">
                        <li class = "nav-item">
                            <a class = "nav-link active" href = "#y-2021" data-toggle = "tab">2021</a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#wip" data-toggle = "tab">Work In Progress</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Content wrapper -->
            <div class = "changelog row tab-content">
                
                <!-- 2021 -->
                <div class = "tab-pane active" id = "y-2021">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <ul>
                                    <h5>Only major changes are recorded.</h5>
                                </ul>
                                <br/>
                                <ul>
                                    <h5>June 10</h5>
                                    <li>Functionalities for each corresponding apparels added.</li>
                                </ul>
                                <ul>
                                    <h5>June 9</h5>
                                    <li>Functionalities for "inventory" page for products added.</li>
                                </ul>
                                <ul>
                                    <h5>June 8</h5>
                                    <li>Added "inventory" page for products.</li>
                                    <li>Added "inventory" page for production materials.</li>
                                    <li>Added "orders" page for currently pending orders.</li>
                                    <li>Added "sandbox" page for testing purposes.</li>
                                </ul>
                                <ul>
                                    <h5>June 7</h5>
                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-dashboard">Material Dashboard</a> template.</li>
                                    <li>Added "statistics" page.</li>
                                    <li>Added more attributes to the database for apparels.</li>
                                </ul>
                                <ul>
                                    <h5>June 4</h5>
                                    <li>Added pages for each corresponding apparels.</li>
                                </ul>
                                <ul>
                                    <h5>May 30</h5>
                                    <li>Added a database for apparels.</li>
                                    <li>Merged "shirt" and "miscellaneous" pages to the "apparels" page.</li>
                                    <li>Image (.jpeg) optimization.</li>
                                </ul>
                                <ul>
                                    <h5>May 29</h5>
                                    <li>Revamped layout.</li>
                                </ul>
                                    <ul>
                                    <h5>May 24</h5>
                                    <li>Added "shirt" page.</li>
                                    <li>Added "miscellaneous" page.</li>
                                </ul>
                                <ul>
                                    <h5>May 23</h5>
                                    <li>Rebranded to "Naduma".</li>
                                </ul>
                                <ul>
                                    <h5>May 22</h5>
                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-kit-pro?partner=114912">Material kit</a> template.</li>
                                    <li>Added changelog page.</li>
                                    <li>Added logo and brand name "Opalescence".</li>
                                </ul>
                                <ul>
                                    <h5>May 21</h5>
                                    <li>Website deployment.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Work In Progress -->
                <div class = "tab-pane" id = "wip">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col">
                                <hr/>
                                <ul>
                                    <h5>General</h5>
                                    <li>Narrow down essential elements found in Material Dashboard.</li>
                                    <li>Fix design inconsistencies with Material Dashboard in accordance to Material Kit modifications.</li>
                                </ul>
                                <ul>
                                    <h5>Apparels (single view)</h5>
                                    <li>Find elements to further stylize.</li>
                                </ul>
                                <ul>
                                    <h5>Back-end</h5>
                                    <li>Give fix to latest apparels to being actually "latest" ($date).</li>
                                    <li>Repurpose "Featured Apparels" to be "Most Popular" ($sold).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection