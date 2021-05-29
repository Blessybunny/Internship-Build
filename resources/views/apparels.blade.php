@extends('/layouts/master')

@section('content')        
    <!-- STYLES -->
    <style>
        /* Content */
        .tab-content h6 {
            text-align: center;
        }
    </style>

    <!-- APPARELS -->
    <div class = "profile-page">
        <div class = "main section">
            <div class = "container">
                
                <!-- Header -->
                <div class = "row">
                    <div class = "col">
                        <h3>APPARELS</h3>
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
                                        <a class = "nav-link active" href = "#igorotak-shirts" data-toggle = "tab">Igorotak Shirts</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#ladies" data-toggle = "tab">Ladies</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#accessories" data-toggle = "tab">Accessories</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a class = "nav-link" href = "#other-prints" data-toggle = "tab">Other Prints</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <hr/>
                    </div>
                </div>
                
                <!-- Wrapper -->
                <div class = "row tab-content">
                    <!-- Igorotak shirts -->
                    <div class = "tab-pane active" id = "igorotak-shirts">
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h3>Igorotak Shirts</h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-igorotak-shirts" href = "{{ url('/apparels') }}"></a>
                                </div>
                            </div>
                        </div>
                        <script>
                            apparel.modPageLink(0, document.getElementsByClassName(`link-igorotak-shirts`)[0]);
                            apparel.modPageLink(1, document.getElementsByClassName(`link-igorotak-shirts`)[1]);
                            apparel.modPageLink(2, document.getElementsByClassName(`link-igorotak-shirts`)[2]);
                            apparel.modPageLink(3, document.getElementsByClassName(`link-igorotak-shirts`)[3]);
                            apparel.modPageLink(4, document.getElementsByClassName(`link-igorotak-shirts`)[4]);
                            apparel.modPageLink(5, document.getElementsByClassName(`link-igorotak-shirts`)[5]);
                            apparel.modPageLink(6, document.getElementsByClassName(`link-igorotak-shirts`)[6]);
                            apparel.modPageLink(7, document.getElementsByClassName(`link-igorotak-shirts`)[7]);
                            apparel.modPageLink(8, document.getElementsByClassName(`link-igorotak-shirts`)[8]);
                            apparel.modPageLink(9, document.getElementsByClassName(`link-igorotak-shirts`)[9]);
                            apparel.modPageLink(10, document.getElementsByClassName(`link-igorotak-shirts`)[10]);
                            apparel.modPageLink(11, document.getElementsByClassName(`link-igorotak-shirts`)[11]);
                        </script>
                    </div>
                    
                    <!-- Ladies -->
                    <div class = "tab-pane" id = "ladies">
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h3>Ladies</h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-ladies" href = "{{ url('/apparels') }}"></a>
                                </div>
                            </div>
                        </div>
                        <script>
                            apparel.modPageLink(12, document.getElementsByClassName(`link-ladies`)[0]);
                            apparel.modPageLink(13, document.getElementsByClassName(`link-ladies`)[1]);
                            apparel.modPageLink(14, document.getElementsByClassName(`link-ladies`)[2]);
                            apparel.modPageLink(15, document.getElementsByClassName(`link-ladies`)[3]);
                            apparel.modPageLink(16, document.getElementsByClassName(`link-ladies`)[4]);
                            apparel.modPageLink(17, document.getElementsByClassName(`link-ladies`)[5]);
                        </script>
                    </div>
                    
                    <!-- Accessories -->
                    <div class = "tab-pane" id = "accessories">
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h3>Accessories</h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-accessories" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-accessories" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-accessories" href = "{{ url('/apparels') }}"></a>
                                </div>
                            </div>
                        </div>
                        <script>
                            apparel.modPageLink(18, document.getElementsByClassName(`link-accessories`)[0]);
                            apparel.modPageLink(19, document.getElementsByClassName(`link-accessories`)[1]);
                            apparel.modPageLink(20, document.getElementsByClassName(`link-accessories`)[2]);
                        </script>
                    </div>
                    
                    <!-- Other prints -->
                    <div class = "tab-pane" id = "other-prints">
                        <div class = "container">
                            <div class = "row">
                                <div class = "col">
                                    <h3>Other Prints</h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                                <div class = "link-card col-6 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <a class = "link-other-prints" href = "{{ url('/apparels') }}"></a>
                                </div>
                            </div>
                        </div>
                        <script>
                            apparel.modPageLink(21, document.getElementsByClassName(`link-other-prints`)[0]);
                            apparel.modPageLink(22, document.getElementsByClassName(`link-other-prints`)[1]);
                            apparel.modPageLink(23, document.getElementsByClassName(`link-other-prints`)[2]);
                            apparel.modPageLink(24, document.getElementsByClassName(`link-other-prints`)[3]);
                            apparel.modPageLink(25, document.getElementsByClassName(`link-other-prints`)[4]);
                            apparel.modPageLink(26, document.getElementsByClassName(`link-other-prints`)[5]);
                            apparel.modPageLink(27, document.getElementsByClassName(`link-other-prints`)[6]);
                        </script>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
                
@endsection