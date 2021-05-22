@extends('/layouts/master')

    <!-- STYLES -->
    <style>
        #home-carousel {
            max-height: 960px;
            margin: 0;
            padding: 0;
            transform: translateY(-30px);
        }
        #home-carousel .card {
            border-radius: 0;
        }
        #home-carousel .carousel-item {
            background-position: center top;
            background-size: cover;
            min-height: 480px;
            max-height: 720px;
        }
        #home-carousel .carousel-item::after {
            background-image: linear-gradient(rgba(0, 0, 0, .75), transparent, rgba(0, 0, 0, .5));
            content: "";
            left: 0;
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }
        #home-carousel .d-block {
            opacity: 0;
            visibility: hidden;
        }
    </style>

@section('content')

    <!-- CAROUSEL -->
    <div id = "home-carousel" class = "container-fluid">
        <div class = "card card-raised card-carousel">
            <div id = "carouselExampleIndicators" class="carousel slide" data-ride = "carousel" data-interval = "5000">
                <ol class = "carousel-indicators">
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
                    <li data-target = "#carouselExampleIndicators" data-slide-to = "2"></li>
                </ol>
                <div class = "carousel-inner">
                    <div class = "carousel-item active" style = "background-image: url('./img/bg-1.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-1.jpg" alt = "First slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Yellowstone National Park, United States
                            </h4>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-2.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-2.jpg" alt = "Second slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Somewhere Beyond, United States
                            </h4>
                        </div>
                    </div>
                    <div class = "carousel-item" style = "background-image: url('./img/bg-3.jpg')">
                        <img class = "d-block w-100" src = "./img/bg-3.jpg" alt = "Third slide">
                        <div class = "carousel-caption d-none d-md-block">
                            <h4>
                                <i class = "material-icons">location_on</i>
                                Yellowstone National Park, United States
                            </h4>
                        </div>
                    </div>
                </div>
                <a class = "carousel-control-prev" href = "#carouselExampleIndicators" role = "button" data-slide = "prev">
                    <i class = "material-icons">keyboard_arrow_left</i>
                    <span class = "sr-only">Previous</span>
                </a>
                <a class = "carousel-control-next" href = "#carouselExampleIndicators" role = "button" data-slide = "next">
                    <i class = "material-icons">keyboard_arrow_right</i>
                    <span class = "sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>         

    <!-- MAIN CONTENT -->
    <div class = "main main-raised">
        <!-- Span 1 -->
        <div class = "section section-basic">
            <div class = "container">
                Sentence
            </div>
        </div>
    <div class="section section-tabs">
      <div class="container">
        <!--                nav tabs	             -->
        <div id="nav-tabs">
          <h3>Navigation Tabs</h3>
          <div class="row">
            <div class="col-md-6">
              <h3><small>Tabs with Icons on Card</small></h3>
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">face</i>
                            Profile
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">chat</i>
                            Messages
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">build</i>
                            Settings
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="profile">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="messages">
                      <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                    </div>
                    <div class="tab-pane" id="settings">
                      <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs with icons on Card -->
            </div>
            <div class="col-md-6">
              <h3><small>Tabs on Plain Card</small></h3>
              <!-- Tabs on Plain Card -->
              <div class="card card-nav-tabs card-plain">
                <div class="card-header card-header-danger">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#updates" data-toggle="tab">Updates</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#history" data-toggle="tab">History</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home">
                      <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                    <div class="tab-pane" id="updates">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="history">
                      <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-white">
      <div class="container">
        <!--                 nav pills -->
        <div id="navigation-pills">
          <div class="title">
            <h3>Navigation Pills</h3>
          </div>
          <div class="title">
            <h3><small>With Icons</small></h3>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <ul class="nav nav-pills nav-pills-icons" role="tablist">
                <!--
                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                            -->
                <li class="nav-item">
                  <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">dashboard</i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                    <i class="material-icons">schedule</i>
                    Schedule
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">list</i>
                    Tasks
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-space">
                <div class="tab-pane active" id="dashboard-1">
                  Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                  <br><br>
                  Dramatically visualize customer directed convergence without revolutionary ROI.
                </div>
                <div class="tab-pane" id="schedule-1">
                  Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                  <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                </div>
                <div class="tab-pane" id="tasks-1">
                  Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                  <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                    <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                    <li class="nav-item">
                      <a class="nav-link active" href="#dashboard-2" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#schedule-2" role="tab" data-toggle="tab">
                        <i class="material-icons">schedule</i>
                        Schedule
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-8">
                  <div class="tab-content">
                    <div class="tab-pane active" id="dashboard-2">
                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                      <br><br>
                      Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                    <div class="tab-pane" id="schedule-2">
                      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                      <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--                 end nav pills -->
      </div>
    </div>
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/img/bg2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection