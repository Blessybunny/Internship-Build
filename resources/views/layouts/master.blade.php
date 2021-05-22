<!DOCTYPE html>
    <html lang = "en">
        
        <head>
            <!-- Meta -->
            <meta charset = "utf-8" />
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
            <meta content = 'width=device-width, initial-scale=1.0, shrink-to-fit=no' name = 'viewport' />
            
            <link rel = "apple-touch-icon" sizes = "76x76" href = "./assets/img/apple-icon.png">
            <link rel = "icon" type="image/png" href = "./assets/img/favicon.png">

            <title>Project E-Commerce</title>
            
            <!-- Material kit - https://www.creative-tim.com/product/material-kit-pro?partner=114912 -->
            <link rel = "stylesheet" type = "text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
            <link href = "./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
        </head>

        <body class = "sidebar-collapse">
            <!-- NAVIGATION -->
            <nav class = "navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll = "100" id = "navigation-main">
                <div class = "container">
                    <!-- Brand and button -->
                    <div class = "navbar-translate">
                        <a class = "navbar-brand" href = "{{ url('/') }}">Project E-Commerce</a>
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
                            <li class = "dropdown nav-item">
                                <a href = "#" class = "dropdown-toggle nav-link" data-toggle = "dropdown">
                                    <i class = "material-icons">apps</i> Apparel
                                </a>
                                <div class = "dropdown-menu dropdown-with-icons">
                                    <a href = "#" class = "dropdown-item">Shirt</a>
                                    <a href = "#" class = "dropdown-item">Pants</a>
                                    <a href = "#" class = "dropdown-item">Miscellaneous</a>
                                </div>
                            </li>
                            <li class = "dropdown nav-item">
                                <a href = "#" class = "dropdown-toggle nav-link" data-toggle = "dropdown">
                                    <i class = "material-icons">archive</i> Other
                                </a>
                                <div class = "dropdown-menu dropdown-with-icons">
                                    <a href = "{{ url('/changelog') }}" class = "dropdown-item">Changelog</a>
                                    <a href = "{{ url('/about') }}" class = "dropdown-item">About</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
  
            <!-- CONTENT -->
            @yield('content');
            
            <!-- MIGRATE THESE -->
            
            
            
            
            
            <!-- FOOTER -->
            <footer class = "footer" data-background-color = "black">
                <div class = "container">
                    <nav class = "float-left">
                        <ul>
                            <li><a href = "#">Footlink 1</a></li>
                            <li><a href = "#">Footlink 2</a></li>
                            <li><a href = "#">Footlink 3</a></li>
                            <li><a href = "#">Footlink 4</a></li>
                        </ul>
                    </nav>
                    <div class = "copyright float-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                    </div>
                </div>
            </footer>

        </body>

        <!-- Material kit - https://www.creative-tim.com/product/material-kit-pro?partner=114912 -->
        <script src = "./assets/js/core/jquery.min.js" type = "text/javascript"></script>
        <script src = "./assets/js/core/popper.min.js" type = "text/javascript"></script>
        <script src = "./assets/js/core/bootstrap-material-design.min.js" type = "text/javascript"></script>
        <script src = "./assets/js/plugins/moment.min.js"></script>
        <script src = "./assets/js/plugins/bootstrap-datetimepicker.js" type = "text/javascript"></script>
        <script src = "./assets/js/plugins/nouislider.min.js" type = "text/javascript"></script>
        <script src = "./assets/js/material-kit.js?v=2.0.7" type = "text/javascript"></script>
        <script>
            $(document).ready(function() {
                //init DateTimePickers
                materialKit.initFormExtendedDatetimepickers();

                // Sliders Init
                //materialKit.initSliders();
            });
        </script>

</html>
