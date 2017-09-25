@extends('layouts.master1')
@section('content')
<script>
     function Display_Project(language){
            if( language == 'lone'){
                if(document.getElementById("lone").style.display == 'none'){
                    document.getElementById("lone").style.display = 'block';
                    document.getElementById("lawyer").style.display = 'none';
                    document.getElementById("super").style.display = 'none';
                    document.getElementById("lauren").style.display = 'none';

                }
            }else if( language == 'lawyer'){
                if(document.getElementById("lawyer").style.display == 'none'){
                document.getElementById("lone").style.display = 'none';
                document.getElementById("lawyer").style.display = 'block';
                document.getElementById("super").style.display = 'none';
                document.getElementById("lauren").style.display = 'none';

                }
            }else if( language == 'super'){
                if(document.getElementById("super").style.display == 'none'){
                document.getElementById("lone").style.display = 'none';
                document.getElementById("lawyer").style.display = 'none';
                document.getElementById("super").style.display = 'block';
                document.getElementById("lauren").style.display = 'none';
                }
            }else if( language == 'lauren'){
                if(document.getElementById("lauren").style.display == 'none'){
                document.getElementById("lone").style.display = 'none';
                document.getElementById("lawyer").style.display = 'none';
                document.getElementById("super").style.display = 'none';
                document.getElementById("lauren").style.display = 'block';
            }else
                document.getElementById("HTML").style.display = 'none';
                document.getElementById("CSS").style.display = 'none';
                document.getElementById("Crawler").style.display = 'block';
                }
        };
