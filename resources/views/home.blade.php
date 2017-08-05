@extends('layouts.master1')
@section('content')
<!--Portfolio-->  
<!-- Button trigger modal -->

      <div id="about">
        <div class="container">
          <h1>I Build Online Pressense For Your Company.</h1> 
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-md-offset-1 about-description">
                <a class="about-card">
                    <div class="card-icon"> 
                    <span class="fa-stack fa-3x">
                      <i class="fa fa-circle fa-stack-2x"></i>                                            
                      <i class="fa fa-code fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                      <h3>Web Development</h3>
                      <p>Incorporate HTML 5 and CSS 3 for front end development and PHP for backend dynamic sites.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-md-offset-1 about-description">
              <a class="about-card">
                <div class="card-icon">
                     <span class="fa-stack fa-3x">
                      <i class="fa fa-circle fa-stack-2x"></i>                                            
                      <i class="fa fa-search fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                <h3>SEO</h3>
                <p>Find the best keywords for your buisness and tie them to tilte, headers, and meta tags in html code.</p>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-md-offset-1 about-description">
              <a  class="about-card">
                <div class="card-icon">
                     <span class="fa-stack fa-3x">
                      <i class="fa fa-circle fa-stack-2x"></i>                                            
                      <i class="fa fa-mobile fa-stack-1x fa-inverse" aria-hidden="true"></i>
                    </span>
                <h3>Mobile Responsive</h3>
                <p>Unitilze Bootstrap to create mobile friendly websites.</p>
                </div>

              </a>
            </div>
          </div>
        </div>
      </div>
<!--
<div id="skills" class="home">
    <h1>SKILLS</h1>
        <div class="container">
               <div class="row text-center">
                       <div class="col-md-4 col-md-6">
                              <img src="images/html5.png">
                                <h4>
                                    <strong>Html 5</strong>
                                </h4>
                                <p>Structure Webpages with html 5.</p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                             <img src="images/css3.png">
                                <h4>
                                    <strong>CSS 3</strong>
                                </h4>
                                <p>Custom CSS files</p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                                <img src="images/bootstrap.png">
                                <h4>
                                    <strong>Bootstrap</strong>
                                </h4>
                                <p>Incorporate Bootstrap for mobile responsive features.</p>
                        </div>
                         <div class="col-md-4 col-sm-6">
                                <img src="images/laravel.png">
                                <h4>
                                    <strong>Laravel</strong>
                                </h4>
                                <p>Experience with Laravel php framework.</p>
                        </div>
                          <div class="col-md-4 col-sm-6">
                                <img src="images/mysql.png">
                                <h4>
                                    <strong>MySql</strong>
                                </h4>
                                <p>Utilize MySql Database.</p>
                        </div>
                         <div class="col-md-4 col-md-6">
                              <img src="images/wordpress-logo.png">
                                <h4>
                                    <strong>WordPress</strong>
                                </h4>
                                <p>Customize Wordpress Themes.</p>
                        </div>
                </div>
            </div>
</div>
-->
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
@stop