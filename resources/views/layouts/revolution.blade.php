<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/01c0eac664.js"></script>
    <link rel="stylesheet" type="text/css" href="css/revolution/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/custom.css">
</head>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
    <div class="container-fluid containercustom">  
                                            <!----Top Logo Bar---->
       <div class="container">
           <div class="row">
                <a href="#"><img src="images/revolution/logo.jpg" class="img-responsive"></a>
           </div>
       </div>
                                            <!----Navigation Bar---->
            <nav class="navbar navbar-default navcustom">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="nav navbar-nav ">
                                <li><a href="/">HOME</a></li>
                                <li><a href="/">MOTORCYCLE</a></li>
                                <li><a href="#">ABOUT</a></li>
                                <li><a href="#">PHOTO</a></li>
                                <li><a href="#">NEWS LETTER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>   
       </div>
                                                  <!---Footer---->
@yield('content')
       
</body>
</html>
