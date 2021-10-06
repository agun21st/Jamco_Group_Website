@extends('layouts.master')
@section('title')
    Contact | Jamco Group
@endsection
@section('heads')
@endsection
@section('content')
    <!--=====================================-->
    <!--=            Breadcrumb Start       =-->
    <!--=====================================-->
    <section class="breadcrumb-wrap">
        <div class="breadcrumb-img1">
            <img src="img/figure/figure79.png" alt="figure" width="223" height="109">
        </div>
        <div class="breadcrumb-img2">
            <img src="img/figure/figure78.png" alt="figure" width="185" height="56">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h1 class="page-title">Contact With Us</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Contact Start          =-->
    <!--=====================================-->
    <section class="contact-wrap1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box1">
                        <h2 class="heading-title">Mail for information</h2>
                        <ul class="contact-list">
                            <li>info@gmail.com</li>
                            <li>info@gmail.com</li>
                        </ul>
                        <div class="contact-icon">
                            <div class="item-icon"><i class="fas fa-envelope"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box1">
                        <h2 class="heading-title">Office Phone Number</h2>
                        <ul class="contact-list">
                            <li>+ (123) 365-2907</li>
                            <li>+ (123) 129-1906</li>
                        </ul>
                        <div class="contact-icon">
                            <div class="item-icon"><i class="fas fa-phone"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box1 contact-box4">
                        <h2 class="heading-title">Mail for information</h2>
                        <ul class="contact-list2">
                            <li>PO Box Collins Street 5980,Australia</li>
                            <li>PO Box Collins Street 5980,Australia</li>
                        </ul>
                        <div class="contact-icon">
                            <div class="item-icon"><i class="fas fa-map"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Contact Start          =-->
    <!--=====================================-->
    <section class="contact-wrap2">
        <div class="container">
            <div class="row gutters-40">
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1472059294674!2d90.38019371494691!3d23.742129484593374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9b067dbaf61%3A0x75c5b9a41c0b3c4a!2sCreative%20IT%20Institute%20(Campus%202)!5e0!3m2!1sen!2sbd!4v1633343752963!5m2!1sen!2sbd"
                        width="600" height="610" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="contact-box3">
                        <div class="contact-bg-image">
                            <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                        </div>
                        <div class="item-heading">
                            <h2 class="item-title">We Love To Hear From You</h2>
                            <p>Please call or email contact form and we will be happy to assist you.</p>
                        </div>
                        <form class="message-box" id="">
                            <div class="row gutters-10">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name*"
                                        data-error="First Name is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name*"
                                        data-error="Last Name is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email*"
                                        data-error="Email is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone*"
                                        data-error="Phone is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject*"
                                        data-error="Subject is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Comments"
                                        cols="30" rows="6" data-error="Message Name is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="submit" class="item-btn">Send message</button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
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
                    <div class="banner-box1">
                        <div class="item-img">
                            <img src="img/blog/blog9.jpg" alt="blog" width="586" height="200">
                        </div>
                        <div class="bannar-details">
                            <h3 class="heading-title">Need Any Financial Help!</h3>
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
    <!--=            Personal Start         =-->
    <!--=====================================-->
    <section class="personal-info-wrap2">
        <div class="figure-img1">
            <img src="img/figure/figure5.png" alt="figure" width="872" height="724">
        </div>
        <div class="figure-img2">
            <img src="img/figure/figure6.png" alt="figure" width="487" height="269">
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
                <img src="img/figure/figure5.png" alt="figure" width="872" height="724">
            </div>
            <div class="color-overlay1">
                <img src="img/figure/figure51.png" alt="figure" width="287" height="375">
            </div>
            <div class="color-overlay2">
                <img src="img/figure/figure52.png" alt="figure" width="196" height="563">
            </div>
        </div>
        <div class="figure-img2">
            <img src="img/figure/figure6.png" alt="figure" width="487" height="269">
        </div>
    </section>
    <!--=====================================-->
    <!--=            Brand Start            =-->
    <!--=====================================-->
    @include('components.brands-bar')
@endsection
