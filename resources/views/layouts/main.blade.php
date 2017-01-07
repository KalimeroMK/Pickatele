<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Pickatale</title>
    <meta name="description" content="">
    <meta name="author" content="Martin Karadzinov">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/fav.png">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,400italic,800bold" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/assets/fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/assets/css/animations.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/assets/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="/assets/plugins/morphext/morphext.css" rel="stylesheet">
    <link href="/assets/js/slider-input/dist/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet">

    <!-- The Project core CSS file -->
    <link href="/assets/css/style.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="/css/style.css" rel="stylesheet">

    @include('admin.scripts.block')
</head>

<body class="no-trans front-page transparent-header gradient-background-header page-loader-3">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">


        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header fixed dark clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="/"><img id="logo_img" src="/assets/images/logo.png" alt="Pickatale"/>
                                </a>
                            </div>

                            <!-- top navigation -->
                            <ul class="nav top-nav navbar-right visible-md visible-lg">
                                <li>
                                    <a class="top-nav-link" href="http://abale.com">Sign in</a>
                                </li>
                                <li>
                                    <a class="top-nav-link" href="http://abale.com">Get Started</a>
                                </li>
                                <li>
                                    <a class="top-nav-link" href="http://abale.com">EN <i style="color: #a8a8a8" class="fa fa-chevron-down"></i></a>
                                </li>
                            </ul>

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-12">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            @yield('mainmenu')
                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->
</div>

@yield('content')
<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer class="clearfix dark">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="top">
            <div class="container">
                <div class=”row”>
                    <div class="col-sm-4 col-xs-12 helpful-links">
                        <h6 class="section-header">Helpful Links</h6>
                        <ul class="pull-left">
                            <li><a href="http://abale.com">Book Library</a></li>
                            <li><a href="http://abale.com">Parents</a></li>
                            <li><a href="http://abale.com">Educators</a></li>
                            <li><a href="http://abale.com">Partner</a></li>
                        </ul>
                        <ul class="pull-right" style="margin-right:20px">
                            <li><a href="/careers">Career</a></li>
                            <li><a href="http://abale.com">Company and Team</a></li>
                            <li><a href="http://abale.com">Blog</a></li>
                            <li><a href="http://abale.com">Help Center</a></li>
                            <li><a href="/terms">Terms and Conditions</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/copyright-policy">Copyright Policy</a></li>
                            <li><a href="/about">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h6 class="section-header">Help Center</h6>
                        <p class="qa">Q: Lorem ipsum dolor sit amet, adipiscing elit. <br>Lorem ipsum dolor<br>
                            A: Lorem ipsum dolor sit amet, consectetur adipiscing</p>


                        <p class="qa">Q: Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                            A: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <a class="btn custom-btn pink-btn">Help Center</a>
                    </div>
                    <div class="col-sm-4 col-xs-12 follow-us">
                        <h6 class="section-header">Follow us</h6>
                        <ul class="social-icons">
                            <li style="padding-left:0px;">
                                <a href="http://facebook.com">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://twitter.com">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://tumblr.com">
                                    <i class="fa fa-tumblr"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://instagram.com">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://linkedin.com">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="store-links">
                            <li style="padding-left:0px;">
                                <a href="http://apple.com">
                                    <img src="/assets/images/apple-store.png">
                                </a>
                            </li>
                            <li>
                                <a href="http://google.com">
                                    <img src="/assets/images/google-store.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="bottom">
                <div class="container">
                    <div class=”row”>
                        <div class="col-sm-4 col-xs-6">
                            <div>
                                <a href="/">
                                    <img id="logo_img" src="/assets/images/logo-footer.png"
                                                  alt="Pickatale"/>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <p>City Mall Tower<br>
                                Skopje, Macedonia</p>


                            <p>contact@pickatale.com</p>
                        </div>


                        <div class="col-sm-4 col-xs-6 col-xs-offset-6">
                            <p>&copy; 2016 Pickatale. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

    </div>

</footer>
<!-- footer end -->


</div>
<!-- page-wrapper end -->


<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/assets/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/assets/plugins/modernizr.js"></script>
<!-- Fullpage javascript -->
<script type="text/javascript" src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/assets/plugins/fullpage/jquery.fullpage.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/assets/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/assets/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/assets/plugins/jquery.validate.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>

<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


<!-- Background Video -->
<script src="/assets/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
<!-- Pace javascript -->
<script type="text/javascript" src="/assets/plugins/pace/pace.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/assets/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/assets/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/assets/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/assets/js/custom.js"></script>
<script type="text/javascript" src="/assets/js/slider-input/dist/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="/assets/js/pickatale.js"></script>

</body>
</html>
