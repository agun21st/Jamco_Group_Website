@extends('layouts.master')
@section('title')
    Jamco Group | Home
@endsection
@section('heads')
@endsection
@section('content')
    <!--=====================================-->
    <!--=            Slider Start           =-->
    <!--=====================================-->
    <div class="slider-area slider-layout1">
        <div class="slider-bg-img1" data-sal="zoom-in" data-sal-duration="1500" data-sal-delay="300">
            <img src="{{ asset('img/figure/figure96.png') }}" alt="figure">
        </div>
        <div class="slider-bg-img2">
            <img src="{{ asset('img/figure/figure97.png') }}" alt="figure" data-sal="slide-up" data-sal-duration="1300"
                data-sal-delay="700">
        </div>
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-1" class="slides">
                <img src="{{ asset('img/slider/slider1.webp') }}" alt="slider" width="1920" height="720"
                    title="#slider-direction-1" />
                <img src="{{ asset('img/slider/slider2.webp') }}" alt="slider" width="1920" height="720"
                    title="#slider-direction-2" />
                <img src="{{ asset('img/slider/slider1.webp') }}" alt="slider" width="1920" height="720"
                    title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <p class="item-subtitle">Find The Right Way</p>
                            <h2 class="item-title">Business Solutions For All Enterprises</h2>
                            <div class="item-paragraph">Bhen an unknown printer took a galley of type and scrambled
                                ype specimen book. It has survived .</div>
                            <ul class="item-btn">
                                <li><a href="service1.html">Free Consulting<i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                                <li><a href="#" class="circle-btn"><span class="circle-icon"><i
                                                class="fas fa-play-circle"></i>Watch The Video</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <p class="item-subtitle">Find The Right Way</p>
                            <h2 class="item-title">Business Solutions For All Enterprises</h2>
                            <div class="item-paragraph">Bhen an unknown printer took a galley of type and scrambled
                                ype specimen book. It has survived .</div>
                            <ul class="item-btn">
                                <li><a href="service2.html">Free Consulting<i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                                <li><a href="#" class="circle-btn"><span class="circle-icon"><i
                                                class="fas fa-play-circle"></i>Watch The Video</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <p class="item-subtitle">Find The Right Way</p>
                            <h2 class="item-title">Business Solutions For All Enterprises</h2>
                            <div class="item-paragraph">Bhen an unknown printer took a galley of type and scrambled
                                ype specimen book. It has survived .</div>
                            <ul class="item-btn">
                                <li><a href="service1.html">Free Consulting<i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                                <li><a href="#" class="circle-btn"><span class="circle-icon"><i
                                                class="fas fa-play-circle"></i>Watch The Video</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=            Financo Start          =-->
    <!--=====================================-->
    {{-- <section class="financo-activities-wrap1">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="financo-activities-box1">
                        <div class="item-img-round">
                            <img src="{{ asset('img/figure/figure39.png') }}" alt="figure" height="81" width="81">
                            <div class="item-img">
                                <img src="{{ asset('img/figure/figure41.png') }}" alt="figure" height="45" width="47">
                            </div>
                        </div>
                        <h2 class="heading-title"><a href="service1.html">Business Consulting</a></h2>
                        <p>Business whenknown printer aretook galley of type and scrambled make type specimen book.
                        </p>
                        <div class="item-button">
                            <a href="single-service1.html" class="item-btn">+ <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="financo-activities-box1">
                        <div class="item-img-round">
                            <img src="{{ asset('img/figure/figure39.png') }}" alt="figure" height="81" width="81">
                            <div class="item-img">
                                <img src="{{ asset('img/figure/figure42.png') }}" alt="figure" height="41" width="45">
                            </div>
                        </div>
                        <h2 class="heading-title"><a href="service1.html">Financial Planning</a></h2>
                        <p>Business whenknown printer aretook galley of type and scrambled make type specimen book.
                        </p>
                        <div class="item-button">
                            <a href="single-service2.html" class="item-btn">+ <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="financo-activities-box1 financo-activities-box3">
                        <div class="item-img-round">
                            <img src="{{ asset('img/figure/figure39.png') }}" alt="figure" height="81" width="81">
                            <div class="item-img">
                                <img src="{{ asset('img/figure/figure43.png') }}" alt="figure" height="45" width="49">
                            </div>
                        </div>
                        <h2 class="heading-title"><a href="service1.html">Investment Security</a></h2>
                        <p>Business whenknown printer aretook galley of type and scrambled make type specimen book.
                        </p>
                        <div class="item-button">
                            <a href="single-service1.html" class="item-btn">+ <span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================-->
    <!--=            About-finnaco Start    =-->
    <!--=====================================-->
    <section class="about-finnaco-wrap1">
        <div class="background-shape6">
            <img class="lozad" data-src="{{ asset('img/figure/figure32.png') }}" alt="figure" width="404"
                height="216">
        </div>
        <div class="background-shape7">
            <img class="lozad" data-src="{{ asset('img/figure/figure29.png') }}" alt="figure" width="747"
                height="256">
        </div>
        <div class="background-shape8">
            <img class="lozad" data-src="{{ asset('img/figure/figure33.png') }}" alt="figure" width="783"
                height="439">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="about-box1">
                        <p class="section-subtitle">About Jamco Group</p>
                        <h2 class="section-title">Doing The Right Thing At The Right Time</h2>
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only
                            five centuries.Lorem adipiscg incididuntlabore dolor ipsum dolor sit amet, consectetur.
                        </p>
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure30.png') }}" alt="figure"
                                    width="47" height="71">
                            </div>
                            <div class="media-body">
                                <h3 class="heading-title"><a href="#">Financing Business</a></h3>
                                <p>Bookan unknown printer took a galley type and scrambled.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure31.png') }}" alt="figure"
                                    width="51" height="66">
                            </div>
                            <div class="media-body">
                                <h3 class="heading-title"><a href="#">Yearly Calculation</a></h3>
                                <p>Bookan unknown printer took a galley type and scrambled.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-box2">
                        <div class="about-img">
                            <img class="lozad" data-src="{{ asset('img/about/about1.png') }}" alt="figure"
                                width="465" height="596">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Consulting Start       =-->
    <!--=====================================-->
    <section class="consulting-service-wrap1">
        <div class="container">
            <p class="section-subtitle">What We Do</p>
            <div class="row">
                <div class="col-lg-5">
                    <div class="consulting-service1">
                        <h2 class="section-title">Our Business & Financial Consulting Services</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="consulting-service2">
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only
                            five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor
                            incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="consulting-service3" height="299">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure18.png') }}"
                                    alt="figure" width="87" height="95">
                                <div class="service-img">
                                    <img class="lozad" data-src="{{ asset('img/figure/figure46.png') }}"
                                        alt="service" width="86" height="94">
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="title-heading"><a href="service1.html">Market Research</a></h3>
                                <p>Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore
                                    doloripsum dolor sit amet, consectetur.</p>
                                <div class="item-button">
                                    <a href="service1.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consulting-service3" height="299">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure21.png') }}"
                                    alt="figure" width="76" height="93">
                                <div class="service-img service-img2">
                                    <img class="lozad" data-src="{{ asset('img/figure/figure47.png') }}"
                                        alt="service" width="76" height="93">
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="title-heading"><a href="service1.html">Investment Trading</a></h3>
                                <p>Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore
                                    doloripsum dolor sit amet, consectetur.</p>
                                <div class="item-button">
                                    <a href="service1.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consulting-service3" height="299">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure21.png') }}"
                                    alt="figure" width="76" height="93">
                                <div class="service-img service-img3">
                                    <img class="lozad" data-src="{{ asset('img/figure/figure47.png') }}"
                                        alt="service" width="76" height="93">
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="title-heading"><a href="service1.html">Financial Analysis</a></h3>
                                <p>Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore
                                    doloripsum dolor sit amet, consectetur.</p>
                                <div class="item-button">
                                    <a href="service1.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consulting-service3" height="299">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure20.png') }}"
                                    alt="figure" width="78" height="94">
                                <div class="service-img service-img4">
                                    <img class="lozad" data-src="{{ asset('img/figure/figure49.png') }}"
                                        alt="service" width="78" height="94">
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="title-heading"><a href="service1.html">Taxation Planning</a></h3>
                                <p>Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor incididuntlabore
                                    doloripsum dolor sit amet, consectetur.</p>
                                <div class="item-button">
                                    <a href="service1.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Progress-bar Start      =-->
    <!--=====================================-->
    {{-- <section class="progress-bar-wrap1">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12">
                    <div class="progress-bar-box1 progress-bar-box3">
                        <h2 class="section-title">Our Expertise & Skills to All Business</h2>
                        <p> when an unknown printer took a galley of type and scrambled make a type specimen book.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="progress-box">
                                    <div class="circle-progress" data-value="0.95">
                                        <span></span>
                                        <label>Investment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="progress-box">
                                    <div class="circle-progress" data-value="0.95">
                                        <span></span>
                                        <label>Projects</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="progress-bar-box2 progress-bar-box3">
                        <div class="background-image5">
                            <img class="lozad" data-src="{{ asset('img/figure/figure38.png') }}" alt="figure"
                                width="475" height="553">
                        </div>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/service/service2.jpg') }}" alt="service"
                                width="960" height="555">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================-->
    <!--=            Team Start             =-->
    <!--=====================================-->
    <section class="team-wrap-layout1">
        <div class="background-image2">
            <img class="lozad" data-src="{{ asset('img/figure/figure14.png') }}" alt="figure" width="490"
                height="945">
        </div>
        <div class="background-image3">
            <img class="lozad" data-src="{{ asset('img/figure/figure15.png') }}" alt="figure" width="501"
                height="870">
        </div>
        <div class="container">
            <div class="section-heading">
                {{-- <p class="item-subtitle">Board of Directors</p> --}}
                <h2 class="heading-title">Our Board of Directors</h2>
                <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five
                    centuries.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-box1">
                        <div class="item-shape"></div>
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/team/team1.jpg') }}"
                                    alt="team" width="510" height="500"></a>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="team1.html">Robert Gerry</a></h3>
                            <h4 class="item-subtitle">Ceo & Founder</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-box1">
                        <div class="item-shape"></div>
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/team/team2.jpg') }}"
                                    alt="team" width="510" height="500"></a>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="team1.html">Robert Gerry</a></h3>
                            <h4 class="item-subtitle">Ceo & Founder</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-box1">
                        <div class="item-shape"></div>
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/team/team3.jpg') }}"
                                    alt="team" width="510" height="500"></a>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="team1.html">Robert Gerry</a></h3>
                            <h4 class="item-subtitle">Ceo & Founder</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="banner-wrap1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-box1">
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/blog/blog39.jpg') }}" alt="blog"
                                width="586" height="195">
                        </div>
                        <div class="bannar-details">
                            <h3 class="heading-title">Need Any Help!</h3>
                            <div class="contact-box2">
                                <div class="item-icon-box">
                                    <div class="item-icon"><i class="far fa-comments"></i></div>
                                    <div class="banner-content">
                                        <div class="item-hotline">Hotline</div>
                                        <div class="item-number">01711 111 111</div>
                                    </div>
                                </div>
                                <div class="item-icon-box item-icon-box2">
                                    <div class="item-icon"><i class="far fa-envelope"></i></div>
                                    <div class="banner-content">
                                        <div class="item-hotline">Send Us Email</div>
                                        <div class="item-number">info@jamcogroupbd.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Project Start          =-->
    <!--=====================================-->
    <section class="project-wrap-layout1">
        <div class="container">
            <p class="section-subtitle">Our Experiences</p>
            <div class="row">
                <div class="col-lg-5">
                    <div class="project-box1">
                        <h2 class="section-title">We’ve Done Lot’s Of Awesome Projects</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="project-box2">
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only
                            five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor
                            incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog5.jpg') }}"
                                    alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">01</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog6.jpg') }}"
                                    alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">02</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog7.jpg') }}"
                                    alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">03</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="portfolio-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog8.jpg') }}"
                                    alt="blog" width="570" height="650"></a>
                            <div class="item-content">
                                <div class="item-number">04</div>
                                <p class="heading-subtitle">Business Strategy</p>
                                <h3 class="heading-title">Investment Planning</h3>
                                <p class="portfolio-para">Bohen an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. </p>
                                <div class="item-button">
                                    <a href="portfolio2.html" class="item-btn">+ <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Profit Start           =-->
    <!--=====================================-->
    {{-- <section class="company-profit-wrap1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="company-profit-box1">
                        <p class="section-subtitle">Company Profit Chart</p>
                        <h2 class="section-title">Jamco Group Offers the Best Business Solutions</h2>
                        <p>Finance when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuriFinance.</p>
                        <div class="item-button">
                            <a href="single-service1.html" class="item-btn">Get Survey Today<i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="company-profit-box2">
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure13.png') }}" alt="figure"
                                width="586" height="283">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================-->
    <!--=            Call-back Start        =-->
    <!--=====================================-->
    <section class="call-back-wrap">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-12">
                    <div class="call-back-box1">
                        <h3 class="section-title">Request a Call Back</h3>
                        <form class="message-box">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="inputAddress1" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" id="inputAddress3" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea name="comment" id="message" class="form-control" placeholder="Message"
                                        cols="30" rows="4"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <a href="about.html" class="item-btn">Submit Now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="call-back-box2">
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/blog/blog4.jpg') }}" alt="blog"
                                width="690" height="582">
                            <div class="call-img">
                                <img class="lozad" data-src="{{ asset('img/figure/figure11.png') }}"
                                    alt="figure" width="145" height="295">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Location Start         =-->
    <!--=====================================-->
    <section class="location-wrap-layout1">
        <div class="container">
            <div class="item-heading">
                <p class="item-subtitle">Our Trusted Clients</p>
                <h2 class="section-heading">We’ve Situated in Different Countries</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="location-box">
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure10.png') }}" alt="figure"
                                width="805" height="377">
                            <div class="map-icon">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Testimonial Start      =-->
    <!--=====================================-->
    <section class="testimonial-wrap1">
        <div class="container">
            <div class="testimonial-box1">
                <div class="slick-carousel slick-slider"
                    data-slick='{"arrows": true, "slidesToShow": 1, "autoplay": false, "vertical": true}'>
                    <div class="slick-slide">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/blog/blog3.jpg') }}" alt="blog"
                                    width="285" height="276">
                                <div class="shape-box">Robert Smith CEO</div>
                            </div>
                            <div class="media-body">
                                <blockquote class="item-quotation">“ when an unknown printer took a galley of type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries.”</blockquote>
                                <div class="quotation-marks"><i class="fas fa-quote-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/blog/blog37.jpg') }}" alt="blog"
                                    width="285" height="276">
                                <div class="shape-box">Robert Smith CEO</div>
                            </div>
                            <div class="media-body">
                                <blockquote class="item-quotation">“ when an unknown printer took a galley of type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries.”</blockquote>
                                <div class="quotation-marks"><i class="fas fa-quote-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/blog/blog38.jpg') }}" alt="blog"
                                    width="285" height="276">
                                <div class="shape-box">Robert Smith CEO</div>
                            </div>
                            <div class="media-body">
                                <blockquote class="item-quotation">“ when an unknown printer took a galley of type
                                    and scrambled it to make a type specimen book. It has survived not only five
                                    centuries.”</blockquote>
                                <div class="quotation-marks"><i class="fas fa-quote-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Blog Start             =-->
    <!--=====================================-->
    <section class="blog-wrap-layout1">
        <div class="section-top-img">
            <img class="lozad" data-src="{{ asset('img/figure/figure7.png') }}" alt="figure" width="309"
                height="147">
        </div>
        <div class="container">
            <p class="section-subtitle">Latest News & Blogs</p>
            <div class="blog-top-area">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="section-title">What’s New in Business Area to Know</h2>
                    </div>
                    <div class="col-lg-7">
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only
                            five centuries.Lorem ipsum dolor sitam consectetur adipiscg sedo eiusmod tempor
                            incididuntlabore dolor ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="blog-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog1.jpg') }}"
                                    alt="blog" width="641" height="428"></a>
                        </div>
                        <div class="content-box">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="single-blog.html"><i class="fas fa-user"></i>by admin</a></li>
                                    <li><a href="single-blog.html"><i class="fas fa-tag"></i>Finance, News</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="heading-title"><a href="single-blog.html">Control allows you create Finance
                                    where users can upload</a></h2>
                            <div class="blog-date">25 <span>Oct</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="blog-box1">
                        <div class="item-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/blog/blog2.jpg') }}"
                                    alt="blog" width="641" height="428"></a>
                        </div>
                        <div class="content-box">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="single-blog.html"><i class="fas fa-user"></i>by admin</a></li>
                                    <li><a href="single-blog.html"><i class="fas fa-tag"></i>Finance, News</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="heading-title"><a href="single-blog.html">Control allows you create Finance
                                    where users can upload</a></h2>
                            <div class="blog-date">25 <span>Oct</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Brand Start            =-->
    <!--=====================================-->
    @include('components.brands-bar')
    <!--=====================================-->
    <!--=          Personal Start           =-->
    <!--=====================================-->
    <section class="personal-info-wrap1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-8">
                    <div class="personal-details">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="personal-info-box">
                                    <h2 class="section-title">New York City</h2>
                                    <ul class="information-list">
                                        <li>120 F 2th Yt, New York NY 1259</li>
                                        <li>+1 (212) 333-7888</li>
                                        <li>email@example.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="personal-info-box">
                                    <h2 class="section-title">Melbourne City</h2>
                                    <ul class="information-list">
                                        <li>120 F 2th Yt, New York NY 1259</li>
                                        <li>+1 (212) 333-7888</li>
                                        <li>email@example.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="personal-info-box">
                                    <h2 class="section-title">Melbourne City</h2>
                                    <ul class="information-list">
                                        <li>120 F 2th Yt, New York NY 1259</li>
                                        <li>+1 (212) 333-7888</li>
                                        <li>email@example.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-6">
                                <div class="personal-info-box">
                                    <h2 class="section-title">Melbourne City</h2>
                                    <ul class="information-list">
                                        <li>120 F 2th Yt, New York NY 1259</li>
                                        <li>+1 (212) 333-7888</li>
                                        <li>email@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-4 d-xl-block d-none">
                    <div class="location-img">
                        <div id="googleMap" class="google-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="figure-img1">
            <img class="lozad" data-src="{{ asset('img/figure/figure5.png') }}" alt="figure" width="872"
                height="724">
        </div>
        <div class="figure-img2">
            <img class="lozad" data-src="{{ asset('img/figure/figure6.png') }}" alt="figure" width="487"
                height="269">
        </div>
    </section>
@endsection
