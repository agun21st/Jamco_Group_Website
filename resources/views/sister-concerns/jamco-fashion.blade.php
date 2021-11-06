@extends('layouts.master')
@section('title')
    JAMCO Fashion | Sister Concern of JAMCO Group
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
                        <h1 class="page-title">JAMCO Fashion</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sister Concerns</a></li>
                                <li class="breadcrumb-item active" aria-current="page">JAMCO Fashion</li>
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
                            <img src="{{ asset('img/concerns/fashion.webp') }}" alt="JAMCO Fashion" width="779" height="440">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure85.png') }}" alt="figure" width="193" height="118">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure86.png') }}" alt="figure" width="344" height="167">
                            </div>
                        </div>
                        <h2 class="section-title">Welcome to JAMCO Fashion</h2>
                        <h3 class="section-subtitle">
                            Tailoring High-End Garment Products for Your Fashion House
                        </h3>
                        <p class="text-justify">
                            JAMCO fashion is a Bangladeshi company that manufactures and supplies apparel items.  We are very attentive to how our clients want their items to be tailored. We make sure that our clothing items are produced in an ethical environment and meet the standard quality check in every step of production.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Knitted Products</li>
                                    <li><i class="fas fa-check"></i>Woven Products</li>
                                    <li><i class="fas fa-check"></i>Denim Products</li>
                                    <li><i class="fas fa-check"></i>Garments Accessories</li>
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
                                        <h2 class="heading-title">Aspires to Lead in the World Garment Industry</h2>
                                        <p class="text-justify">
                                            Hundreds of industrious people are working in JAMCO's garment factories to ensure that top-notch quality products are produced. These items are shipped to various regions of the world, bringing with them foreign money from all over the world.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Premium Quality Products</li>
                                            <li><i class="fas fa-circle"></i>On-Time Delivery</li>
                                            <li><i class="fas fa-circle"></i>Accountability</li>
                                            <li><i class="fas fa-circle"></i>Sustainability</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Premium Quality Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">On-Time Delivery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Accountability</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        Thanks to our experienced and talented team we are able to deliver premium products. The whole production process remains under surveillance from the start of making these items to shipping. We tailor a variety of apparel items, including knitted products, denim, woven items, women’s wear etc.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        We understand how much loss can be incurred because of delayed shipments. We ensure our level best so that your products reach you in time.  Not only this, for transparency, we make sure that you can contact us any time to take an update of your orders.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        We take accountability if you face any sorts of discomfort. For solving different issues we take opinions from both the parties. Because we believe, being responsible is a must-have virtue for any company.
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
