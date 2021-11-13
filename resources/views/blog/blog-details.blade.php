@extends('layouts.master')
@section('title')
Blog Details - JAMCO Group Bangladesh
@endsection
@section('heads')
<meta name="description" content="Read our blog and get updated about our company and trending topics also. JAMCO Group Bangladesh.">
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
                        <h1 class="page-title breadcrumb-title">What we are capable to usually discovered</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Blog Start             =-->
    <!--=====================================-->
    <section class="single-blog-wrap1">
        <div class="container">
            <div class="row gutters-50">
                <div class="col-lg-8">
                    <div class="single-blog-box1">
                        <div class="big-item-img">
                            <img src="{{ asset('img/blog/blog31.jpg') }}" alt="blog" width="781" height="460">
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>25/11/2020</li>
                                <li><i class="fas fa-user"></i>by admin</li>
                                <li><i class="fas fa-tag"></i>Finance, News</li>
                            </ul>
                        </div>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                            has surived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting.</p>
                        <p class="single-para">Finance aregalley of type and scrambled it to make a type specimen book.
                            It has surived not only five centteruries, but also the leap into electronic typesetting,
                            remaining essentially.</p>
                        <div class="quotetion-box">
                            <blockquote class="item-quote2">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea comod duietys aut irure dolor reprehenderit voluptate velit esse cillum dolore fugia
                                treat you eaxcepteur sint occaecat cupidatat non proident. </blockquote>
                            <div class="quotetion-icon2"><i class="fas fa-quote-left"></i></div>
                        </div>
                        <div class="single-about">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-about-img">
                                        <img class="lozad" data-src="{{ asset('img/about/about8.jpg') }}"
                                            alt="about" width="690" height="805">
                                        <div class="background-image">
                                            <img class="lozad" data-src="{{ asset('img/figure/figure95.png') }}"
                                                alt="figure" width="136" height="135">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog-body">
                                        <h2 class="heading-title">Finance Economy Always High Rate Growth</h2>
                                        <p class="blog-para1">Ahen an unknown printer took a galley of type andsc
                                            rambled it to make a type specimen book has surivaroled it to make a type
                                            specimen book. </p>
                                        <div class="single-list">
                                            <ul>
                                                <li><i class="fas fa-circle"></i>Acepteur sintas haecat sed non duiy</li>
                                                <li><i class="fas fa-circle"></i>Proident sunt culpa sed ipsum tempor sed
                                                </li>
                                                <li><i class="fas fa-circle"></i>Ut enim ad minim venercitation</li>
                                            </ul>
                                        </div>
                                        <p class="blog-para2">Ahen an unknown printer took a galley of type andsc
                                            rambled it to make a type specimen book has suriverled it to make a type
                                            specimen book. Aook a gallerambled it to make a type specimen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-social-area">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-post-tag">
                                        <ul class="item-tag">
                                            <li><span>Tags: </span>
                                                <a href="#">Business</a>
                                                <a href="#">Consulting</a>
                                                <a href="#" class="investment-btn">Investment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="blog-social">
                                        <li><span>Share: </span>
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-layout">
                            <div class="row">
                                <div class="col-6">
                                    <div class="prev-btn">
                                        <div class="media media-none--lg">
                                            <div class="pagination-img">
                                                <a href="#"><img class="lozad"
                                                        data-src="{{ asset('img/blog/blog32.jpg') }}"
                                                        class="media-img-auto" alt="Prev" width="74" height="74"></a>
                                            </div>
                                            <div class="media-body space-md">
                                                <h5 class="item-title"><a href="#">Finance industry leaders Help change
                                                        teir.</a></h5>
                                                <a href="#">Previous Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <div class="next-btn">
                                        <div class="media media-none--lg">
                                            <div class="pagination-img">
                                                <a href="#"><img class="lozad"
                                                        data-src="{{ asset('img/blog/blog33.jpg') }}"
                                                        class="media-img-auto" alt="Next" width="74" height="74"></a>
                                            </div>
                                            <div class="media-body space-md">
                                                <h5 class="item-title"><a href="#">Finance industry leaders Help change
                                                        teir.</a></h5>
                                                <a href="#">Next Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="media media-none--sm">
                                <div class="item-img">
                                    <img class="lozad" data-src="{{ asset('img/blog/blog34.jpg') }}"
                                        class="media-img-auto" alt="powel" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <p class="item-subtitle">Author</p>
                                    <h3 class="item-title">Mr. Pawoel</h3>
                                    <p>Ahen an unknown printer took a galley of type andsc rambled it to makype spec imen
                                        book has suriverled it to make a type specimen book. Aook a gallerambed it to make a
                                        type specimen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <div class="heading-layout">
                                <h4><span>2</span> Comments</h4>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img class="lozad" data-src="{{ asset('img/blog/blog35.jpg') }}"
                                        class="media-img-auto" alt="blog" width="80" height="80">
                                </div>
                                <div class="media-body">
                                    <h5 class="item-title">Jessica Rose</h5>
                                    <div class="item-date">May 14, 2018 at 5:41 am</div>
                                    <p>Financehen an unknown printer took a galley of type andsc rambled it to makype
                                        specimen book has suriverled it to make a type spec it to make a type specimen.</p>
                                    <a href="#" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                </div>
                            </div>
                            <div class="media media-none--xs">
                                <div class="item-img">
                                    <img class="lozad" data-src="{{ asset('img/blog/blog36.jpg') }}"
                                        class="media-img-auto" alt="blog" width="80" height="80">
                                </div>
                                <div class="media-body">
                                    <h5 class="item-title">Richard Steven</h5>
                                    <div class="item-date">May 14, 2018 at 5:41 am</div>
                                    <p>Goodnancehen an unknown printer took a galley of type andsc rambled it to
                                        makypespecimenbook has suriverled it to make a type spec.</p>
                                    <a href="#" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-reply">
                            <h2 class="item-title">Leave a Replay</h2>
                            <form class="comments-box">
                                <div class="row gutters-8">
                                    <div class="col-lg-12 form-group">
                                        <textarea class="form-control" rows="6" placeholder="Comments*"></textarea>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <input type="text" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <input type="text" class="form-control" placeholder="website*">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <a href="#" class="item-btn">Post comment</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-break-lg sidebar-widget">
                    <div class="widget widget-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-categoery-box">
                        <div class="widget-heading">
                            <h3 class="item-subtitle widget-subtitle">Categories</h3>
                        </div>
                        <ul class="item-categoery">
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-angle-right"></i>Business Plans
                                    <span>(25)</span></a>
                            </li>
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-angle-right"></i>Business Services
                                    <span>(12)</span></a></li>
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-angle-right"></i>Competitive Research
                                    <span>(05)</span></a></li>
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-angle-right"></i>Consutruction
                                    <span>(11)</span></a>
                            </li>
                            <li><a href="{{ url('/blog') }}"><i class="fas fa-angle-right"></i>Family Helping
                                    <span>(05)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-recent-box">
                        <div class="widget-heading">
                            <h3 class="item-subtitle">Recent News</h3>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog19.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog') }}">Collaboratively Ainistrate
                                        Empowered</a>
                                </h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog20.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog') }}">Collaboratively Ainistrate
                                        Empowered</a>
                                </h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog21.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog') }}">Collaboratively Ainistrate
                                        Empowered</a>
                                </h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog20.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog') }}">Collaboratively Ainistrate
                                        Empowered</a>
                                </h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-archives-box">
                        <div class="widget-heading">
                            <h3 class="item-subtitle widget-subtitle">Archives</h3>
                        </div>
                        <ul class="archives-list">
                            <li><a href="#"><i class="fas fa-angle-right"></i>March 2020</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>February 2020</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i>January 2020</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-gallery-box">
                        <div class="widget-heading">
                            <h3 class="item-subtitle widget-subtitle2">Gallery</h3>
                        </div>
                        <ul class="gallery-list">
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog22.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog23.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog24.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog25.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog26.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                            <li>
                                <div class="item-img"><a href="https://www.instagram.com/"><img
                                            class="lozad" data-src="{{ asset('img/blog/blog27.jpg') }}"
                                            alt="blog" width="100" height="92"></a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-tag-box">
                        <div class="widget-heading">
                            <h3 class="item-subtitle">Tags</h3>
                        </div>
                        <ul class="tag-list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Investment</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Brand Start            =-->
    <!--=====================================-->
    <section class="brand-wrap-layout1 brand-wrap-layout2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure22.png') }}"
                                    alt="figure" width="112" height="97"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure23.png') }}"
                                    alt="figure" width="92" height="102"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure24.png') }}"
                                    alt="figure" width="109" height="86"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure25.png') }}"
                                    alt="figure" width="140" height="98"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure26.png') }}"
                                    alt="figure" width="96" height="98"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="brand-box1">
                        <div class="brand-img">
                            <a href="#"><img class="lozad" data-src="{{ asset('img/figure/figure27.png') }}"
                                    alt="figure" width="95" height="79"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Personal Start         =-->
    <!--=====================================-->
    <section class="personal-info-wrap2">
        <div class="figure-img1">
            <img class="lozad" data-src="{{ asset('img/figure/figure5.png') }}" alt="figure" width="872"
                height="724">
        </div>
        <div class="figure-img2">
            <img class="lozad" data-src="{{ asset('img/figure/figure6.png') }}" alt="figure" width="487"
                height="269">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="personal-info-box2">
                        <h2 class="section-title">New York City</h2>
                        <ul class="information-list">
                            <li>120 F 2th Yt, New York NY 1259</li>
                            <li>+1 (212) 333-7888</li>
                            <li>email@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="personal-info-box2">
                        <h2 class="section-title">Melbourne City</h2>
                        <ul class="information-list">
                            <li>120 F 2th Yt, New York NY 1259</li>
                            <li>+1 (212) 333-7888</li>
                            <li>email@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="personal-info-box2">
                        <h2 class="section-title">Melbourne City</h2>
                        <ul class="information-list">
                            <li>120 F 2th Yt, New York NY 1259</li>
                            <li>+1 (212) 333-7888</li>
                            <li>email@example.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="figure-img1">
                <img class="lozad" data-src="{{ asset('img/figure/figure5.png') }}" alt="figure" width="872"
                    height="724">
            </div>
            <div class="color-overlay1">
                <img class="lozad" data-src="{{ asset('img/figure/figure51.png') }}" alt="figure" width="287"
                    height="375">
            </div>
            <div class="color-overlay2">
                <img class="lozad" data-src="{{ asset('img/figure/figure52.png') }}" alt="figure" width="196"
                    height="563">
            </div>
        </div>
        <div class="figure-img2">
            <img class="lozad" data-src="{{ asset('img/figure/figure6.png') }}" alt="figure" width="487"
                height="269">
        </div>
    </section>
@endsection
