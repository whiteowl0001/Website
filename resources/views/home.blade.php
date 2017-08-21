@extends('layouts.master1')
@section('content')

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
    <section id="main-portfolio" class="no-padding">
        <h1>PORTFOLIO</h1>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-3 col-sm-6">
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
                <div class="col-lg-3 col-md-3 col-sm-6">
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
                <div class="col-lg-3 col-md-3 col-sm-6">
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
                <div class="col-lg-3 col-md-3 col-sm-6">
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