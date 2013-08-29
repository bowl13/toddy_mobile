<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Toddy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="favicon.ico" rel="icon" type="image/x-icon" />

        <!--meta facebook-->
        <meta property="og:url" content="http://fb.bowl.cl/fbprub/"/>
        <meta property="og:title" content="TITULO PROYECTO"/>
        <meta property="og:description" content="DESCRIPCION APP FACEBOOK"/>
        <meta property="og:site_name" content="PROYECTO"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.sidr.light.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="bg_all">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="load">
        </div>

        <div id="wrap">

            <div class="container-fluid adapt_index">

                <!--NAV-->
                <header class="row-fluid cont_nav">

                    <div class="hidden-phone" style="position:relative;z-index:999;">
                        
                        <div class="span3">
                        
                            <a href="./"><img src="img/logo_toddy.png" alt=""/></a>

                        </div>
                        <nav class="span6 nav_prin">

                            <ul class="unstyled nav nav-pills">
                                <li class="pull-left"><a href="productos.php">productos</a></li>
                                <li class="divider-vertica"><img src="img/sepa_menu.png" alt=""/></li>
                                <li class="pull-left"><a href="juego.php">juego</a></li>
                                <li class="divider-vertical"><img src="img/sepa_menu.png" alt=""/></li>
                                <li class="pull-left"><a href="comic.php">comic</a></li>
                            </ul>

                        </nav>

                        <div class="span3 text-center">
                            
                            Síguenos en

                            <ul class="unstyled nav_soci">
                                <li class="pull-left red_tw"><a href="https://twitter.com/toddy_cl" target="_blank"></a></li>
                                <li class="pull-left red_fb"><a href="https://www.facebook.com/ToddyChile" target="_blank"></a></li>
                                <li class="pull-left red_yt"><a href="http://www.youtube.com/user/toddychile?feature=watch" target="_blank"></a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="row-fluid cont_nav_ph hidden-desktop hidden-tablet">
                        
                        <div class="span12 text-center">
                            
                            <div class="icon_ph-nav">
                                
                                <a id="simple-menu" href="#sidr" class="pull-right" style="margin-right:10px"><img src="img/icon_ph_nav.png" alt=""></a>

                                <div id="sidr">
                                  <!-- Your content -->
                                  <ul>
                                    <li><a href="productos_01.php">Toddy pa’ la sed</a></li>
                                    <li class="active"><a href="productos_02.php">Toddy pal bajón</a></li>
                                    <li><a href="productos_03.php">Toddy pal antojo</a></li>
                                    <li><a href="juego.php">Juego</a></li>
                                  </ul>
                                </div>

                            </div>
                            <a href="./"><img src="img/logo_toddy.png" alt="" style="max-width:121px;margin-left:50px;"/></a>

                        </div>

                    </div>
                    
                </header>

                <!--SLIDE-->
                <div class="row-fluid">
                    <div class="span12">
                        
                        <div id="promos" class="carousel slide carousel-fade hidden-phone">
                            
                            <div class="carousel-inner text-center">
                                <div class="active item"><a href="bases/bases_surlat.pdf"><img src="img/destacados/banner05-trans.png" alt=""></a></div>
                                <div class="item"><a href="form_2.php"><img src="img/destacados/banner001-trans.png" alt=""/></a></div>
                                <div class="item"><a href="https://www.facebook.com/ToddyChile/app_117826741748880" target="_blank"><img src="img/destacados/banner01-trans.png" alt=""/></a></div>
                                <div class="item"><a href="juego.php"><img src="img/destacados/banner02-trans.png" alt=""></a></div>
                                <div class="item"><a href="comic.php"><img src="img/destacados/banner03-trans.png" alt=""></a></div>
                            </div>
                            
                            <a class="carousel-control left" href="#promos" data-slide="prev"></a>
                            <a class="carousel-control right" href="#promos" data-slide="next"></a>

                        </div>

                        <div id="promos_2" class="carousel slide carousel-fade hidden-desktop hidden-tablet">
                            
                            <div class="carousel-inner text-center">
                                
                                <div class="active item">
                                    <a href="bases/bases_surlat.pdf"><img src="img/ph_promo_05.jpg" alt=""/></a>
                                </div>

                                <div class="item">
                                    <a href="form_2.php"><img src="img/ph_promo_01.jpg" alt=""/></a>
                                </div>
                                
                                <div class="item">
                                    <a href="https://www.facebook.com/ToddyChile" target="_blank"><img src="img/ph_promo_02.jpg" alt=""/></a>
                                </div>

                                <div class="item">
                                    <a href="http://www.lanzatoddy.cl" target="_blank"><img src="img/ph_promo_03.jpg" alt=""/></a>
                                </div>

                            </div>


                            <a class="carousel-control left" href="#promos_2" data-slide="prev"></a>
                            <a class="carousel-control right" href="#promos_2" data-slide="next"></a>

                        </div>

                    </div>
                </div>

            </div> <!-- /container -->

            <div id="push" class="hidden-phone"></div>

        </div>
        
        <footer class="footer-fix container-fluid hidden-phone">
            
            <div class="row-fluid"  style="max-width:940px;margin:0 auto;padding-top:40px;">

                <div class="span12">

                    <div class="row-fluid">
                        <div class="span3 pull-left">
                        
                            <a href="productos_01.php"><img src="img/pro_01.png" alt=""/></a>

                        </div>
                        <div class="span3 pull-left">
                            
                                <a href="productos_02.php"><img src="img/pro_02.png" alt=""/></a>

                        </div>
                        <div class="span3 pull-left">

                            <a href="productos_03.php"><img src="img/pro_03.png" alt=""/></a>

                        </div>
                        <div class="span3 pull-left">
                         <span style="color:red;">Ultimos</span> Comentarios
<div id="ticker">
                            
<a class="twitter-timeline" href="https://twitter.com/toddy_cl" data-widget-id="328843131174912003" data-theme="dark" data-link-color="#fff" data-chrome="noheader nofooter transparent noborders"  data-related="twitterapi,twitter" data-aria-polite="assertive" width="100" height="100" lang="ES" >Tweets por @toddy_cl</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                            </div>
                            
                        </div>
                    </div>

                    <div class="row-fluid">
                        <p class="span12 text-center" style="font-size:10px;padding-top:5px;">® Copyright PepsiCo 2013 - Todos los derechos reservados.</p>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>

        </footer>
        
        <footer class="hidden-desktop hidden-tablet footer_ph">
            
            <div class="row-fluid">

                <p class="span12 text-center" style="font-size:9px !important;padding-top:10px;">® Copyright PepsiCo 2013 - Todos los derechos reservados.</p>

            </div>

        </footer>

		<!--script-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.sidr.js"></script>

		<!--google analytics-->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-40636158-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>
