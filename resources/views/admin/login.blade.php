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
    <link rel="stylesheet" href="{{ asset('css/custom-admin.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="{{ asset('img/favicon.png') }}">
            </div>
        </div>
    </div>

    <section class="login-section">

        <div class="row">
            <div class="col-6">
                <div class="admin-login">
                    <div class="logo-area">
                        <img src="{{ asset('img/favicon.png') }}" class="logo-login">
                        <b class="ml-2">Cross Border</b>
                    </div>
                    <div class="login-area">
                        <h2><b>Cross Border</b></h2>
                        <h3>Travel Solutions</h3>
                        <form class="login-form" id="adminLoginForm" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <h4 class="title-login">Admin Login</h4>
                            @if(session('error'))
                            <p class="text-danger">{{ session('error') }}</p>
                            @endif
                            <p class="text-muted">Enter your login credentials</p>
                            <input type="text" class="form-control login mb-4" name="username" id="username"
                                placeholder="Username">

                            <input type="password" class="form-control login mb-4" name="password" id="password"
                                placeholder="Password">

                            <button type="submit" class="btn btn-dark my-4" value="Login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-login" style="background-image: url({{ asset('img/others/signup.png') }});">
                </div>
            </div>
        </div>

    </section>




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
    <script src="{{ asset('js/custom/custom-admin-login.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- codingeek -->
    <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>