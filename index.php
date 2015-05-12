<!DOCTYPE html>
<html ng-app="siteApp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Casamento de Diana &amp; Andr&eacute;">
        <title>Diana &amp; Andr&eacute;</title>

        <!-- Bootstrap -->
        <link href="css/libs/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Superslides CSS -->
        <link href="css/superslides.css" rel="stylesheet">

        <!-- Countdown CSS -->
        <link href="css/countdown.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Serif%7CEngagement%7COpen+Sans:800" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">

        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >

        <a id="home"></a>

        <!-- ========== BANNER START ========== -->

        <div id="slides">
            <div class="slides-container">
                <img src="images/banner/1.jpg" alt="" />
                <img src="images/banner/2.jpg" alt="" />
                <img src="images/banner/3.jpg" alt="" />
                <img src="images/banner/4.jpg" alt="" />
                <img src="images/banner/5.jpg" alt="" />
            </div>
            <div class="tint">
                <div class="welcome text-center" data-scroll-reveal="enter from the top after 2s">
                    <h1>Diana &amp; Andr&eacute;</h1>
                    <p class="data-do-casamento"><span>29 de outubro de 2015</span></p>
                    <br/><br/>
                    <p><span class='traco'></span><i class="fa fa-heart"></i><span class='traco'></span></p>
                    <br/><br/>
                    <p><span>Muitos planos há no coração do homem,</span></p>
                    <p><span>mas o desígnio do Senhor, esse permanecerá</span></p>
                    <p class='referencia'><span>Provérbios 19:21</span></p>
                </div>
            </div>
            <div class="countdown" data-scroll-reveal="enter from the bottom after 2.5s"></div>
        </div>

        <!-- ========== BANNER END ========== -->

        <!-- ========== MENU START ========== -->

        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand gold">Di &amp; D&eacute;</h2>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#os-noivos">Noivos</a></li>
                        <li><a href="#os-padrinhos">Padrinhos</a></li>
                        <!--
                        <li><a href="#confirmar-presenca">Confirmar Presen&ccedil;a</a></li>
                        <li><a href="#onde-acontecera">Local</a></li>
                        <li><a href="#nossas-fotos">Fotos</a></li>
                        <li><a href="lista-de-presentes">Lista de Presentes</a></li>
                        <li><a href="mensagem-aos-noivos">Mensagem aos Noivos</a></li>
                        -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- ========== MENU END ========== -->

        <!-- ========== ABOUT US START ========== -->

        <a id="os-noivos"></a>
        <section id="about">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12 heading" data-scroll-reveal>
                        <h2>Ele &amp; Ela</h2>
                        <p><span></span><i class="fa fa-heart"></i><span></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" data-scroll-reveal="enter from the left">
                        <img src="images/de.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
                        <h5>Andr&eacute; Casimiro</h5>
                        <p>o n&uacute;mero dela</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/ah.casimiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
                    </div>
                    <div class="col-sm-6" data-scroll-reveal="enter from the right after 0.5s">
                        <img src="images/di.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
                        <h5>Diana Yamashiro</h5>
                        <p>perfeitinha pra ele</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/diana.yamashiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== PADRINHOS ========== -->

        <a id="os-padrinhos"></a>
        <section id="padrinhos">
            <div class="container text-center">
                <div class="col-sm-12 heading" data-scroll-reveal>
                    <h2>Nossa riqueza</h2>
                    <p><span></span><i class="fa fa-heart"></i><span></span></p>
                </div>
                <div class="row">
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                        <div class="testimony">
                            <h4>Gu &amp; Cris<i class="fa fa-arrow-up"></i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/rafa_e_la.jpg" class="img-responsive"/>
                        <div class="testimony">
                            <h4>Rafa &amp; Lá<i class="fa fa-arrow-up"></i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/kk_e_pri.jpg" class="img-responsive"/>
                        <div class="testimony">
                            <h4>Carlinhos &amp; Pri<i class="fa fa-arrow-up"></i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/rodrigo_e_mari.jpg" class="img-responsive"/>
                        <div class="testimony">
                            <h4>Rodrigo &amp; Mari<i class="fa fa-arrow-up"></i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_ka.jpg" class="img-responsive"/>
                        <div class="testimony">
                            <h4>Gustavo &amp; Karla<i class="fa fa-arrow-up"></i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-sm-4" data-scroll-reveal="enter from the left">
                        <img src="images/padrinhos/gu_e_cris.jpg" class="img-responsive"/>
                    </div>
                </div>
                    <!--
                    <div class="col-sm-6" data-scroll-reveal="enter from the left">
                        <img src="images/de.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
                        <h5>Andr&eacute; Casimiro</h5>
                        <p>o n&uacute;mero dela</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/ah.casimiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
                    </div>
                    <div class="col-sm-6" data-scroll-reveal="enter from the right after 0.5s">
                        <img src="images/di.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
                        <h5>Diana Yamashiro</h5>
                        <p>perfeitinha pra ele</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/diana.yamashiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                    -->
                </div>
            </div>
        </section>

        <!-- ========== FOOTER START ========== -->

        <footer>
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12" data-scroll-reveal>
                        Footer text
                    </div>
                </div>
            </div>
        </footer>

        <!-- ========== FOOTER END ========== -->

        <!-- Modernizr Plugin -->
        <script src="js/libs/modernizr.custom.97074.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/libs/jquery-1.10.2.min.js"></script>

        <!-- Bootstrap Plugins -->
        <script src="js/libs/bootstrap.min.js"></script>

        <!-- Retina Plugin -->
        <script src="js/libs/retina-1.1.0.min.js"></script>

        <!-- Superslides Plugin -->
        <script src="js/libs/jquery.easing.1.3.js"></script>
        <script src="js/libs/jquery.animate-enhanced.min.js"></script>
        <script src="js/libs/jquery.superslides.js"></script>

        <!-- Countdown Plugin -->
        <script src="js/libs/jquery.plugin.min.js"></script>
        <script src="js/libs/jquery.countdown.min.js"></script>

        <!-- Scrolly Plugin -->
        <script src="js/libs/jquery.scrolly.js"></script>

        <!-- CountTo Plugin -->
        <script src="js/jquery.countTo.js"></script>

        <!-- Owl Carousel Plugin -->
        <script src="js/libs/owl.carousel.js"></script>

        <!-- Fancybox Plugin -->
        <script src="js/libs/jquery.fancybox.js"></script>

        <!-- Scroll Reveal Plugin -->
        <script src="js/libs/scrollReveal.js"></script>

        <!-- jQuery Settings -->
        <script src="js/settings.js"></script>

        <script src="js/libs/angular.min.js"></script>
        <script src="js/libs/angular-route.min.js"></script>
        <script src="js/libs/angular-sanitize.min.js"></script>
        <script src="js/controller.js"></script>

        <script src="js/animation.js"></script>

    </body>
</html>