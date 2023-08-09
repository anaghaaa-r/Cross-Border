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

</head>

<body>

    <nav class="navbar navbar-light bg-light justify-content-between" style="padding: 17px 0px;">
        <!-- <a class="navbar-brand">Navbar</a> -->
        <div class="container">
            <a href="{{ url('dashboard') }}"><img src="{{ asset('img/favicon.png') }}" alt="icon" style="width: 60px;"></a>
            <h5 class="mr-auto ml-5"><b><a href="{{ url('dashboard') }}">DASHBOARD</a></b></h5>
            <h6 id="welcomemsg" class="mr-3"></h6>
            <form class="form-inline" method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
        </div>
    </nav>


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
        <script src="{{ asset('js/custom/custom-logout.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- codingeek -->
        <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>