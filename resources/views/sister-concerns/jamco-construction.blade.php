@extends('layouts.master')
@section('title')
    JAMCO Construction | Sister Concern of JAMCO Group
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
                        <h1 class="page-title">JAMCO Construction</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sister Concerns</a></li>
                                <li class="breadcrumb-item active" aria-current="page">JAMCO Construction</li>
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
                            <img src="{{ asset('img/concerns/construction.webp') }}" alt="JAMCO Construction" width="779" height="440">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure85.png') }}" alt="figure" width="193" height="118">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure86.png') }}" alt="figure" width="344" height="167">
                            </div>
                        </div>
                        <h2 class="section-title">Welcome to JAMCO Constructions</h2>
                        <h3 class="section-subtitle">
                            We Bring Life to Your Dream Projects
                        </h3>
                        <p class="text-justify">
                            Jamco Construction is a company that offers a wide range of construction services. From small to large-scale projects, we pride ourselves on our professionalism and attention to detail. We work with a variety of clients with a team of highly experienced professionals. Proudly, we have clients from private individuals to developers and Government bodies.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>On-Time Project Completion</li>
                                    <li><i class="fas fa-check"></i>Equipped with Modern Machinery</li>
                                    <li><i class="fas fa-check"></i>Skilled and Experienced Team</li>
                                    <li><i class="fas fa-check"></i>Strong Risk Management</li>
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
                                        <h2 class="heading-title">We are Strongly Committed to Our Risk Management</h2>
                                        <p class="text-justify">
                                            For a client, it’s very crucial that they select a company that is committed to safety and stable enough to handle any risk. It can be an accident, injury, or any lawsuit. This is why our team is prepared to handle any kind of unfavorable situation.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Pre-construction Design</li>
                                            <li><i class="fas fa-circle"></i>Construction Management</li>
                                            <li><i class="fas fa-circle"></i>Renovation and Expansion</li>
                                            <li><i class="fas fa-circle"></i>Demolition</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Pre-construction Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">Construction Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Renovation and Expansion</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        Our services include developing a project strategy, designing a plan keeping customers’ needs in mind. Other services include obtaining permissions. Also, assembling the manpower and resources needed for construction. This will enable us to complete your projects without interruption.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        Executing a plan is more challenging than creating one. We strive to make projects successful. This is why we understand why monitoring and managing are crucial. From budgeting to safety procedures everything is under scrutiny. Because your every penny counts.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        We can assist you to offer an elegant touch to your showroom, workplace, or any old space. Our creative designers can assist you in making decisions that satisfy both your desires and your budget. We can assist in expanding your built-up space by redesigning and monitoring. Our goal is to improve your overall quality of life by bringing fresh life into your house.
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
