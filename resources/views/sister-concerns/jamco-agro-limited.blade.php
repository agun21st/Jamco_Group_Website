@extends('layouts.master')
@section('title')
    JAMCO Agro Limited | Sister Concern of JAMCO Group
@endsection
@section('heads')
<meta name="description" content="JAMCO Agro Ltd is a leading agricultural company, produces crops by farming scientifically. And distributed them nationwide and exported them to neighboring countries.">
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
                        <h1 class="page-title">JAMCO Agro Limited</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Sister Concerns</a></li>
                                <li class="breadcrumb-item active" aria-current="page">JAMCO Agro Limited</li>
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
                        <h2 class="section-title">Welcom to JAMCO Agro</h2>
                        <h3 class="section-subtitle">
                            Agricultural Growth Partner in Different Sectors of Bangladesh
                        </h3>
                        <div class="service-img5">
                            {{-- <img src="{{ asset('img/concerns/jamco_agro2.webp') }}" alt="JAMCO Agro Ltd." width="779" height="440">
                            <div class="background-image1">
                                <img src="{{ asset('img/figure/figure85.png') }}" alt="figure" width="193" height="118">
                            </div>
                            <div class="background-image2">
                                <img src="{{ asset('img/figure/figure86.png') }}" alt="figure" width="344" height="167">
                            </div> --}}
                            <div class="fb-video" data-href="https://www.facebook.com/deeptokrishibd/videos/1288988441468502/" data-width="780" data-show-text="false"><blockquote cite="https://www.facebook.com/deeptokrishibd/videos/1288988441468502/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/deeptokrishibd/videos/1288988441468502/">জেমকো এগ্রো লিঃ এর অন্যতম প্রতিষ্ঠান, জেমকো লেয়ার ফার্মের উপর দীপ্ত টেলিভিশনের প্রতিবেদন প্রকাশ</p>Posted by <a href="https://www.facebook.com/deeptokrishibd/videos/1288988441468502/">Deepto Krishi</a> on Tuesday, 5 January 2021</blockquote></div>
                        </div>
                        <p class="text-justify">
                            As contribution in agricultural sectors, we have three wings to work align. Here, we nurture farming in a scientific manner.  Besides distribution nationwide, we export in neighbouring countries. We have 3 division in JAMCO Agro Ltd.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li id="nobodip-poultry"><i class="fas fa-check"></i>Nobodip Poultry</li>
                                    <li><i class="fas fa-check"></i>JAMCO Dairy</li>
                                    <li><i class="fas fa-check"></i>Nobodip Fisheries</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                {{-- <ul class="service-list2">
                                    <li><img class="lozad" data-src="{{ asset('img/figure/figure88.png') }}"
                                            alt="figure" width="136" height="137"></li>
                                    <li><img class="lozad" data-src="{{ asset('img/figure/figure88.png') }}"
                                            alt="figure" width="136" height="137"></li>
                                </ul> --}}
                            </div>
                        </div>
                        <h2 class="section-title">Nobodip Poultry</h2>
                        <h3 class="section-subtitle">
                            Your Everyday Protein Supplier for the Best Diet
                        </h3>
                        <p class="text-justify">
                            Thinking about buying random chicken from the market? Look again! The difference is here. In Nobodip we manage a healthy and great environment to raise the chickens.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list2">
                                    <li><img class="lozad" data-src="{{ asset('img/figure/eggs.webp') }}"
                                            alt="figure" width="136" height="137"></li>
                                    <li><img class="lozad" data-src="{{ asset('img/figure/chicken.webp') }}"
                                            alt="figure" width="136" height="137"></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Antibiotic Resistance</li>
                                    <li><i class="fas fa-check"></i>Vegetable-fed Chickens</li>
                                    <li><i class="fas fa-check"></i>Healthy &amp; Clean Chicken</li>
                                    <li><i class="fas fa-check"></i>Protein-enriched Eggs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-single-layout">
                            <div class="row gutters-40">
                                <div class="col-lg-6">
                                    <div class="about-box6">
                                        <div class="item-img">
                                            <img class="lozad" data-src="{{ asset('img/about/JAMCO_Poultry.webp') }}"
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
                                        <h2 class="heading-title">100% Hygienic Chicken for Meat and Egg</h2>
                                        <p class="text-justify">
                                            Whether you need laying chicken or meat producing chicken, choose us without any doubt. We are dedicated to ensuring healthy and protein-enriched chicken.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Laying</li>
                                            <li><i class="fas fa-circle"></i>Meat-Producing</li>
                                            <li><i class="fas fa-circle"></i>Eggs</li>
                                            <li><i class="fas fa-circle"></i>Scientific Process</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Commercial Production</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">Well Managed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Disease Management</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        For commercial production, we maintain our chicks in the scientific process. With the perfect temperature, lighting and cleanliness in each step we take proper care. Healthy chickens are the source of good protein supply. For bulk chicken, we maintain the theme.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        In Nobodip, we have more than 25,00,000 chickens in several sheds. To avoid crowding, frightening and cannibalism we maintain routine check ups. For example- we do debeaking to prevent toe picking or feather picking of each other. With proper care of ours, we have raised egg production from 100 to 300 within this year.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        More often, the chickens have diseases. They may catch bird flu, influenza, blackhead, coccidiosis and many more. Besides, parasitic attacks are more usual among the birds. Even in slaughterhouses, the workers remain at high risk for these diseases.  That’s why we maintain proper sanitization, preservation with great control.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h2 class="section-title" id="jamco-dairy-products">Jamco Dairy Products</h2>
                        <h3 class="section-subtitle">
                            Exclusive and Pure Dairy Items that You Need for Daily Source of Nutrition
                        </h3>
                        <p class="text-justify">
                            Dairy items have been an important source of nutrition for a long time. To provide fresh and authentic dairy items to mass people, we produce authentic dairy products.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Liquid Milk</li>
                                    <li><i class="fas fa-check"></i>Ghee</li>
                                    <li><i class="fas fa-check"></i>Yogurt</li>
                                    <li><i class="fas fa-check"></i>Paneer and Mozzarella Cheese</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="service-list2">
                                    <li><img class="lozad" data-src="{{ asset('img/figure/cow_with_kid.webp') }}"
                                        alt="figure" width="136" height="137" style="border-radius:50%;"></li>
                                        <li><img class="lozad" data-src="{{ asset('img/figure/milk_cheese.webp') }}"
                                                alt="figure" width="136" height="137" style="border-radius:50%;"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-single-layout">
                            <div class="row gutters-40">
                                <div class="col-lg-6">
                                    <div class="about-box7">
                                        <h2 class="heading-title">Fresh and Local Dairy Everyday</h2>
                                        <p class="text-justify">
                                            Almost 67% of people keep dairy items in their regular diet. Keeping that in mind, we produce and preserve dairy items with care. In each step our skilled members ensure quality products.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Milk Quality Testing</li>
                                            <li><i class="fas fa-circle"></i>Healthy Meat Solution</li>
                                            <li><i class="fas fa-circle"></i>Well Sanitization</li>
                                            <li><i class="fas fa-circle"></i>Cooling and Refrigeration</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-box6">
                                        <div class="item-img">
                                            <img class="lozad" data-src="{{ asset('img/about/JAMCO_Dairy.webp') }}"
                                                alt="about" width="690" height="765">
                                            <div class="background-image">
                                                <img class="lozad"
                                                    data-src="{{ asset('img/figure/figure89.png') }}" alt="figure"
                                                    width="172" height="169">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Nutritious Milk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">No Antibiotic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Environment</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        Whether you are a sports person or professional athlete, your diet chart must have milk. Yet, nutrition depends on maintenance of animals and their food. That’s why, we preserve carefully, so that you can get the fresh milk and dairy items. Here, over 700 cows are well-maintained with necessary medical assistance, organic food and care.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        For the best milk, you must need healthy animals. Here, we care for our cows.Like humans, sometimes cows need antibiotics if they fall ill. For this, we collect milk separately till the milks test antibiotic free. You can be tension free buying antibiotic free dairy items from our farm.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        For keeping a good environment, we work in recycling the dairy waste. We use cow dung for fertilization. Besides, producing methane gas from animal waste is another project that we are working on nowadays. We believe in an eco-friendly life. However, to maintain a balanced environment, Jamco farm is working from the very beginning.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h2 class="section-title">Nobodip Fisheries</h2>
                        <h3 class="section-subtitle">
                            Your Loyal Supplier for Daily Fresh Protein with Various Types of Fishes.
                        </h3>
                        <p class="text-justify">
                            Fish accounts for almost 44% of animal protein of the world population. To meet this huge demand, we do farming the fishes in our own ponds.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="service-list2">
                                    <li><img class="lozad" data-src="{{ asset('img/figure/fish_breeds.webp') }}"
                                            alt="figure" width="136" height="137" style="border-radius:50%;"></li>
                                    <li><img class="lozad" data-src="{{ asset('img/figure/Fish_egg_hatching.webp') }}"
                                            alt="figure" width="136" height="137" style="border-radius:50%;"></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="service-list">
                                    <li><i class="fas fa-check"></i>Fish Breed</li>
                                    <li><i class="fas fa-check"></i>Egg Hatching</li>
                                    <li><i class="fas fa-check"></i>Scientific Process</li>
                                    <li><i class="fas fa-check"></i>Nutritious Food Maintenance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-single-layout">
                            <div class="row gutters-40">
                                <div class="col-lg-6">
                                    <div class="about-box6">
                                        <div class="item-img">
                                            <img class="lozad" data-src="{{ asset('img/about/JAMCO_Fishries.webp') }}"
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
                                        <h2 class="heading-title">Fish Hatchery Company in Bangladesh</h2>
                                        <p class="text-justify">
                                            With the use of innovative Biofloc technology, we contribute to the aquaculture industry. As a growing hatchery in fish farming, Nobodip offers fresh fish. Also, here we offer young fishes for the new comers in the industry.
                                        </p>
                                        <ul class="about-list2">
                                            <li><i class="fas fa-circle"></i>Rui</li>
                                            <li><i class="fas fa-circle"></i>Katla</li>
                                            <li><i class="fas fa-circle"></i>Pabda</li>
                                            <li><i class="fas fa-circle"></i>Mrigal</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#JAMCO-flow" role="tab"
                                        aria-selected="true">Fish Breed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#company-growth" role="tab"
                                        aria-selected="false">Egg Hatching</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Investment" role="tab"
                                        aria-selected="false">Scientific Process</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="JAMCO-flow" role="tabpanel">
                                    <p class="text-justify">
                                        For the perfect aquaculture, in Nobodip we breed fishes for proper marketing. If you are a newbie in this sector you can collect baby millows from us. Besides baby fish, we provide fish food and other accessories that you can use for your fish farm.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="company-growth" role="tabpanel">
                                    <p class="text-justify">
                                        There are several ponds and tanks for egg hatching and nurturing the fishes. We use organic food for healthy fishes. With a clean and experienced hand we maintain fish hatching projects.

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="Investment" role="tabpanel">
                                    <p class="text-justify">
                                        From hatching to raising fishes, we maintain the scientific process in every step. That's why we have a constant production of healthy fishes. Weather for a wholesale or for farming you won't regret buying fish from us.
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
