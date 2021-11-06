<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Start Here -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="Md.M.H.Razib | Web Developer @ dMarkcy | Powered by Creative IT Institution">
    <!-- Bootstrap Css Start Here -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Owl Carousel Start Here -->
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.theme.default.min.css') }}">
    <!-- Nivo Slider Start Here -->
    <link rel="stylesheet" href="{{ asset('vendor/nivo-slider/nivo-slider.css') }}">
    <!-- Sal Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/sal.css') }}" type="text/css">
    <!-- Animate Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Slick Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- Meanmenu Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- All min Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Style Css Start Here -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google Font Start Here -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    @yield('heads')
    @yield('styles')
</head>

<body class="sticky-header">
    <div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="fAfsx9Wk"></script>
    <!--=====================================-->
    <!--=   Scroll-up     Start             =-->
    <!--=====================================-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!--=====================================-->
    <!--=   Preloader     Start             =-->
    <!--=====================================-->
    <div id="preloader">
        <div class="jamcoSpin"></div>
    </div>
    <div class="wrapper" id="wrapper">
        @include('components.header')
        <main>
            @yield('content')
        </main>
        <!--=====================================-->
        <!--=            Footer Start           =-->
        <!--=====================================-->
        <footer class="footer-area1">
            <div class="footer-bottom-img">
                <img class="lozad" src="{{ asset('img/figure/figure1.png') }}" alt="figure" width="309"
                    height="235">
            </div>
            <div class="footer-top-img">
                <img class="lozad" src="{{ asset('img/figure/figure2.png') }}" alt="figure" width="369"
                    height="225">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="#"><img class="lozad"
                                        src="{{ asset('img/logo/Jamco_Group_Logo.png') }}" alt="logo" width="180"
                                        height="45"></a>
                            </div>
                            <p class="text-justify">
                                As a group of company, we have an active presence through various social media.
                            </p>
                            <div class="footer-social class=" text-center"">
                                <h4 class="font-weight-bold text-white">Let's get social</h4>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/jamcogroupbd" class="fb" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#" class="twit"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="linkin"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="pint"><i class="fab fa-pinterest"></i></a>
                                        <a href="#" class="skype"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 px-3 px-md-0">
                        <div class="footer-middle">
                            <h2 class="footer-title text-white">Our Concerns</h2>
                            <div class="row pt-2">
                                <div class="col-lg-6 col-md-12">
                                    <ul class="footer-list">
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Agro Ltd
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                Doi Haat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Cafe
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Resort
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12 px-3 px-md-0">
                                    <ul class="footer-list2">
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Entertainment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Fashion
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Construction
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-angle-right">
                                                </i>
                                                JAMCO Poultry & Dairy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="footer-right">
                            <h2 class="footer-title text-white">Corporate Office</h2>
                            <p style="font-size:15px; color:#fff;">Suite - 5, Level - 15, Eastern Arzoo<br>197 (Old-61),
                                Shahid Sayed Nazrul Islam Sarani<br>Bijoynagar, Dhaka-1000, Bangladesh<br>E-mail:
                                info@jamcogroupbd.com<br>Phone: +88028392244</p>
                            {{-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                            class="fas fa-angle-right"></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="footer-right">
                            <h2 class="footer-title text-secondary">Get Updates!</h2>
                            <p>Feel free to contact us. We will be glad to hear from you.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                            class="fas fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="copyright-area">
                                <p>&copy; 2021, JAMCO Group, All Rights Reserved </p>
                                <div class="copyright-img1">
                                    <img class="lozad" src="{{ asset('img/figure/figure4.png') }}"
                                        alt="figure" width="20" height="20">
                                </div>
                                <div class="copyright-img2">
                                    <img class="lozad" src="{{ asset('img/figure/figure4.png') }}"
                                        alt="figure" width="20" height="20">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================-->
        <!--=            Offcanvas Start        =-->
        <!--=====================================-->
        <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
            <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
            <div class="offcanvas-content">
                <div class="offcanvas-logo">
                    <a href="#"><img class="lozad" src="{{ asset('img/logo/Jamco_Group_Logo.png') }}"
                            alt="Logo" width="180" height="45"></a>
                </div>
                <ul class="offcanvas-menu">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog1.html">Blog 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="service1.html">Service 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="team1.html">Team 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="offcanvas-footer">
                    <div class="item-title">Follow Us</div>
                    <ul class="offcanvas-social">
                        <li><a href="https://www.facebook.com/jamcogroupbd" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fas fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=      Header Search Start          =-->
        <!--=====================================-->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Search here..." />
                <button type="submit" class="search-btn">
                    <i class="flaticon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Jquery Js Start Here -->
    {{-- <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js Start Here -->
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Wow Js Start Here -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Owl Carousel Js Start Here -->
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Sal Js Start Here -->
    <script src="{{ asset('js/sal.js') }}"></script>
    <!-- Slick Js Start Here -->
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Nivo Js Start Here -->
    <script src="{{ asset('vendor/nivo-slider/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <!-- Meanmenu Js Start Here -->
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Circle Js Start Here -->
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <!-- M H R Loaders -->
    <script src="{{ asset('js/mhrLoader.min.js') }}"></script>
    <!-- Main Js Start Here -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
