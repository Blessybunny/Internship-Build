<!DOCTYPE html>
    <html lang = "en">

        <head>
            <!-- Meta -->
            <meta charset = "utf-8" />
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
            <meta content = 'width=device-width, initial-scale=1.0, shrink-to-fit=no' name = 'viewport' />
            
            <link rel = "apple-touch-icon" sizes = "76x76" href = "{{ asset('assets-material-dashboard/img/apple-icon.png') }}" />
            <link rel = "icon" type = "image/png" href = "{{ asset('img/logo.png') }}" />
            
            <title>NADUMA Analytics - @yield('title')</title>
            
            <!-- Material Dashboard - https://www.creative-tim.com/product/material-dashboard -->
            <link rel = "stylesheet" type = "text/css" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
            <link href = "{{ asset('assets-material-dashboard/css/material-dashboard.css') }}" rel = "stylesheet" />
            
            <!-- Custom CSS -->
            <link rel = "stylesheet/less" type = "text/css" href = "{{ asset('less/css.less') }}" />
            
        </head>

        <body class = "wrapper">
                
            <!-- NAVIGATION -->
            <div class = "sidebar dashboard" data-background-color = "white" data-image = "{{ asset('img/misc-2.jpg') }}">
                <!-- Logo -->
                <div class = "logo">
                    <a href = "#" class = "simple-text logo-normal">NADUMA Analytics</a>
                </div>
                <!-- Links -->
                <div class = "sidebar-wrapper">
                    <ul class = "nav">
                        <li class = "nav-item">
                            <a class = "nav-link" href = "{{ url('/') }}">
                                <i class = "material-icons">store</i>
                                <p>Back To Store</p>
                            </a>
                        </li>
                        <li class = "nav-item @yield('link-1')">
                            <a class = "nav-link" href = "{{ url('/dashboard') }}">
                                <i class = "material-icons">insights</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class = "nav-item @yield('link-2')">
                            <a class = "nav-link" href = "{{ url('/dashboard/inventory-apparels') }}">
                                <i class = "material-icons">inventory</i>
                                <p>Inventory - Apparels</p>
                            </a>
                        </li>
                        <li class = "nav-item @yield('link-3')">
                            <a class = "nav-link" href = "{{ url('/dashboard/inventory-materials') }}">
                                <i class = "material-icons">inventory</i>
                                <p>Inventory - Materials</p>
                            </a>
                        </li>
                        <li class = "nav-item @yield('link-4')">
                            <a class = "nav-link" href = "{{ url('/dashboard/order-logs') }}">
                                <i class = "material-icons">local_shipping</i>
                                <p>Order Logs</p>
                            </a>
                        </li>
                        <li class = "nav-item active-pro">
                            <a class = "nav-link" href = "{{ url('/changelog') }}">
                                <i class = "material-icons">list_alt</i>
                                <p>Changelog</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CONTENT -->
            <div class = "main-panel">
                @yield('content')

                <!-- Navigation Toggle -->
                <nav class = "navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                    <div class = "container-fluid">
                        <div class = "navbar-wrapper">
                            <div class = "navbar-brand">@yield('title')</div>
                        </div>
                        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" aria-controls = "navigation-index" aria-expanded = "false" aria-label = "Toggle navigation">
                            <span class = "sr-only">Toggle navigation</span>
                            <span class = "navbar-toggler-icon icon-bar"></span>
                            <span class = "navbar-toggler-icon icon-bar"></span>
                            <span class = "navbar-toggler-icon icon-bar"></span>
                        </button>
                    </div>
                </nav>

                <!-- Footer -->
                <footer class = "footer">
                    <div class = "container">
                        <p>
                            <br/>
                            This website is for educational purposes only as part of an internship program. It only reflects the general idea and
                            functionalities of both the front-end and back-end sides of an e-commerce website.
                            <br/>
                            <br/>
                            &copy; <script>document.write(new Date().getFullYear())</script>, Naduma Store
                        </p>
                    </div>
                </footer>

            </div>
                
        </body>
        
        <!-- Material Dashboard - https://www.creative-tim.com/product/material-dashboard -->
        <!--  Core JS Files  -->
        <script src = "{{ asset('assets-material-dashboard/js/core/jquery.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/core/popper.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/core/bootstrap-material-design.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src = "{{ asset('assets-material-dashboard/js/material-dashboard.js') }}" type = "text/javascript"></script>
        
        <!-- Less JS -->
        <script src = "{{ asset('js/less.js') }}" type = "text/javascript"></script>
        
</html>