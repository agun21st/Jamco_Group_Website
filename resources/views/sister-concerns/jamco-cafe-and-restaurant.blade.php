@extends('layouts.master')
@section('title')
    JAMCO Cafe and Restaurant | Sister Concern of JAMCO Group
@endsection
@section('heads')
<meta name="description" content="JAMCO Cafe and Restaurant is an exceptional coffee shop with outstanding interior design. So, what are you waiting for? Visit now.">
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
                        <h1 class="page-title">JAMCO Cafe and Restaurant</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sister Concerns</a></li>
                                <li class="breadcrumb-item active" aria-current="page">JAMCO Cafe and Restaurant</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Service Start          =-->
    <!--=====================================-->
    <section class="single-service-wrap2">
        <div class="container">
            <div class="row gutters-50">
                <div class="col-lg-8">
                    <div class="single-service-box2">
                        <div class="service-img5">
                            <img src="{{ asset('img/concerns/jamco_cafe.webp') }}" alt="JAMCO Cafe" width="779" height="440">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure85.png') }}" alt="figure" width="193" height="118">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure86.png') }}" alt="figure" width="344" height="167">
                            </div>
                        </div>
                        <h2 class="section-title">JAMCO Cafe and Restaurant</h2>
                        <h3 class="section-subtitle">
                            Have a Premium Dining Experience
                        </h3>
                        <p class="text-justify">
                            A premium dining experience is just more than food and services. So, we organize our cafe with attentive staff, amazing delicacies, and a wonderful environment with stylish decor.  Also, you can have a lunch/dinner office meeting, a BBQ party, a group party, a birthday celebration, and more! We also place a premium on family gatherings and dining-in, making you feel at ease.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Comfortable Environment</li>
                                    <li><i class="fas fa-check"></i>Multi-Cuisine Food</li>
                                    <li><i class="fas fa-check"></i>Customer Service</li>
                                    <li><i class="fas fa-check"></i>Reservations for any Occasion</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="service-list2">
                                    <li><img class="lozad" data-src="{{ asset('img/figure/figure88.png') }}"
                                            alt="figure" width="136" height="137"></li>
                                    <li><img class="lozad" data-src="{{ asset('img/figure/figure88.png') }}"
                                            alt="figure" width="136" height="137"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-single-layout">
                            <div class="row gutters-40">
                                <div class="col-lg-6">
                                    <div class="about-box6">
                                        <div class="item-img">
                                            <img class="lozad" data-src="{{ asset('img/about/about7.jpg') }}"
                                                alt="about" width="690" height="765">
                                            <div class="background-image">
                                                <img class="lozad"
                                                    data-src="{{ asset('img/figure/figure89.png') }}" alt="figure"
                                                    width="172" height="169">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-box7">
                                        <h2 class="heading-title">Make Us a Part of Your Occasions</h2>
                                        <p class="text-justify">
                                            We want to make your every occasion memorable. To ensure that no disruption occurs, our restaurant will create a detailed layout according to your needs. The layout will include the extra services you want, the order of events, and the needs of your guests.  Our aim is to make your occasion as convenient as possible so that you can live every moment of it.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Ample Event Space</li>
                                            <li><i class="fas fa-circle"></i>Detailed Layout</li>
                                            <li><i class="fas fa-circle"></i>Spacious Parking Lot</li>
                                            <li><i class="fas fa-circle"></i>Lucrative Amenities</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Comfortable Environment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">Multi-Cuisine Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Customer Service</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        Premium dining experience can not be achieved if you do not enjoy the surroundings. This is why our restaurant is made with a great interior, soothing lights, and tidy restrooms. A noiseless environment will be the plus point for you to pass your leisure comfortably.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        Our talented chef prepares Italian, Thai, Chinese, Indian, Fresh Seafood, Pizza, Burgers, and Chef's Specials. There is a large variety of beverages and pastries available to satisfy your taste buds. We provide dine-in, take-out, and home delivery options.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        Key to providing excellent customer service is to have attentive staff. Our staff are attentive and they are responsible to help you achieve a great dining experience. Our dedicated staff are there to meet your needs. So you never feel any inconvenience in your journey with us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-box4">
                            <div class="item-img">
                                <img class="lozad" data-src="{{ asset('img/blog/blog10.jpg') }}" alt="blog"
                                    width="416" height="194">
                            </div>
                            <div class="bannar-details2">
                                <h3 class="heading-title">Need Help!</h3>
                                <div class="media">
                                    <div class="item-icon"><i class="far fa-comments"></i></div>
                                    <div class="media-body">
                                        <div class="item-hotline">Hotline</div>
                                        <div class="item-number">+88 02-8392244</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-break-lg sidebar-widget">
                    @include('components.concerns-links')
                </div>
            </div>
        </div>
    </section>
@endsection
