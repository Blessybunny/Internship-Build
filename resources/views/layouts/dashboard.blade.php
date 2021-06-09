<!DOCTYPE html>
    <html lang = "en">

        <head>
            <!-- Meta -->
            <meta charset = "utf-8" />
            <meta content = 'width=device-width, initial-scale=1.0, shrink-to-fit=no' name = 'viewport' />
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
            
            <link rel = "apple-touch-icon" sizes = "76x76" href = "{{ asset('assets-material-dashboard/img/apple-icon.png') }}" />
            <link rel = "icon" type = "image/png" href = "{{ asset('img/logo.png') }}">
            <title>NADUMA Analytics - @yield('title')</title>
            
            <!-- Material Dashboard - https://www.creative-tim.com/product/material-dashboard -->
            <link rel = "stylesheet" type = "text/css" href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
            <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
            <link href = "{{ asset('assets-material-dashboard/css/material-dashboard.css') }}" rel = "stylesheet" />
            
            <!-- Custom CSS -->
            <link rel = "stylesheet/less" type = "text/css" href = "{{ asset('less/css.less') }}" />
            
        </head>

        <body>
            <div class = "wrapper">
                
                <!-- NAVIGATION -->
                <div class = "sidebar" data-color = "orange" data-background-color = "white" data-image = "{{ asset('img/misc-2.jpg') }}">
                    <div class = "logo">
                        <a href = "#" class = "simple-text logo-normal">NADUMA Analytics</a>
                    </div>
                    <div class = "sidebar-wrapper">
                        <ul class = "nav">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "{{ url('/') }}">
                                    <i class = "material-icons">store</i>
                                    <p>Back To Store</p>
                                </a>
                            </li>
                            <li class = "nav-item @yield('link-1')">
                                <a class = "nav-link" href = "{{ url('/statistics') }}">
                                    <i class = "material-icons">insights</i>
                                    <p>Statistics</p>
                                </a>
                            </li>
                            <li class = "nav-item @yield('link-2')">
                                <a class = "nav-link" href = "{{ url('/statistics/inventory-apparels') }}">
                                    <i class = "material-icons">inventory</i>
                                    <p>Inventory - Apparels</p>
                                </a>
                            </li>
                            <li class = "nav-item @yield('link-3')">
                                <a class = "nav-link" href = "{{ url('/statistics/inventory-materials') }}">
                                    <i class = "material-icons">inventory</i>
                                    <p>Inventory - Materials</p>
                                </a>
                            </li>
                            <li class = "nav-item @yield('link-4')">
                                <a class = "nav-link" href = "{{ url('/statistics/orders') }}">
                                    <i class = "material-icons">local_shipping</i>
                                    <p>Order Logs</p>
                                </a>
                            </li>
                            <li class = "nav-item @yield('link-5')">
                                <a class = "nav-link" href = "{{ url('/statistics/sandbox') }}">
                                    <i class = "material-icons">widgets</i>
                                    <p>DB Sandbox</p>
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
                
                <!-- MAIN CONTENT -->
                <div class = "main-panel">
                    @yield('content')
                    
                    <!-- NAVIGATION TOGGLE -->
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
                    
                    <!-- FOOTER -->
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
                
            </div>
        </body>
        
        <!-- Material Dashboard - https://www.creative-tim.com/product/material-dashboard -->
        <!--  Core JS Files  -->
        <script src = "{{ asset('assets-material-dashboard/js/core/jquery.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/core/popper.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/core/bootstrap-material-design.min.js') }}"></script>
        <script src = "{{ asset('assets-material-dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        
        <!-- Plugin for the momentJs  -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/moment.min.js') }}"></script>
        
        <!-- Plugin for Sweet Alert -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/sweetalert2.js') }}"></script>
        
        <!-- Forms Validations Plugin -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/jquery.validate.min.js') }}"></script>
        
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
        
        <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/bootstrap-selectpicker.js') }}"></script>
        
        <!-- Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
        
        <!-- DataTables.net Plugin, full documentation here: https://datatables.net/ -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/jquery.dataTables.min.js') }}"></script>
        
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/bootstrap-tagsinput.js') }}"></script>
        
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/jasny-bootstrap.min.js') }}"></script>
        
        <!-- Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/fullcalendar.min.js') }}"></script>
        
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/jquery-jvectormap.js') }}"></script>
        
        <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/nouislider.min.js') }}"></script>
        
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        
        <!-- Library for adding dinamically elements -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/arrive.min.js') }}"></script>
        
        <!-- Google Maps Plugin -->
        <script src = "https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        
        <!-- Chartist JS -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/chartist.min.js') }}"></script>
        
        <!-- Notifications Plugin -->
        <script src = "{{ asset('assets-material-dashboard/js/plugins/bootstrap-notify.js') }}"></script>
        
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src = "{{ asset('assets-material-dashboard/js/material-dashboard.js') }}" type = "text/javascript"></script>
        
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src = "{{ asset('assets-material-dashboard/demo/demo.js') }}"></script>
        
        <!-- Material Dashboard Custom Demo -->
        <script>
            $(document).ready(function() {
              $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                  if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                  }

                }

                $('.fixed-plugin a').click(function(event) {
                  // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                  if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                      event.stopPropagation();
                    } else if (window.event) {
                      window.event.cancelBubble = true;
                    }
                  }
                });

                $('.fixed-plugin .active-color span').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('color');

                  if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                  }

                  if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                  }

                  if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                  }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                  $(this).siblings().removeClass('active');
                  $(this).addClass('active');

                  var new_color = $(this).data('background-color');

                  if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                  }
                });

                $('.fixed-plugin .img-holder').click(function() {
                  $full_page_background = $('.full-page-background');

                  $(this).parent('li').siblings().removeClass('active');
                  $(this).parent('li').addClass('active');


                  var new_image = $(this).find("img").attr('src');

                  if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                      $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                      $sidebar_img_container.fadeIn('fast');
                    });
                  }

                  if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                      $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                      $full_page_background.fadeIn('fast');
                    });
                  }

                  if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  }

                  if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                  }
                });

                $('.switch-sidebar-image input').change(function() {
                  $full_page_background = $('.full-page-background');

                  $input = $(this);

                  if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                      $sidebar_img_container.fadeIn('fast');
                      $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                      $full_page_background.fadeIn('fast');
                      $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                  } else {
                    if ($sidebar_img_container.length != 0) {
                      $sidebar.removeAttr('data-image');
                      $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                      $full_page.removeAttr('data-image', '#');
                      $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                  }
                });

                $('.switch-sidebar-mini input').change(function() {
                  $body = $('body');

                  $input = $(this);

                  if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                  } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                      $('body').addClass('sidebar-mini');

                      md.misc.sidebar_mini_active = true;
                    }, 300);
                  }

                  // we simulate the window Resize so the charts will get updated in realtime.
                  var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                  }, 180);

                  // we stop the simulation of Window Resize after the animations are completed
                  setTimeout(function() {
                    clearInterval(simulateWindowResize);
                  }, 1000);

                });
              });
            });
          </script>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();
            });
        </script>
        
        <!-- Less JS -->
        <script src = "{{ asset('js/less.js') }}" type = "text/javascript"></script>
        
</html>