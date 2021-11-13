@extends('layouts.master')
@section('title')
    Blog - JAMCO Group Bangladesh
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
                        <h1 class="page-title">Our Latest Blogs</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
    <section class="blog-wrap-layout3">
        <div class="container">
            <div class="row gutters-50">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('img/blog/blog11.jpg') }}"
                                            alt="blog" width="523" height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">25 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('img/blog/blog12.jpg') }}"
                                            alt="blog" width="523" height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">24 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('img/blog/blog13.jpg') }}"
                                            alt="blog" width="523" height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">23 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img src="{{ asset('img/blog/blog14.jpg') }}"
                                            alt="blog" width="523" height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">22 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img class="lozad"
                                            data-src="{{ asset('img/blog/blog15.jpg') }}" alt="blog" width="523"
                                            height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">21 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img class="lozad"
                                            data-src="{{ asset('img/blog/blog16.jpg') }}" alt="blog" width="523"
                                            height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">20 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img class="lozad"
                                            data-src="{{ asset('img/blog/blog17.jpg') }}" alt="blog" width="523"
                                            height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">19 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog-box2">
                                <div class="item-img">
                                    <a href="{{ url('/blog-details') }}"><img class="lozad"
                                            data-src="{{ asset('img/blog/blog18.jpg') }}" alt="blog" width="523"
                                            height="410"></a>
                                </div>
                                <div class="content-box">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{ url('/blog-details') }}"><i class="fas fa-user"></i>by
                                                    admin</a></li>
                                            <li><a href="{{ url('/blog-details') }}"><i
                                                        class="fas fa-tag"></i>Finance,
                                                    News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="section-title"><a href="{{ url('/blog-details') }}">Control allows you
                                            create Finance
                                            where</a></h2>
                                    <div class="blog-date">18 <span>Oct</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-pagination">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
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
                                <a href="{{ url('/blog-details') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog19.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog-details') }}">Collaboratively
                                        Ainistrate
                                        Empowered</a></h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog-details') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog20.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog-details') }}">Collaboratively
                                        Ainistrate
                                        Empowered</a></h4>
                                <div class="item-time">06 Aug, 2020</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <a href="{{ url('/blog-details') }}"><img class="lozad"
                                        data-src="{{ asset('img/blog/blog21.jpg') }}" alt="blog" width="98"
                                        height="96"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="heading-title"><a href="{{ url('/blog-details') }}">Collaboratively
                                        Ainistrate
                                        Empowered</a></h4>
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
    @include('components.brands-bar')
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
