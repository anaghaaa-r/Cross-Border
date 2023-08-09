<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cross Border Travel and Tourism Private Limited</title>
    <!-- favicon -->
    <link rel=icon href="{{ asset('img/favicon.png') }}" sizes="20x20" type="image/png">

    <!-- Additional plugin css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--Codingeek -->
    <link rel="stylesheet" href="">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="{{ asset('img/favicon.png') }}">
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="#" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup End -->

    <!-- //. sign up Popup -->
    @include ('user.booknow-button')
    <!-- //. sign up Popup End -->

    <!-- navbar area start -->
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="mobile-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/sticky-logo.png') }}" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                    data-target="#tp_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </span>
                </button>
                <div class="nav-right-content">
                    <ul class="pl-0">
                        <li class="top-bar-btn-booking">
                            <a class="btn btn-yellow" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                        </li>


                        <li class="notification">
                            <a class="signUp-btn" href="#">
                                <strong><i class="fa fa-user-o"></i> Book Now</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="tp_main_menu">
                <div class="logo-wrapper desktop-logo">
                    <a href="{{ url('/') }}" class="main-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </a>
                    <a href="{{ url('/') }}" class="sticky-logo">
                        <img src="{{ asset('img/sticky-logo.png') }}" alt="logo">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">Home</a>

                    </li>
                    <li>
                        <a href="{{ url('aboutus') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('corporate') }}">Corporate</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Holidays</a>

                        <ul class="sub-menu">
                            <li><a href="{{ url('deals') }}">Deals</a></li>
                            <li><a href="{{ url('international') }}">International</a></li>
                            <li><a href="{{ url('incredibleindia')}}">Incredible India</a></li>

                        </ul>

                    </li>
                    <li>
                        <a href="{{ url('mice') }}">MICE</a>

                    </li>
                    <li>
                        <a href="{{ url('specialisedproducts') }}">Specialised Products</a>

                    </li>
                    <li>
                        <a href="{{ url('contactus')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="notification">
                        <a class="btn btn-yellow signUp-btn" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->

    <!-- banner area start -->
    <div class="banner-area">
        <div class="banner-slider">
            <div class="banner-slider-item banner-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 offset-xl-2 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div class="banner-inner">
                                        <p class="banner-cat s-animate-1">Cross Border Travel Solutions</p>
                                        <h2 class="banner-title s-animate-2">Experts in <br> Corporate Travel </h2>
                                    </div>
                                </div>
                                <!--<div class="col-lg-3 col-sm-4">
                                    <div class="video-popup-btn s-animate-video">
                                        <a href="#" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>-->
                                <div class="col-lg-12 banner-tour-package">
                                    <div class="row">
                                        <div class="col-sm-4 s-animate-3">
                                            <div class="tp-price-meta">
                                                <p>Established in</p>
                                                <h2>2006</h2>

                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-4">
                                            <div class="tp-price-meta">
                                                <p>Offices in</p>
                                                <h2>Worldwide</h2>

                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-5">
                                            <div class="tp-price-meta">
                                                <p>Emergency Travel Service</p>
                                                <h2>24/7</h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-item banner-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 offset-xl-2 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div class="banner-inner">
                                        <p class="banner-cat s-animate-1">Cross Border Travel Solutions</p>
                                        <h2 class="banner-title s-animate-2">Group
                                            Travel & <br> Flight Chartering</h2>
                                    </div>
                                </div>
                                <!--<div class="col-lg-3 col-sm-4">
                                    <div class="video-popup-btn s-animate-video">
                                        <a href="#" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>-->
                                <div class="col-lg-12 banner-tour-package">
                                    <div class="row">
                                        <div class="col-sm-4 s-animate-3">
                                            <div class="tp-price-meta">
                                                <p>Established in</p>
                                                <h2>2006</h2>

                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-4">
                                            <div class="tp-price-meta">
                                                <p>Offices in</p>
                                                <h2>Worldwide</h2>

                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-5">
                                            <div class="tp-price-meta">
                                                <p>Emergency Travel Service</p>
                                                <h2>24/7</h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="banner-social-meta">
            <div class="banner-slider-dots"></div>
            <ul class="social-icon">
                <li>
                    <a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>

                <li>
                    <a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>

            </ul>
        </div>
        <div class="container">
            <div class="banner-slider-controls">
                <div class="slider-nav tp-control-nav"></div>
                <!--slider-nav-->
                <div class="tp-slider-extra slider-extra">
                    <div class="text">
                        <span class="first">01</span>
                        <span class="devider">/</span>
                        <span class="last"></span>
                    </div>
                </div>
                <!--slider-extra-->
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- search area start -->
    <!--<div class="search-area tp-main-search-area">
        <div class="container">
            <div class="tp-main-search">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-search-single-wrap">
                            <input class="w-100" type="text" placeholder="Kerala,India">
                            <i class="ti-location-pin"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="tp-search-single-wrap">
                            <input class="w-100" type="text" placeholder="Where From?">
                            <i class="fa fa-dot-circle-o"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 order-lg-9">
                        <div class="tp-search-single-wrap float-left w-100">
                            <select class="select w-100">
                                <option value="1">Travel Type</option>
                                <option value="2">Event Travel</option>
                                <option value="3">Weekend Break</option>
                                <option value="4">Package Holiday</option>
                                <option value="5">Business Travel</option>
                            </select>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8 order-lg-6">
                        <div class="tp-search-single-wrap float-left">
                            <div class="tp-search-date tp-departing-date-wrap w-50 float-left">
                                <input type="text" class="departing-date" placeholder="Departing">
                                <i class="fa fa-calendar-minus-o"></i>
                            </div>
                            <div class="tp-search-date tp-returning-date-wrap w-50 float-left">
                                <input type="text" class="returning-date" placeholder="Returning">
                                <img src="{{asset('img/icons/2.png')}}" alt="icons">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 order-12">
                        <a class="btn btn-yellow" href="#"><i class="ti-search"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- search area end -->

    <!-- intro area start -->
    <div class="intro-area pd-top-112">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
                        <h4 class="intro-title">
                            <span class="intro-count">01</span>
                            <a class="intro-cat" href="corporate">CORPORATE
                                TRAVEL</a>
                        </h4>
                        <p>Cross Border is your one-stop shop for all corporate travel requirements. From airline
                            ticketing and hotel management to MICE...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.2s">
                        <h4 class="intro-title">
                            <span class="intro-count">02</span>
                            <a class="intro-cat" href="mice">MICE</a>
                        </h4>
                        <p>We specialised in conferences, meetings, gala dinner, cocktail receptions and other corporate
                            functions...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay="0.3s">
                        <h4 class="intro-title">
                            <span class="intro-count">03</span>
                            <a class="intro-cat" href="deals">HOLIDAYS</a>
                        </h4>
                        <p>Hotel accommodations,
                            Tours around the World,
                            World attractions,
                            Transportation, Outbound services....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area end -->

    <div class="upcomming-world pd-top-108">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <h2 class="title">Explore Our Deals</h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="upcomming-card-slider upcomming-card-slider-1 tp-common-slider-style">

        @foreach ($deals as $deal)

            <div class="single-upconing-card">
                <div class="shadow" style="background-image: url({{ asset( 'storage/' . $deal['image']) }});">
                    <img src="{{ asset( 'storage/' . $deal['image']) }}" alt="{{ $deal['place'] }}">
                </div>

                <div class="content text-center">
                    <h5 class="title"><a href="{{ url('deals-details', $deal['id']) }}">{{ $deal['place'] }}</a></h5>
                    <p>{{ $deal['package'] }}<br>
                        <a class="btn-read-more" href="{{ url('deals-details', $deal['id']) }}"><span>Explore<i
                                    class="la la-arrow-right"></i></span></a>
                    </p>

                </div>
            </div>

        @endforeach

        </div>
    </div>

    <!-- offer area start -->
    <div class="offer-area pd-top-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">Experts in Corporate Travel</h2>
                        <p>Cross Border Travel and Tourism is your one-stop shop for all corporate travel
                            requirements. From airline ticketing and hotel management to
                            MICE and custom services, we provide informed, proactive
                            services that make corporate travel hassle-free. Come to us
                            for expert knowledge, deep experience, great service, cost
                            savings, and end to end solutions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="destinations-list-slider-bg">
            <div class="container">

                <div class="row">
                    <div class="col-xl-9 col-lg-10 offset-xl-1 order-lg-12">

                        <div class="destinations-list-slider">

                        @foreach ($international as $international)

                            <div class="d-list-slider-item">
                                <div class="single-destinations-list text-center">
                                    <div class="thumb">
                                        <span class="d-list-tag">INTERNATIONAL</span>
                                        <img src="{{ asset( 'storage/' . $international['image']) }}" alt="{{ $international['place'] }}">
                                        <div class="d-list-btn-wrap">
                                            <div class="d-list-btn">
                                                <a class="btn btn-yellow" href="{{ url('international-details', $international['id']) }}" tabindex="0">Know
                                                    More <i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5 class="title"><a href="{{ url('international-details', $international['id']) }}">{{ $international['place'] }}</a></h5>

                                        <ul class="tp-list-meta border-bt-dot">

                                            <li><i class="fa fa-clock-o"></i>{{ $international['package'] }}</li>

                                        </ul>
                                        <div class="tp-price-meta tp-price-meta-cl">
                                            <p>Price Starting from</p>
                                            <h2>{{ $international['price'] }}</h2>
                                            <!--<del>₹ 6200</del>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        </div>
                    </div>

                    <div class="col-lg-2 align-self-center order-lg-11">
                        <div class="container">
                            <div class="destinations-slider-controls">


                                <div class="section-title style-two">
                                    <h2 class="title">International Tours</h2>

                                </div>

                                <div class="slider-nav tp-control-nav"></div>
                                <!--slider-nav-->
                                <div class="tp-slider-extra slider-extra">
                                    <div class="text">
                                        <span class="first">01 </span>
                                        <span class="last"></span>
                                    </div>
                                    <!--text-->
                                    <div class="d-list-progress" role="progressbar" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <span class="slider__label sr-only"></span>
                                    </div>
                                </div>
                                <!--slider-extra-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer area end -->


    <div class="client-area pd-top-108 pd-bottom-120 jarallax" style="background-image:url({{ asset('img/bg/10.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center style-two">
                        <h2 class="title">Incredible India</h2>

                    </div>
                </div>
            </div>
            <div class="swiper-container client-slider-two">
                <div class="swiper-wrapper">

                @foreach ($india as $india)
                    <!-- item -->
                    <div class="swiper-slide">
                        <div class="client-slider-item">
                            <div class="row">
                                <div class="col-lg-5 thumb" style="background-image: url({{ asset( 'storage/' . $india['image']) }})">
                                    <div class="title-meta">
                                        <p>Incredible India</p>
                                        <h3><a href="{{ url('incredibleindia-details', $india['id']) }}">{{ $india['place'] }}</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="details">

                                        <h3><a href="{{ url('incredibleindia-details', $india['id']) }}">{{ $india['place'] }}</a></h3>
                                        <span>Incredible India</span>
                                        <p>{{ $india['package'] }}</p>
                                        <a href="{{ url('incredibleindia-details', $india['id']) }}">Know More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                </div>
                <!-- Add Pagination -->
                <div class="tp-control-nav text-center">
                    <div class="slick-arrow swiper-buttons-prev"><i class="la la-long-arrow-left"></i></div>
                    <div class="slick-arrow swiper-buttons-next"><i class="la la-long-arrow-right"></i></div>
                </div>
                <!-- /.end carousel -->
            </div>
        </div>
    </div>

    <!-- video area start -->
    <div class="video-area tp-video-area pd-top-110" style="background-image: url({{ asset('img/bg/7.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 align-self-center wow animated fadeInRight" data-wow-duration="1s"
                    data-wow-delay="0.3s">
                    <div class="section-title mb-lg-0 mb-4 text-center text-lg-left">
                        <h2 class="title">Fast Facts About US</h2>
                        <p>• Established in 2006 with offices in UAE & Uzbekistan,
                            and with a recently opened office in JORDAN<br>
                            • More offices planned worldwide: Kuwait, Russia,
                            Thailand and India<br>
                            • Specialists in Corporate Travel Management, Group
                            Travel & Flight Chartering<br>
                            • Pioneers in inbound tourism from CIS into the UAE<br>
                            • In - Depth experience in Middle East & CIS Markets<br>
                            • An exclusive range of premium inbound travel<br>
                            • Diversifying into golf tours, medical tourism & sport tourism</p>
                        <a class="btn btn-yellow" href="aboutus"><span>Read More<i
                                    class="la la-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 offset-xl-1 wow animated fadeInLeft" data-wow-duration="1s"
                    data-wow-delay="0.3s">
                    <div class="video-popup-wrap">
                        <div class="thumb">
                            <img src="{{ asset('img/video.png') }}" alt="video">
                        </div>
                        <div class="video-popup-btn">
                            <a href="#" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->

    <!-- holiday plan area start -->

    <!-- holiday plan area end -->

    <!-- client review area start -->
    <div class="client-area pd-top-108">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">What Our Clients Say</h2>
                        <p>Smart Travel Solutions for All Your Corporate Needs</p>
                    </div>
                </div>
            </div>
            <div class="client-slider tp-common-slider-style">
                <div class="single-client-card">
                    <div class="quote"><i class="ti-quote-left"></i></div>
                    <p class="content-text">The largest country in the world, Russia offers a broad array of travel
                        experiences, from treks up the slopes of glacier-capped mountains to strolls along the shoreline
                        of Earth’s oldest lake. Historical sites and cultural</p>
                    <div class="media">
                        <!--<div class="media-left">
                            <img src="../img/blog-details/11.png" alt="img">
                        </div>-->
                        <div class="media-body">
                            <h4>Jasmine Woodkin</h4>
                            <span>TOURIST</span>
                            <span class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <span>4.0</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="single-client-card">
                    <div class="quote"><i class="ti-quote-left"></i></div>
                    <p class="content-text">The largest country in the world, Russia offers a broad array of travel
                        experiences, from treks up the slopes of glacier-capped mountains to strolls along the shoreline
                        of Earth’s oldest lake. Historical sites and cultural</p>
                    <div class="media">
                        <!--<div class="media-left">
                            <img src="../img/blog-details/11.png" alt="img">
                        </div>-->
                        <div class="media-body">
                            <h4>Woodkin Jack</h4>
                            <span>TOURIST</span>
                            <span class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <span>4.0</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="single-client-card">
                    <div class="quote"><i class="ti-quote-left"></i></div>
                    <p class="content-text">The largest country in the world, Russia offers a broad array of travel
                        experiences, from treks up the slopes of glacier-capped mountains to strolls along the shoreline
                        of Earth’s oldest lake. Historical sites and cultural</p>
                    <div class="media">
                        <!--<div class="media-left">
                            <img src="../img/blog-details/11.png" alt="img">
                        </div>-->
                        <div class="media-body">
                            <h4>Rafayel Gee</h4>
                            <span>TOURIST</span>
                            <span class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <span>4.0</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="single-client-card">
                    <div class="quote"><i class="ti-quote-left"></i></div>
                    <p class="content-text">The largest country in the world, Russia offers a broad array of travel
                        experiences, from treks up the slopes of glacier-capped mountains to strolls along the shoreline
                        of Earth’s oldest lake. Historical sites and cultural</p>
                    <div class="media">
                        <!--<div class="media-left">
                            <img src="../img/blog-details/11.png" alt="img">
                        </div>-->
                        <div class="media-body">
                            <h4>Thomsa Doe</h4>
                            <span>TOURIST</span>
                            <span class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <span>4.0</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client review area End -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-blog single-blog-wrap style-two">
                        <div class="thumb single-blog-left-wrap">
                            <img src="{{ asset('img/blog/10.png') }}" alt="blog">
                        </div>
                        <div class="single-blog-details single-blog-right-wrap">

                            <h4 class="title">Corporate Service Delivery</h4>
                            <p class="content">• Option of creating an onsite Business
                                Travel Centre<br>
                                • Offerings may be customized as per
                                local needs<br>
                                • Review meetings<br>
                                • Corporate self-book tool available<br>
                                • 24/7 Emergency Travel Service<br>
                                • Rigorous commitment to SLAs</p>
                            <a class="btn btn-yellow" href="{{ url('corporate') }}"><span>Read More<i
                                        class="la la-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="{{ asset('img/blog/11.png') }}" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">

                                        <h4 class="title">Key
                                            Account
                                            Management
                                        </h4>
                                        <a class="btn btn-yellow" href="{{ url('corporate') }}"><span>Read More<i
                                                    class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="{{ asset('img/blog/12.png') }}" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">

                                        <h4 class="title">MIS
                                            Reports
                                        </h4>
                                        <a class="btn btn-yellow" href="{{ url('corporate') }}"><span>Read More<i
                                                    class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="{{ asset('img/blog/13.png') }}" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">

                                        <h4 class="title">Cost
                                            Savings
                                        </h4>
                                        <a class="btn btn-yellow" href="{{ url('corporate') }}"><span>Read More<i
                                                    class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="{{ asset('img/blog/14.png') }}" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">

                                        <h4 class="title">MICE</h4>
                                        <a class="btn btn-yellow" href="{{ url('mice') }}"><span>Read More<i
                                                    class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area End -->

    <!-- ads area start -->
    <!--<div class="main-gallery-area pd-top-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-gallery-area bg-gray">
                        
                        <div class="gallery-slider">
                            <div class="thumb">
                                <img src="../img/partner/1.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/2.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/3.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/4.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/5.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/6.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/7.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/8.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/9.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/10.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/11.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/12.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/13.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="../img/partner/14.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
        </div>
    </div>-->

    <!-- ads area End -->

    <!-- newslatter area Start -->
    <!--<div class="newslatter-area pd-top-20">
        <div class="container">
            <div class="newslatter-area-wrap border-tp-solid">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-5 offset-xl-2">
                        <div class="section-title mb-md-0">
                            <h2 class="title">Quick Contact</h2>
                            <p>Please enter your e-mail address. We will contact you soon</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 align-self-center offset-xl-1">
                        <div class="input-group newslatter-wrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <button class="btn btn-yellow" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- newslatter area End -->

    <!-- footer area start -->
    <footer class="footer-area" style="background-image: url({{ asset('img/bg/2.png') }});">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget widget ">
                        <div class="widget-contact">
                            <!--  <h4 class="widget-title">Contact us</h4>-->

                            <a href="{{ url('/') }}" class="footer-logo">
                                <img src="{{ asset('img/logo.png') }}" alt="footer logo">
                            </a><br><br>

                            <p>
                                <i class="fa fa-map-marker"></i>
                                <span>Cross Border Travel and Tourism Private Limited<br>
                                    5th Floor, CM Mathew Brothers Arcade, Chakkorathukulam<br>
                                    Calicut 673006, Kerala, India
                                </span>
                            </p>
                            <p class="location">
                                <i class="fa fa-envelope-o"></i>
                                <span><a href="mailto:travel@cbts.in" target="_blank">travel@cbts.in</a></span>
                            </p>
                            <p class="telephone">
                                <i class="fa fa-phone base-color"></i>
                                <span>
                                    <a href="tel:+919995116511" target="_blank">+91 999 511 6511</a>
                                </span>


                            </p>

                            <ul class="social-icon">
                                <li>
                                    <a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Quick Link</h4>
                        <ul class="widget_nav_menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('aboutus') }}">About Us</a></li>
                            <li><a href="{{ url('corporate') }}">Corporate</a></li>
                            <li><a href="{{ url('mice') }}">MICE</a></li>
                            <li><a href="{{ url('specialisedproducts') }}">Specialised Products</a></li>
                            <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget widget">
                        <h4 class="widget-title">Holidays</h4>
                        <ul class="widget_nav_menu">
                            <li><a href="{{ url('deals') }}">Deals</a></li>
                            <li><a href="{{ url('international') }}">International</a></li>
                            <li><a href="{{ url('incredibleindia') }}">Incredible India</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright-inner">
            <div class="copyright-text">
                &copy; 2022 All rights reserved Cross Border Travel and Tourism Private Limited . Powered by <a
                    href="https://coperor.in/" target="_blank"><span>Coperor.</span></a>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    
    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <!-- Additional plugin js -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js' )}}"></script>

    <!-- main js -->
    <script src="{{ asset('js/custom-bookingButton.js') }}"></script>
    <script src="{{ asset('js/custom/custom-error.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- codingeek -->
    <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>