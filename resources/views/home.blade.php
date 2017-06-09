@extends('layouts.master1')
@section('content')
<!--Portfolio-->  
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
                             <img src="images/css3.jpeg">
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
                              <img src="images/seo-logo.png">
                                <h4>
                                    <strong>Seo</strong>
                                </h4>
                                <p>Intergrate Seo strategies into code.</p>
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
@stop