</script>
  <section id="skills">
        <div id="main" class="full-wh">
            <div class="main-container">
                <div id="container" class="main-pane left-pane">
                    <h2>Example Code</h2>
                    <button value="HTML" onclick="Code_Display(this.value)">HTML</button>
                    <button value="CSS" onclick="Code_Display(this.value)">CSS</button>
                    <button value="Crawler" onclick="Code_Display(this.value)">Crawler</button>
                </div>
                <div class="col-md-6 col-sm-6 main-pane right-pane">
                    <h2>Code</h2>
                    <table id="HTML" class=" js-file-line-container">
                        <tbody>
                            <tr>
                                <td id="LC5" class="blob-code js-file-line">
                                </td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> <</span><span class="pl-s">header</span> id="home"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">     <</span><span class="pl-s">div</span> class="bg-color"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         <</span><span class="pl-s">section</span> class="top-nav hidden-xs"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">             <</span><span class="pl-s">div</span> class="container"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                 <</span><span class="pl-s">div</span> class="row"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                     <</span><span class="pl-s">div</span> class="col-md-6"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                         <</span><span class="pl-s">div</span> class="top-left"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                             <</span><span class="pl-s">p></span>Address 4578 Marmora Road, Glasgow, D04 89GR<span class="pl-k"><</span><span class="pl-k">/p></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                         <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                     <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                     <</span><span class="pl-s">div</span> class="col-md-6"<span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                         <</span><span class="pl-s">div</span> class="top-right"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                              <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                             <</span><span class="pl-s">ul</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                                 <</span><span class="pl-s">li></span><span class="pl-k"><</span><span class="pl-s">a</span> href="#"<span class="pl-k">></span><span class="pl-k"><</span><span class="pl-s">i</span> class="fa fa-2x fa-facebook" aria-hidden="true"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                             <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                                 <</span><span class="pl-s">li></span><span class="pl-k"><</span><span class="pl-s">a</span> href="#"<span class="pl-k">></span><span class="pl-k"><</span><span class="pl-s">i</span> class="fa fa-2x fa-twitter" aria-hidden="true"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                             <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                                 <</span><span class="pl-s">li></span><span class="pl-k"><</span><span class="pl-s">a</span> href="#"<span class="pl-k">></span><span class="pl-k"><</span><span class="pl-s">i</span> class="fa fa-2x fa-linkedin" aria-hidden="true"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                             <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                                 <</span><span class="pl-s">li></span><span class="pl-k"><</span><span class="pl-s">a</span> href="#"<span class="pl-k">></span><span class="pl-k"><</span><span class="pl-s">i</span> class="fa fa-2x fa-vk" aria-hidden="true"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                             <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                                 <</span><span class="pl-s">li></span><span class="pl-k"><</span><span class="pl-s">a</span> href="#"<span class="pl-k">></span><span class="pl-k"><</span><span class="pl-s">i</span> class="fa fa-2x fa-instagram" aria-hidden="true"<span class="pl-k">></span></td>
                                </td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                             <</span><span class="pl-s">/ul</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                         <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                     <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                 <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">             <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         <</span><span class="pl-s">/section</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">     <</span><span class="pl-s">/div</span><span class="pl-k">></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> <</span><span class="pl-s">/header</span><span class="pl-k">></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="CSS" style="display: none;" class="js-file-line-container">
                        <tbody>
                            <tr>
                                <td id="LC5" class="blob-code js-file-line">
                                </td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> #slider</span><span class="pl-s"> .caption</span> {<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span>     position: absolute;<br>     width: 100%;<br>     top: 50%;<br>     text-align: center;<br>     left: auto !important;<br>     padding-top: 260px;<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span> }<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> #slider</span><span class="pl-s"> .caption h1</span> {<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span>     font-size: 110px;<br>     color: white;<br>     font-family: "Playfair Display","Times New Roman",Times,serif;<br>     left: auto !important;<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span> }<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> #slider</span><span class="pl-s"> .caption button</span> {<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span>     font-family: 'Josefin Sans', sans-serif;<br>     font-weight: 700;<br>     font-size: 17px;<br>     margin-top: 20px;<br>     background-color: #cca776;<br>     color: #fff;<br>     border: 1px solid #000;<br>     width: auto;<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"></span><span class="pl-s"></span> }<span class="pl-k"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="Crawler" style="display: none;" class="js-file-line-container">
                        <tbody>
                            <tr>
                                <td id="LC5" class="blob-code js-file-line">
                                </td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> public function</span><span class="pl-s"> Ebay_WebCrawler()</span> {<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $url</span> = <span class="pl-s">file_get_contents</span>('http://www.ebay.com/sch/i.html?_from=R40&_trksid=p2050601.m570.l1313.TR0.TRC0.H0.Xsnes+games+donkey+kong+country.TRS0&_nkw=snes+games+donkey+kong+country&_sacat=0');<br><span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $dom</span> = <span class="pl-s">new</span> \domDocument;<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         libxml_use_internal_errors</span>(<span class="pl-s">true</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $dom-></span><span class="pl-s"></span>preserveWhiteSpace<span class="pl-k"> = false</span>;</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $dom-></span><span class="pl-s"></span>loadHTML(<span class="pl-k">$url</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $prices = $dom-></span><span class="pl-s"></span>getElementsByTagName(<span class="pl-k">'li'</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $images = $dom-></span><span class="pl-s"></span>getElementsByTagName(<span class="pl-k">'image'</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         $titles = $dom-></span><span class="pl-s"></span>getElementsByTagName(<span class="pl-k">'title'</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         foreach</span><span class="pl-s"></span> (<span class="pl-s">$images as $img</span>) {<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                 $image = $img-></span><span class="pl-s"></span>getAttribute(<span class="pl-k">'src'</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                 $title = $img-></span><span class="pl-s"></span>getAttribute(<span class="pl-k">'alt'</span>);</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">                 echo </span><span class="pl-s"></span>"Title: <span class="pl-k">$title </span><<span class="pl-k"></span>img src=".<span class="pl-k">$img-></span>getAttribute(<span class="pl-k">'src'</span>).">";<span class="pl-k"></span></td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s">         </span>{</td>
                            </tr>
                            <tr>
                                <td id="LC6" class="blob-code js-file-line"><span class="pl-s"> </span>{</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="main-portfolio">
        <div id="main" class="full-wh">
            <div class="main-container">
                <div id="lone">
                    <div id="container" class="main-pane left-pane">
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
                    <div class="col-md-6 col-sm-6 main-pane right-pane">
                        <div class="Porfolio-Buttons">
                                <button class="btn" value="" onclick="Display_Project(this.value)"><</button>
                            <div class="button-next">
                                <button  class="btn button-next" value="lawyer" onclick="Display_Project(this.value)">></button>
                            </div>
                        </div>
                        <div class="js-file-line-container project_description">
                            <h2>About</h2>
                            <p>Lone Wolf was a personal site that was create in Laravel. This site contatined a content managment system that allowed the owner to create,
                             delete, and edit product descriptions.</p>
                            <h2>Tags</h2>
                            <ul class="menu-tags">
                                <li>Laravel</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>MySql</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                <div id="lawyer" style="display: none;">
                    <div id="container" class="main-pane left-pane">
                        <div class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">
                        <img src="img/portfolio/lawyer.png" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                   <a href="/lawyer">Lawyer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-6 main-pane right-pane">
                        <div class="Porfolio-Buttons">
                                <button class="btn" value="lone" onclick="Display_Project(this.value)"><</button>
                            <div class="button-next">
                                <button class="btn button-next" value="super" onclick="Display_Project(this.value)">></button>
                            </div>
                        </div>
                        <div class="js-file-line-container project_description">
                            <h2>About</h2>
                            <p>This site was created to showcase the desired look a contracting client wanted for a lawfirm. 
                            </p>
                            <h2>Tags</h2>
                            <ul class="menu-tags">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>Javascript</li>
                                <li>JQuery</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="super" style="display: none;">
                    <div id="container" class="main-pane left-pane">
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
                    <div class="col-md-6 col-sm-6 main-pane right-pane">
                        <div class="Porfolio-Buttons">
                                <button class="btn" value="lawyer" onclick="Display_Project(this.value)"><</button>
                            <div class="button-next">
                                <button class="btn button-next" value="lauren" onclick="Display_Project(this.value)">></button>
                            </div>
                        </div>
                        <div class="js-file-line-container project_description">
                            <h2>About</h2>
                            <p></p>
                            <h2>Tags</h2>
                             <ul class="menu-tags">
                                <li>Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="lauren" style="display: none;">
                    <div id="container" class="main-pane left-pane">
                         <div class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">
                        <img src="images/squarespace/lauren.png" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                   <a href="https://www.laurenstotalwellness.com">Lauren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-6 main-pane right-pane">
                        <div class="Porfolio-Buttons">
                                <button class="btn" value="lawyer" onclick="Display_Project(this.value)"><</button>
                            <div class="button-next">
                                <button class="btn button-next" value="lone" onclick="Display_Project(this.value)">></button>
                            </div>
                        </div>
                        <div class="js-file-line-container project_description">
                            <h2>About</h2>
                            <p>Client was a personal wellness expert and wanted a Squarespace site to showcase her skills and 
                            wellness package options. Site included contact form, and blog creation.</p>
                            <h2>Tags</h2>
                            <ul class="menu-tags">
                                <li>Squarespace</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        
    </section>
@stop
