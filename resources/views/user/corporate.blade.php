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

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area jarallax" style="background-image:url({{ asset('img/bg/2.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Corporate</h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Corporate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

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
                                <img src="../img/icons/2.png" alt="icons">
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

    <!-- about section area start -->
    <div class="about-section pd-top-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="section-title mb-lg-0">
                        <h2 class="title">CORPORATE TRAVEL</h2>
                        <p>Cross Border is your one-stop shop for all corporate travel requirements. From airline
                            ticketing and hotel management to MICE and custom services, we provide informed, proactive
                            services that make corporate travel hassle-free. Come to us for expert knowledge, deep
                            experience, great servicecost savings, and end to end solutions.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about section area end -->

    <!-- offer area start -->

    <!-- offer area end -->

    <!-- video area start -->
    <!-- destination area End -->
    <div class="destination-area">
        <div class="container-bg mg-top-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/8.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Flights</h3>
                                <p class="content">Our IATA Certification allows us to deal with 400+ scheduled airlines
                                    220+ low cost carriers, around the world, which include international and domestic
                                    airlines.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/9.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Visa</h3>
                                <p class="content">Distribution of visa applications, returning processed applications,
                                    & related services.Precise & streamlined processes ensures clients & applicants
                                    absolute security and confidentiality</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/10.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Hotels & Transfers</h3>
                                <p class="content">3,000,000+ hotels to cater to your needs globally. Worldwide
                                    transfers in more than 12,000 destinations in 130 countries.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/11.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Airport Meet & Greet</h3>
                                <p class="content">Whether you’re traveling alone or with your family, on a business
                                    trip or a holiday, we’ll make sure you’re looked after on arrival. We’ll fast-track
                                    you through all the airport formalities.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/12.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Online Booking</h3>
                                <p class="content">Cross Border will provide full access to our GDS “Galileo”, to check
                                    fares, itineraries and to make bookings.Our senior consultants will always support
                                    with more complicated bookings.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/13.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Traveler Profiles</h3>
                                <p class="content">We build and update traveler profiles powered by the GDS & the self
                                    booking tool, used by our travel consultants &travelers.Create and update profiles
                                    at your own convenience.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/14.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">24/7 Support</h3>
                                <p class="content">Cross Border provides access to an after-hours emergency traveller
                                    assist service to allow client personnel to change or make urgent travel
                                    arrangements.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/15.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Cost Savings</h3>
                                <p class="content">A prudent travel policy that takes into account all aspects, Constant
                                    assessment for policy improvements, Understanding of travel policy at all levels,
                                    Travel plans firmed up well in advance, Strict adherence to travel policy with
                                    minimum exceptions.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-destination-grid text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/destination-list/16.png') }}" alt="img">
                            </div>
                            <div class="details">

                                <h3 class="title">Key Account Management</h3>
                                <p class="content">Framing of client travel policy, Process ownership, Creation of SLA
                                    and SOP, Supplier negotiation, Management of savings, Business review meetings</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- destination area End -->

    <!-- holiday plan area start -->

    <div class="team-area pd-top-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="title">ADDITIONAL SERVICES</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad1.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Policy
                                Consultation</a></h5>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad2.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Travel
                                Insurance</a></h5>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad3.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Excursions
                                & Tours</a></h5>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad4.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Weather
                                Information</a></h5>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad5.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Car
                                Rental</a></h5>

                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad6.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Destination
                                Information & Maps.</a></h5>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad7.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">City
                                Guides</a></h5>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team text-center">
                        <div class="thumb">
                            <img src="{{ asset('img/copad8.jpg') }}">
                        </div>
                        <h5 class="name"><a href="#">Event
                                Calendars</a></h5>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- holiday plan area end -->

    <!-- client review area start -->

    <!-- client review area End -->

    <!-- blog area start -->

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