<!DOCTYPE html>
    <html lang = "en">
        
        <head>
            <!-- Meta -->
            <meta charset = "utf-8" />
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
            <meta content = 'width=device-width, initial-scale=1.0, shrink-to-fit=no' name = 'viewport' />
            
            <link rel = "apple-touch-icon" sizes = "76x76" href = "./assets/img/apple-icon.png">
            <link rel = "icon" type = "image/png" href = "./img/logo.png">

            <title>Project E-Commerce</title>
            
            <!-- Material kit - https://www.creative-tim.com/product/material-kit-pro?partner=114912 -->
            <link rel = "stylesheet" type = "text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
            <link href = "./assets/css/material-kit.css?v=2.0.7" rel = "stylesheet" />
            
        </head>

        <body class = "sidebar-collapse">
            <!-- STYLES -->
            <style>
                /* General */
                ::selection {
                    background-color: transparent;
                }
                body {
                    cursor: default;
                }
                a:hover {
                    color: orangered;
                }
                h6 {
                    margin-top: -5px !important;
                }
                
                /* Grid systems*/
                [class*="col-"] {
                    padding-bottom: 30px;
                }
                
                /* Navigation */
                #navigation-main .navbar-brand {
                    display: flex;
                    padding: 10px 5px !important;
                }
                #navigation-main .logo-text {
                    font-size: 18px;
                    padding-left: 5px;
                }
                #navigation-main .logo-image {
                    filter: invert(1);
                    height: 46px;
                    margin-top: -6px;
                    opacity: .75;
                    overflow: hidden;
                    width: 46px;
                }
                #navigation-main .nav-link {
                    border-radius: 0;
                }
                #navigation-main .dropdown-menu {
                    border-radius: 0;
                    height: auto;
                    overflow: hidden;
                }
                #navigation-main .dropdown-menu a {
                    border-radius: 0;
                }
                #navigation-main .dropdown-menu a:hover {
                    background-color: orangered !important;
                    box-shadow: 0 4px 20px 0px rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(255 69 0 / 40%);
                }
                #navigation-main .dropdown-menu a:focus {
                    background-color: orangered !important;
                }
                #navigation-main.navbar-transparent .logo-image {
                    filter: invert(0);
                    opacity: 1;
                }
                
                /* Carousel */
                .carousel-indicators li {
                    border-radius: 0 !important;
                }
                
                /* Forms and doodads and whatnot */
                .btn {
                    border-radius: 0 !important;
                }
                .btn.btn-primary {
                    background-color: orangered !important;
                    border-color: orangered !important;
                    box-shadow: 0 2px 2px 0 rgb(255 69 0 / 14%), 0 3px 1px -2px rgb(255 69 0 / 20%), 0 1px 5px 0 rgb(255 69 0 / 12%) !important;
                }
                .btn.btn-primary:hover {
                    box-shadow: 0 14px 26px -12px rgb(255 69 0 / 42%), 0 4px 23px 0px rgb(0 0 0 / 12%), 0 8px 10px -5px rgb(255 69 0 / 20%) !important;
                }
                input.form-control {
                    background-image: linear-gradient(to top, orangered 2px, rgba(255, 69, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px) !important;
                }
                
                .card-header {
                    border-radius: 0 !important;
                }
                .card-header .nav-link {
                    border-radius: 0 !important;
                }
                .card-header-primary {
                    background: linear-gradient(60deg, rgb(255 69 0), rgb(225 39 0)) !important;
                    box-shadow: 0 5px 20px 0px rgb(0 0 0 / 20%), 0 13px 24px -11px rgb(255 69 0 / 60%) !important;
                }
                
                /* Link cards */
                .link-card{
                    display: inline-flex;
                }
                .link-card a{
                    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                    color: #000;
                    overflow: hidden;
                    width: 100%;
                }
                .link-card a:hover{
                    filter: brightness(.9);
                }

                .link-card h4 {
                    font-weight: bold;
                    padding: 0 20px;
                }
                .link-card h6 {
                    padding: 0 20px;
                }
                .link-card p {
                    padding: 0 20px 5px 20px;
                }
                .link-card img {
                    width: 100%;
                }
                
                /* Footer */
                .footer .disclaimer {
                    margin: auto;
                    max-width: 720px;
                }
                
            </style>
            
            <!-- NAVIGATION -->
            <nav class = "navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll = "100" id = "navigation-main">
                <div class = "container">
                    <!-- Brand and button -->
                    <div class = "navbar-translate">
                        <a class = "navbar-brand" href = "{{ url('/') }}">
                            <div class = "logo-image">
                                <img src = "./img/logo.png" class = "img-fluid">
                            </div>
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
                            <li class = "dropdown nav-item">
                                <a href = "#" class = "dropdown-toggle nav-link" data-toggle = "dropdown">
                                    <i class = "material-icons">apps</i> Apparel
                                </a>
                                <div class = "dropdown-menu dropdown-with-icons">
                                    <a href = "{{ url('/shirts') }}" class = "dropdown-item">Shirts</a>
                                    <a href = "{{ url('/miscellaneous') }}" class = "dropdown-item">Miscellaneous</a>
                                </div>
                            </li>
                            <li class = "dropdown nav-item">
                                <a href = "#" class = "dropdown-toggle nav-link" data-toggle = "dropdown">
                                    <i class = "material-icons">share</i> Social
                                </a>
                                <div class = "dropdown-menu dropdown-with-icons">
                                    <a href = "https://www.facebook.com/UCjaguars/" target = "_blank" class = "dropdown-item">Facebook</a>
                                    <a href = "https://twitter.com/UCJaguars" target = "_blank" class = "dropdown-item">Twitter</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- CONTENT -->
            @yield('content');
            
            <!-- FOOTER -->
            <footer class = "footer" data-background-color = "black">
                <div class = "container">
                    <p class = "disclaimer">This website is for educational purposes only as part of an internship program. It only reflects the front-end side of an e-commerce website and does not endorse any of the products listed.</p>
                    <nav>
                        <ul>
                            Quick Links |
                            <li><a href = "{{ url('/') }}">Home</a></li>
                            <li><a href = "{{ url('/changelog') }}">Changelog</a></li>
                            <li><a href = "{{ url('/about') }}">About</a></li>
                        </ul>
                    </nav>
                    <div class = "copyright">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>, Naduma Store
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
