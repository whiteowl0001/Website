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
    <link href="css/code/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/ad5057c19b.js"></script>
    <!-- =======================================================
        Theme Name: Laura
        Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
     <script>
        function Code_Display(language){
            if( language == 'HTML'){
                if(document.getElementById("HTML").style.display == 'none'){
                    document.getElementById("HTML").style.display = 'block';
                    document.getElementById("CSS").style.display = 'none';
                    document.getElementById("Crawler").style.display = 'none';

                }
            }else if( language == 'CSS'){
                if(document.getElementById("CSS").style.display == 'none'){
                document.getElementById("HTML").style.display = 'none';
                document.getElementById("CSS").style.display = 'block';
                document.getElementById("Crawler").style.display = 'none';
                
                }
            }else{
                document.getElementById("HTML").style.display = 'none';
                document.getElementById("CSS").style.display = 'none';
                document.getElementById("Crawler").style.display = 'block';
            }
        };
        </script>
     
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top hidden">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand wow fadeIn delay-05s" href="#">Kevin</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active wow fadeIn delay-05s"><a href="/">Home</a></li>
                <li class="wow fadeIn delay-05s"><a href="#skills ">Skills</a></li>
                <li class="wow fadeIn delay-05s"><a href="#main-portfolio">Portfolio</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner-text hidden">
                <h2 class="h2-fade wow fadeIn delay-05s">Hello</h2>
                <h3 class="wow fadeIn delay-05s">I'M Kevin Morales</h3>
                <p class="wow fadeIn delay-05s">And I'M A Full Stack<br>Web Developer</p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
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
    <script>

      $(function(){
        setTimeout(function(){
        $('.navbar').removeClass('hidden');
        }, 3000);
        
      }) ();
    </script>
     <script>
      $(function(){
        setTimeout(function(){
        $('.banner-text').removeClass('hidden');
        }, 1000);
        
      }) ();
    </script>
  </body>
</html>