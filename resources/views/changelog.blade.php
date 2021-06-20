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
                                    <h5>Only big and significant changes are recorded.</h5>
                                </ul>
                                <br/>
                                <ul>
                                    <h5>June 17</h5>
                                    <li>Added database for orders.</li>
                                </ul>
                                <ul>
                                    <h5>June 8</h5>
                                    <li>Added "inventory" page for available products.</li>
                                    <li>Added "inventory" page for production materials.</li>
                                    <li>Added "orders" page.</li>
                                </ul>
                                <ul>
                                    <h5>June 7</h5>
                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-dashboard">Material Dashboard</a> template.</li>
                                    <li>Added "statistics" page.</li>
                                </ul>
                                <ul>
                                    <h5>May 30</h5>
                                    <li>Added database for apparels.</li>
                                    <li>Added "apparels" page.</li>
                                </ul>
                                <ul>
                                    <h5>May 22</h5>
                                    <li>Implemented <a href = "https://www.creative-tim.com/product/material-kit-pro?partner=114912">Material kit</a> template.</li>
                                    <li>Added "changelog" page.</li>
                                    <li>Added custom logo.</li>
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