<!DOCTYPE html>
    <html lang = "en">
        
        <head>
            <!-- Meta -->
            <meta charset = "utf-8" />
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
            <meta content = 'width=device-width, initial-scale=1.0, shrink-to-fit=no' name = 'viewport' />
            
            <link rel = "apple-touch-icon" sizes = "76x76" href = "{{ asset('assets-material-kit/img/apple-icon.png') }}" />
            <link rel = "icon" type = "image/png" href = "{{ asset('img/logo.png') }}" />

            <title>@yield('title')</title>
            
            <!-- Material kit - https://www.creative-tim.com/product/material-kit-pro?partner=114912 -->
            <link rel = "stylesheet" type = "text/css" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
            <link href = "{{ asset('assets-material-kit/css/material-kit.css') }}" rel = "stylesheet" />
            
            <!-- Custom CSS -->
            <link rel = "stylesheet/less" type = "text/css" href = "{{ asset('less/css.less') }}" />
            
        </head>

        <body class = "sidebar-collapse">
            
            <!-- NAVIGATION -->
            <nav class = "navbar fixed-top navbar-expand-lg" id = "navigation-main">
                <div class = "container">
                    <!-- Brand and button -->
                    <div class = "navbar-translate">
                        <a class = "navbar-brand" href = "{{ url('/') }}">
                            <div class = "logo-text">NADUMA.STORE</div>
                        </a>
                        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" aria-expanded = "false" aria-label = "Toggle navigation">
                            <span class = "sr-only">Toggle navigation</span>
                            <span class = "navbar-toggler-icon"></span>
                            <span class = "navbar-toggler-icon"></span>
                            <span class = "navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <!-- Links -->
                    <div class = "collapse navbar-collapse">
                        <ul class = "navbar-nav ml-auto">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "{{ url('/') }}">
                                    <i class = "material-icons">home</i> Home
                                </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "{{ url('/apparels') }}">
                                    <i class = "material-icons">store</i> Apparels
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- CONTENT -->
            @yield('content')
            
            <!-- FOOTER -->
            <footer class = "footer">
                <div class = "container">
                    <p>
                        This website is for educational purposes only as part of an internship program. It only reflects the general idea and
                        functionalities of both the front-end and back-end sides of an e-commerce website.
                        <br/>
                        <br/>
                        &copy; <script>document.write(new Date().getFullYear())</script>, Naduma Store
                    </p>
                </div>
            </footer>

        </body>
        
        <!-- Material kit - https://www.creative-tim.com/product/material-kit-pro?partner=114912 -->
        <script src = "{{ asset('assets-material-kit/js/core/jquery.min.js') }}" type = "text/javascript"></script>
        <script src = "{{ asset('assets-material-kit/js/core/popper.min.js') }}" type = "text/javascript"></script>
        <script src = "{{ asset('assets-material-kit/js/core/bootstrap-material-design.min.js') }}" type = "text/javascript"></script>
        <script src = "{{ asset('assets-material-kit/js/plugins/moment.min.js') }}"></script>
        <script src = "{{ asset('assets-material-kit/js/plugins/bootstrap-datetimepicker.js') }}" type = "text/javascript"></script>
        <script src = "{{ asset('assets-material-kit/js/plugins/nouislider.min.js') }}" type = "text/javascript"></script>
        <script src = "{{ asset('assets-material-kit/js/material-kit.js') }}" type = "text/javascript"></script>
        
        <!-- Less JS -->
        <script src = "{{ asset('js/less.js') }}" type = "text/javascript"></script>
</html>