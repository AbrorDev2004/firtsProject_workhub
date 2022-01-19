
<!doctype html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Workhub.uz</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
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

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#service">Services</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="{{ asset('images/banner/shape/shape-1.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="{{ asset('images/banner/shape/shape-2.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="{{ asset('images/banner/shape/shape-3.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="{{ asset('images/banner/shape/shape-2.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="{{ asset('images/banner/shape/shape-1.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="{{ asset('images/banner/shape/shape-4.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="{{ asset('images/banner/shape/shape-5.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="{{ asset('images/banner/shape/shape-3.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="{{ asset('images/banner/shape/shape-6.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="{{ asset('images/banner/shape/shape-3.png')}}" alt="Shape">
            </div> <!-- header shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h1 class="title">{{ $home[0]['title_1'] }}</h1>
                            <h4 class="sub-title">{{ $home[0]['title_2'] }}</h4>
                            <p>{{ $home[0]['description'] }}</p>
                            <a class="main-btn" href="#work">{{ $home[0]['button_name'] }}</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="header-image d-none d-lg-block">
                            <img src="{{ voyager::image($home[0]['image']) }}" alt="hero">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="{{ $home[0]['facebook'] }}"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="{{ $home[0]['instagram'] }}"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="{{ $home[0]['youtube'] }}"><i class="lni-youtube"></i></a></li>
                                    <li><a href="{{ $home[0]['telegram'] }}"><i class="lni-telegram"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

                <!--====== ABOUT PART START ======-->
                    @yield('content')
                <!--====== ABOUT PART ENDS ======-->


    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="{{ asset('images/logo-2.png')}}" alt="Logo">
                            </a>
                            <p class="mt-">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul>
                                <li><a href="{{ $home[0]['facebook'] }}"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="{{ $home[0]['instagram'] }}"><i class="lni-instagram-original"></i></a></li>
                                <li><a href="{{ $home[0]['youtube'] }}"><i class="lni-youtube"></i></a></li>
                                <li><a href="{{ $home[0]['telegram'] }}"><i class="lni-telegram"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © 2022. Template Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->







    <!--====== jquery js ======-->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Parallax js ======-->
    <script src="{{ asset('js/parallax.min.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>


    <!--====== Appear js ======-->
    <script src="{{ asset('js/jquery.appear.min.js')}}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{ asset('js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>


    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
