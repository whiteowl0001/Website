<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kevin Morales Web Developer</title>
    <meta name="description" content="Free Lance Web Developer">
    <meta name="keywords" content="kevin morales, web developer">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="css/Portfolio/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Portfolio/css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/Portfolio/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Portfolio/development.css">
    <script src="https://use.fontawesome.com/ad5057c19b.js"></script>
    <!-- =======================================================
        Theme Name: Laura
        Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Kevin</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right ">
                <li class="navbar-border active"><a href="/">Home</a></li>
                <li class="navbar-border"><a href="#skills">Skills</a></li>
                <li class="navbar-border"><a href="#main-portfolio">Portfolio</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 wow fadeIn delay-05s">
              <div class="banner-text">
                <h3>Web Design <span>and</span> Development</h3>
                <p>Bring your <br>Web Developer</p>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      <div id="about">
        <div class="container">
          <h1>We Build Online Pressense For Your Company.</h1> 
          <h3>How? By using latest tequniques.</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-md-offset-1 about-description">
              <a href="#" class="about-card">
                <div class="card-icon">
              <i class="fa fa-code fa-4x" aria-hidden="true"></i>
              <p>Web Development</p>
                              </div>

              </a>
            </div>
            <div class="col-md-3 col-md-offset-1 about-description">
              <a href="#" class="about-card">
                <div class="card-icon">
                <i class="fa fa-search fa-4x" aria-hidden="true"></i>
                <p>Search Engnine Optimization</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-md-offset-1 about-description">
              <a href="#" class="about-card">
                <div class="card-icon">
                <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>
                <p>Mobile Responsive</p>
                </div>

              </a>
            </div>
          </div>
        </div>
      </div>
      <section id="main-portfolio" class="no-padding">
    <h1>PORTFOLIO</h1>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-box" data-toggle="modal" data-src="./assets/deer.jpg">
                        <img src="img/portfolio/lone.png" class="img-responsive" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <a href="/lone-wolf">Lone Wolf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-box" data-toggle="modal" data-src="./assets/beach.jpg">
                        <img src="img/portfolio/Painting.png" class="img-responsive" alt="Image 2">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <a href="/mybiz">Painting</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">
                        <img src="img/portfolio/Roof.png" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                   <a href="/roofing">Roofing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">
                        <img src="img/portfolio/superformance.png" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                   <a href="/superformance">Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      @yield('content')
      <!--Footer-->
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
          <div class="col-md-6">
              <div class="footer">
                  © Copyright Kevin Theme. All Rights Reserved
                    <div class="credits">
                        Designed by <a href="#">Kevin Morales</a>
                    </div>
              </div>
          </div>
          <!--
          <div class="col-md-6 text-right">
              <ul class="social-list">
                  <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-github"></i>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-google-plus"></i>
                      </a>
                  </li>
              </ul>
          </div>
          -->
      </div>
      <!--end row-->
    </div>
  </footer>
  
    <script src="js/portfolio/js/jquery.min.js"></script>
    <script src="js/portfolio/js/jquery.easing.min.js"></script>
    <script src="js/portfolio/js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/portfolio/js/wow.js"></script>
    <script src="js/portfolio/js/custom.js"></script>
    <!--<script src="contactform/contactform.js"></script>-->
    
  </body>
</html>