<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Toddy - Juego</title>
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
    <body id="bg_jue" style="overflow-x:hidden;">

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="load">
        </div>

        <div id="wrap">

            <div class="container-fluid">
                <!--NAV-->
                <header class="row-fluid inner_nav">
                    
                    <div class="cont_inner_nav hidden-phone">
                        
                        <div class="span2">
                        
                            <a href="./"><img src="img/logo_toddy.png" alt=""/></a>

                        </div>
                        <nav class="span5 offset1 nav_prin">

                            <ul class="unstyled nav nav-pills">
                                <li class="pull-left"><a href="productos.php">productos</a></li>
                                <li class="divider-vertica"><img src="img/sepa_menu2.png" alt=""/></li>
                                <li class="pull-left"><a href="juego.php">juego</a></li>
                                <li class="divider-vertical"><img src="img/sepa_menu2.png" alt=""/></li>
                                <li class="pull-left"><a href="comic.php">comic</a></li>
                            </ul>

                        </nav>

                        <div class="span4 text-center">
                            
                            <ul class="unstyled nav_soci">
                                <li class="pull-left" style="font-size:11px;width:65px;padding-top:4px;">Síguenos en</li>
                                <li class="pull-left red_tw"><a href="https://twitter.com/toddy_cl" target="_blank"></a></li>
                                <li class="pull-left red_fb"><a href="https://www.facebook.com/ToddyChile" target="_blank"></a></li>
                                <li class="pull-left red_yt"><a href="http://www.youtube.com/user/toddychile?feature=watch" target="_blank"></a></li>
                            </ul>

                        </div>

                    </div>
                    
                    <div class="row-fluid cont_nav_ph hidden-desktop hidden-tablet">
                        
                        <div class="span12 text-center">
                            
                            <div class="icon_ph-nav">
                                
                                <a id="simple-menu2" href="#sidr" class="pull-right" style="margin-right:10px"><img src="img/icon_ph_nav.png" alt=""></a>

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
                <div class="row-fluid hidden-phone">
                    <div class="span12 text-center" style="margin-top:10%">

                        <div class="cont_jue">
                            <img src="img/cont_jue.png" alt=""/>
                        </div>

                        <div class="row-fluid">
                            <div class="span12">
                                <div class="cont_btn_game hidden-phone">
                                    <a href="https://itunes.apple.com/cl/app/lanza-toddy/id589880354?mt=8" target="_blank"><img src="img/btn_appst.png" alt="" class="pull-left"/></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.toddy.lanzatoddy" target="_blank"><img src="img/btn_play.png" alt="" class="pull-left"/></a>
                                </div>
                                <div class="cont_btn_game hidden-desktop hidden-tablet">
                                    <a href="http://www.lanzatoddy.cl" target="_blank"><img src="img/btn_appst.png" alt="" class="pull-left"/></a>
                                    <a href="http://www.lanzatoddy.cl" target="_blank"><img src="img/btn_play.png" alt="" class="pull-left"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                                         
                </div>

                 <a href="http://www.lanzatoddy.cl" target="_blank" class="text-center hidden-desktop hidden-tablet" style="display:block;width:100%;height:100%;"><img src="img/cont_juego_ph.png" alt="" style="margin-top:30px;"/></a>

                <div class="clearfix" style="height:70px"></div>
            </div> <!-- /container -->

        </div>
        
        <footer class="footer-fix bg_inner_footer">
            
            <div class="row-fluid">

                <p class="span12 text-center" style="font-size:10px;padding-top:10px;">® Copyright PepsiCo 2013 - Todos los derechos reservados.</p>

            </div>
            <div class="clearfix"></div> 
        </footer>

		<!--script-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script charset="utf-8" src="twitter/jquery.tweet.js"></script>
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
