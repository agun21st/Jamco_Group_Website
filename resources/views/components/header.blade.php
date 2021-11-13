<!--=====================================-->
<!--=            Header Start           =-->
<!--=====================================-->
<header class="header">
    <div id="header-topbar" class="header-topbar-layout1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="topbar-left">
                        <p class="item-paragraph">A Vanguard of Prosperity</p>
                        <div class="header-button">
                            <a href="{{ url('/about-us') }}">Get Connected <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="topbar-right">
                        <ul>
                            <li class="topbar-social">
                                <div class="social-icon">
                                    <a href="https://www.facebook.com/jamcogroupbd" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-right-button">
                            <a href="{{ url('/contact-us') }}" class="header-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area">
                        <a href="{{ url('/') }}" class="temp-logo">
                            <img src="{{ asset('img/logo/Jamco_Group_Logo.png') }}" width="180" height="45" alt="logo"
                                class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 d-flex justify-content-end position-static">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="#">Sister Concerns</a>
                                <ul class="dropdown-menu-col-1">
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-cafe-and-restaurant') }}">JAMCO Cafe and Restaurant</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-entertainment') }}">JAMCO
                                            Entertainment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-agro-limited') }}">JAMCO
                                            Agro Limited</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-construction') }}">JAMCO Construction</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-fashion') }}">JAMCO Fashion</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/jamco-resort') }}">JAMCO Resort</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sister-concerns/doi-haat') }}">Doi Haat</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-3 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul>
                            {{-- <li class="search-btn">
                                <a href="#header-search" title="Search">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li> --}}
                            <li class="header-number">
                                <div class="media">
                                    <div class="item-icon">
                                        <i class="far fa-comments"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="item-label">Hotline Number</div>
                                        <div class="item-number"><a data-global="phone" id="" href="tel:+88028392244" title="Call us now" role="button" data-track-event="click" data-track-action="phone_link" style="text-decoration: none; color: #000000">02-8392244</a></div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="offcanvas-menu-trigger-wrap">
                                <button type="button" class="offcanvas-menu-btn menu-status-open">
                                    <span class="btn-icon-wrap">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
