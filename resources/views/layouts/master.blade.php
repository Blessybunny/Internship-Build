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
            <link href = "./assets/css/material-kit.css?v=2.0.7" rel = "stylesheet" />
            
        </head>

        <body class = "sidebar-collapse">
            <!-- STYLES -->
            <style>
                /* General */
                ::selection{
                    background-color: transparent;
                }
                body {
                    cursor: default;
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
                    width: 46px;
                    height: 46px;
                    overflow: hidden;
                    margin-top: -6px;
                }
                #navigation-main.navbar-transparent .logo-image {
                    filter: invert(0);
                    opacity: 1;
                }
                #navigation-main .logo-image {
                    filter: invert(1);
                    opacity: .75;
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
                            <div class = "logo-text">OPALESCENCE</div>
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
                                    <a href = "#" class = "dropdown-item">Shirt</a>
                                    <a href = "#" class = "dropdown-item">Pants</a>
                                    <a href = "#" class = "dropdown-item">Miscellaneous</a>
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
                    <nav class = "float-left">
                        <ul>
                            <li><a href = "{{ url('/changelog') }}">Changelog</a></li>
                            <li><a href = "{{ url('/about') }}">About</a></li>
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
