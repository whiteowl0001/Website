<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="css/code/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
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
    <body>
         <div id="main" class="full-wh">
            <div class="main-container">
                <div id="container" class="main-pane left-pane">
                    <h2>Code Example</h2>
                    <button value="HTML" onclick="Code_Display(this.value)">HTML</button>
                    <button value="CSS" onclick="Code_Display(this.value)">CSS</button>
                    <button value="Crawler" onclick="Code_Display(this.value)">Crawler</button>
                </div>
                <div class="main-pane right-pane">
                    <table id="HTML" class="js-file-line-container">
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
    </body>
</html>