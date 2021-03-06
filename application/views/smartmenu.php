<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Smash - Bootstrap Business Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png'); ?>" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/LineIcons.css') ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/default.css') ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url('assets/images/logo.svg') ?>" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#team">Team</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>


                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn???t get results. Happiness guaranteed!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Graphics Design</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"></i>
                                <img class="shape" src="<?= base_url('assets/images/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Website Design</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-layout"></i>
                                <img class="shape" src="<?= base_url('assets/images/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Digital Marketing</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="<?= base_url('assets/images/f-shape-1.svg') ?>" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
            <!-- r2 -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/01.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/02.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/03.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/04.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/05.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/06.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/07.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single-features mt-40">
                        <div>
                            <img src="<?= base_url('/assets/images/smartmenu/08.png') ?>" alt="">
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== FEATRES TWO PART ENDS ======-->


    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="<?= base_url('assets/images/logo.svg') ?>" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@uideck.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/modernizr-3.7.1.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url('assets/js/ajax-contact.js') ?>"></script>

    <!--====== Isotope js ======-->
    <script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/scrolling-nav.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>