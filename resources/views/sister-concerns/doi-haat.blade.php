@extends('layouts.master')
@section('title')
    Doi Haat | Sister Concern of JAMCO Group
@endsection
@section('heads')
<meta name="description" content="Looking for the best fresh and tastiest sweet? Doi Haat is here to deliver the best fresh and tastiest sweet at an affordable price. call: +88028392244">
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
                        <h1 class="page-title">Doi Haat</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sister Concerns</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Doi Haat</li>
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
                            <img src="{{ asset('img/service/doi-haat.webp') }}" alt="service" width="779" height="440">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure85.png') }}" alt="figure" width="193" height="118">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure86.png') }}" alt="figure" width="344" height="167">
                            </div>
                        </div>
                        <h2 class="section-title">Celebrate with JAMCO Doi Haat</h2>
                        <h3 class="section-subtitle">
                            Premium quality sweet tooth that makes you feel welcomed in any occasion
                        </h3>
                        <p class="text-justify">
                            Special days are incomplete without sweets. Nowadays, people choose attractive looks besides great taste. Keeping this fact in mind, we make premium sweets and curds. For creating a lucrative outlook, we never compromise our sweet quality. So, you can enjoy our items without any hesitation.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Premium Quality Curds</li>
                                    <li><i class="fas fa-check"></i>Fastival Sweet Items</li>
                                    <li><i class="fas fa-check"></i>Amazing Laddoos</li>
                                    <li><i class="fas fa-check"></i>Sugar-Free Items</li>
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
                                        <h2 class="heading-title">Explore the mysterious taste of sweets</h2>
                                        <p class="text-justify">
                                            Embrace your special days with finger licking sweets. For small get together to marriage ceremonies and birthdays, we provide various sweet tooths. Best quality ingredients and impressive presentation makes us best from the rest.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Traditional Items</li>
                                            <li><i class="fas fa-circle"></i>Flavored Toasts</li>
                                            <li><i class="fas fa-circle"></i>Fancy Sweets</li>
                                            <li><i class="fas fa-circle"></i>Fresh Curd</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Exclusive Look</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">Healthy & Organic Ingredients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Custom Orders</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        For different occasions, we provide impressive looking sweets. Delicious toasts, Ilish peti, cream jam and many other expensive looking sweets are always available. Any social program like Pohela Boishakh to religious programs like puja or eid, we produce special sweets.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        Thinking about the ingredients of your favourite sweets? Leave your health concerns on us. Here, we maintain fresh and organic ingredients for delicious recipes. We use our own dairy products from our own farm. So, you can be tension free about the quality of our sweets.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        If you want custom packages for gifts, we provide them for you. Different shapes, different tastes, sweets like traditional or exclusive items, we are ready for your order.  Even for bulk order, you can definitely choose as your special day partner. From packaging to supply the best quality items, we deliver you the perfect taste.
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
