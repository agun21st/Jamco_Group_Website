@extends('layouts.master')
@section('title')
    About Us | JAMCO Group
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
                        <h1 class="page-title">About JAMCO</h1>
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
                        <p class="heading-subtitle jamcoPrimaryColor">About JAMCO Group</p>
                        <h2 class="heading-title">Aiming at Making the Best in all Sectors</h2>
                        <p class="text-justify mb-2">
                            <strong>JAMCO Group</strong>, is one of the largest private sectors of Bangladesh, came into being in 2020 with a mission to provide a wide array of necessary products and services in cost effective ways. Kamrul Hasan, one of the most dynamic entrepreneurs of Bangladesh, founded these conglomerates. We have been recognized as a group of companies in the country within a very short period of time for our excellence. Since its inception, these conglomerates have been playing a vital role in the economic growth of Bangladesh.
                        </p>
                        <p>
                            The group consists of over 8 major concerns with diverse activities & different products located in different areas of the country. We are devoted to self- reliance for the company, community and country by our quality products and services reaching out to the consumers.
                        </p>
                        {{-- <div class="about-layout">
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
                        </div> --}}
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
    <!--=            Banner Start           =-->
    <!--=====================================-->
    <section class="banner-wrap1 banner-wrap7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-box1 mission">
                        <div class="item-img">
                            <img src="{{asset('img/blog/JAMCO_mission.webp')}}" alt="blog" width="586" height="200">
                        </div>
                        <div class="bannar-details mission">
                            <h3 class="heading-title jamcoPrimaryColor">Mission</h3>
                            <p class="text-justify px-4">To achieve growth as a trusted group of companies through producing as well as delivering a wide array of products and services and making positive contributions to the country's economy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-wrap1 banner-wrap7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-box1 mission">
                        <div class="item-img">
                            <img src="{{asset('img/blog/JAMCO_vision.webp')}}" alt="blog" width="586" height="200">
                        </div>
                        <div class="bannar-details mission">
                            <h3 class="heading-title jamcoPrimaryColor">Vision</h3>
                            <p class="text-justify px-4">
                                To be recognized as a global group of companies providing the best products and services to the consumers.
                            </p>
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
                <h2 class="section-title jamcoPrimaryColor">Company Core Values</h2>
                <p class="text-secondary">These values have shaped our corporate culture since the very beginning
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
                                <h3 class="heading-title">Teamwork</h3>
                                <p>We work together to overcome challenges.</p>
                                <div class="item-button">
                                    <a href="{{url('/about-us') }}" class="item-btn">Read More<i
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
                                <h3 class="heading-title">Quality</h3>
                                <p>We do not believe in Quantity, rather Quality.</p>
                                <div class="item-button">
                                    <a href="{{url('/about-us') }}" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="item-number">02</div>
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
                                <h3 class="heading-title">Diversity</h3>
                                <p>Ready to embrace the power of diverse minds.</p>
                                <div class="item-button">
                                    <a href="{{url('/about-us') }}" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="item-number">03</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="company-value-box">
                        <div class="media">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/about/about4.jpg') }}" alt="about"
                                    width="235" height="251">
                            </div>
                            <div class="media-body">
                                <h3 class="heading-title">Innovation</h3>
                                <p>We are continually striving for improvement.</p>
                                <div class="item-button">
                                    <a href="{{url('/about-us') }}" class="item-btn">Read More<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="item-number">04</div>
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
                <h2 class="heading-title jamcoPrimaryColor">Team Members</h2>
                <p class="text-secondary text-capitalize">Our experts are ready help you</p>
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
    {{-- <section class="call-back-wrap call-back-wrap2">
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
    </section> --}}
    <!--=====================================-->
    <!--=            Testimonial Start      =-->
    <!--=====================================-->
    {{-- <section class="testimonial-wrap3">
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
    </section> --}}
    <!--=====================================-->
    <!--=            Brand Start            =-->
    <!--=====================================-->
    <div class="my-5 p-0"></div>
    @include('components.brands-bar')
@endsection
