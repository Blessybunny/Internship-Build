@extends('/layouts/master')

@section('content')        

    <!-- ABOUT -->
    <script>
        window.alert(`If you somehow managed to find this page, I only gave myself the credit because I am confident to say that I WORKED ON THIS WEBSITE ALONE.`)
    </script>
    <div class = "profile-page">
        <div class = "page-header header-filter" data-parallax = "true" style = "background-image: url('./img/bg-8.jpg');"></div>
            <div class = "main">
                <div class = "profile-content">
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-md-5 ml-auto mr-auto">
                                <div class = "profile">
                                    <div class="avatar">
                                        <img src = "./img/portrait-1.jpg" alt = "Circle Image" class = "img-raised rounded-circle img-fluid">
                                    </div>
                                    <div class = "name">
                                        <h3 class = "title">Mark Joseph Alamag</h3>
                                        <h6>Website Designer</h6>
                                        <a href = "https://www.facebook.com/markjoseph.alamag.33/" target = "_blank" class = "btn btn-just-icon btn-link btn-facebook"><i class = "fa fa-facebook"></i></a>
                                        <a href = "https://www.reddit.com/user/Blessybunny" target = "_blank" class = "btn btn-just-icon btn-link btn-reddit"><i class = "fa fa-reddit"></i></a>
                                    </div>
                                    <div class = "description text-center">
                                        <p>A web developer and designer and a vector artist. Finds a good way to spend time during quarantine.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
    </div>

@endsection