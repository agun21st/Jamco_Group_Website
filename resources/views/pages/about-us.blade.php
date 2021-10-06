@extends('layouts.master')
@section('title')
    About Us | Jamco Group
@endsection
@section('heads')
@endsection
@section('content')
    <!--=====================================-->
    <!--=            Breadcrumb Start       =-->
    <!--=====================================-->
    <section class="breadcrumb-wrap">
        <div class="breadcrumb-img1">
            <img src="{{ asset('img/figure/figure79.png') }}" alt="figure" width="223" height="109">
        </div>
        <div class="breadcrumb-img2">
            <img src="{{ asset('img/figure/figure78.png') }}" alt="figure" width="185" height="56">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h1 class="page-title">About Our Company</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            About Start            =-->
    <!--=====================================-->
    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-box4">
                        <p class="heading-subtitle">About Jamco Group</p>
                        <h2 class="heading-title">Finance Business Services Your Future Success</h2>
                        <p>Bookan unknown printer took a galley of type and scramble it to make a type specimen book. It has
                            survived notnly five centuries when an unknown printer.Bookan unknown printer took a galley of
                            type and scramble.</p>
                        <div class="about-layout">
                            <div class="media">
                                <div class="item-img about-img2">
                                    <img src="{{ asset('img/figure/figure76.png') }}" alt="figure" width="44" height="46">
                                </div>
                                <div class="media-body">
                                    <div class="item-content">
                                        <h3 class="item-title">Financial Analysis</h3>
                                        <p>Bookan unknown printer took galley type and scramble make.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-layout">
                            <div class="media">
                                <div class="item-img">
                                    <img src="{{ asset('img/figure/figure77.png') }}" alt="figure" width="44" height="46">
                                </div>
                                <div class="media-body">
                                    <div class="item-content">
                                        <h3 class="item-title">Financial Analysis</h3>
                                        <p>Bookan unknown printer took galley type and scramble make.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-box5">
                        <div class="item-img">
                            <img src="{{ asset('img/about/about6.webp') }}" alt="about" width="501" height="607">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure73.png') }}" alt="figure" width="167" height="167">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure74.png') }}" alt="figure" width="121" height="104">
                            </div>
                            <div class="background-image3">
                                <img src="{{ asset('img/figure/figure75.png') }}" alt="figure" width="139" height="417">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Company-value Start    =-->
    <!--=====================================-->
    <section class="company-value-wrap">
        <div class="container">
            <div class="item-content">
                <h2 class="section-title">Company Core Values</h2>
                <p> Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="company-value-box">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/about/about4.jpg') }}" alt="about"
                                    width="235" height="251">
                            </div>
                            <div class="media-body">
                                <h3 class="heading-title">Planning & Strategy</h3>
                                <p>Dorem ipsum dolor amet consec adipiscing elitseddo.</p>
                                <div class="item-button">
                                    <a href="team2.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="item-number">01</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-value-box">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/about/about5.jpg') }}" alt="about"
                                    width="235" height="251">
                            </div>
                            <div class="media-body">
                                <h3 class="heading-title">Planning & Strategy</h3>
                                <p>Dorem ipsum dolor amet consec adipiscing elitseddo.</p>
                                <div class="item-button">
                                    <a href="team2.html" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="item-number">02</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Progress-bar Start      =-->
    <!--=====================================-->
    <section class="progress-bar-wrap1">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12">
                    <div class="progress-bar-box1 progress-bar-box3">
                        <h2 class="section-title">Our Expertise & Skills to All Business</h2>
                        <p> when an unknown printer took a galley of type and scrambled make a type specimen book.</p>
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
    </section>
    <!--=====================================-->
    <!--=            Consulting Start       =-->
    <!--=====================================-->
    <section class="consulting-service-wrap4">
        <div class="container">
            <div class="row gutters-50">
                <div class="col-lg-5">
                    <div class="consulting-top3">
                        <h2 class="section-title">Our Business Services</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="consulting-top4">
                        <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five
                            centuries.Lorem ipsum dolor sitam consectetu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Consulting Start       =-->
    <!--=====================================-->
    <section class="consulting-service-wrap2 consulting-service-wrap3">
        <div class="container">
            <div class="background-image1">
                <img class="lozad" data-src="{{ asset('img/figure/figure57.png') }}" alt="png" width="164"
                    height="461">
            </div>
            <div class="background-image2">
                <img class="lozad" data-src="{{ asset('img/figure/figure58.png') }}" alt="png" width="257"
                    height="752">
            </div>
        </div>
        <div class="container">
            <div class="row gutters-20">
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Audience</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure59.png') }}" alt="figure"
                                width="87" height="65">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Tax Advisory</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure60.png') }}" alt="figure"
                                width="49" height="63">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Investment</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure61.png') }}" alt="figure"
                                width="45" height="64">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4">
                        <h3 class="heading-title">Saving Money</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure62.png') }}" alt="figure"
                                width="42" height="64">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">HR Consulting</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure83.png') }}" alt="figure"
                                width="57" height="63">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Saving Money</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure62.png') }}" alt="figure"
                                width="42" height="64">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Audit</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure84.png') }}" alt="figure"
                                width="53" height="64">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="consulting-service4 consulting-service5">
                        <h3 class="heading-title">Saving Money</h3>
                        <div class="item-img">
                            <img class="lozad" data-src="{{ asset('img/figure/figure62.png') }}" alt="figure"
                                width="42" height="64">
                        </div>
                        <p>when unknown printer tookar galleytype ande scrambled imake type.</p>
                        <div class="consulting-button">
                            <a href="single-service2.html" class="consulting-btn"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="banner-wrap1 banner-wrap4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-box1">
                        <div class="item-img">
                            <img src="img/blog/blog9.jpg" alt="blog" width="586" height="200">
                        </div>
                        <div class="bannar-details">
                            <h3 class="heading-title">Need Any Help!</h3>
                            <div class="contact-box2">
                                <div class="item-icon-box">
                                    <div class="item-icon"><i class="far fa-comments"></i></div>
                                    <div class="banner-content">
                                        <div class="item-hotline">Hotline</div>
                                        <div class="item-number">009850 9850</div>
                                    </div>
                                </div>
                                <div class="item-icon-box item-icon-box2">
                                    <div class="item-icon"><i class="far fa-envelope"></i></div>
                                    <div class="banner-content">
                                        <div class="item-hotline">Send Us Email</div>
                                        <div class="item-number">info@gmail.com</div>
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
    <!--=            Team Start             =-->
    <!--=====================================-->
    <section class="team-wrap-layout1">
        <div class="background-image2">
            <img class="lozad" data-src="{{ asset('img/figure/figure14.png') }}" alt="figure" width="490"
                height="945">
        </div>
        <div class="background-image3">
            <img class="lozad" data-src="{{ asset('img/figure/figure15.png') }}" alt="figure" width="501"
                height="">
        </div>
        <div class="container">
            <div class="section-heading">
                <p class="item-subtitle">Our Team Member</p>
                <h2 class="heading-title">Our Expertise Will Help You</h2>
                <p>Bookan unknown printer took a galley of type and scrambled make It has survived not only five centuries.
                </p>
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
        </div>
    </section>
    <!--=====================================-->
    <!--=            Call-back Start        =-->
    <!--=====================================-->
    <section class="call-back-wrap call-back-wrap2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="call-back-box1">
                        <h3 class="section-title">Request a Call Back</h3>
                        <form class="message-box">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea name="comment" id="message" class="form-control" placeholder="Message"
                                        cols="30" rows="4"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <a href="#" class="item-btn">Submit Now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
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
    <!--=            Testimonial Start      =-->
    <!--=====================================-->
    <section class="testimonial-wrap3">
        <div class="container">
            <div class="testimonial-box3">
                <div class="slick-carousel slick-slider"
                    data-slick='{"arrows": true, "slidesToShow": 1, "autoplay": false, "autoplaySpeed": 2000}'>
                    <div class="slick-slide">
                        <div class="testimonial-content">
                            <div class="item-img-round">
                                <img class="lozad" data-src="{{ asset('img/about/about3.png') }}" alt="about"
                                    width="80" height="80">
                            </div>
                            <blockquote class="item-quote">“ when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries.”
                            </blockquote>
                            <h2 class="heading-title">Steven Sjones</h2>
                            <h3 class="heading-subtitle">CEO Founder</h3>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="testimonial-content">
                            <div class="item-img-round">
                                <img class="lozad" data-src="{{ asset('img/about/about3.png') }}" alt="about"
                                    width="80" height="80">
                            </div>
                            <blockquote class="item-quote">“ when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries.”
                            </blockquote>
                            <h2 class="heading-title">Steven Sjones</h2>
                            <h3 class="heading-subtitle">CEO Founder</h3>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="testimonial-content">
                            <div class="item-img-round">
                                <img class="lozad" data-src="{{ asset('img/about/about3.png') }}" alt="about"
                                    width="80" height="80">
                            </div>
                            <blockquote class="item-quote">“ when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries.”
                            </blockquote>
                            <h2 class="heading-title">Steven Sjones</h2>
                            <h3 class="heading-subtitle">CEO Founder</h3>
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
@endsection
