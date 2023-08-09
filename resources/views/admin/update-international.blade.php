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


    @include ('admin.navbar')

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="{{ asset('img/favicon.png') }}">
            </div>
        </div>
    </div>

    @if ($packages)

    <div class="breadcrumb-area jarallax" style="background-image:url({{ asset('img/bg/5.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">{{ $packages['place'] }}</h1>
                        <ul class="page-list">
                            <li><a href="dashboard">Home</a></li>
                            <li>Holidays</li>
                            <li><a href="{{ url('add-international') }}">International</a></li>
                            <li>{{ $packages['place'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="details container">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('storage/' . $packages['image']) }}" class="details-image">
            </div>
            <div class="col-6">
                <div class="details-area">
                    <h1><b>{{ $packages['place'] }}</b></h1>
                    <h3><b>{{ $packages['package'] }}</b></h3>
                    <h4><b>Starting from {{ $packages['price'] }}</b></h4>

                    <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#updateModal">
                        <h5 class="text-light"><b>Update Package</b></h5>
                    </button>


                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="updateModalLabel">Update Package</h2>
                                    <a data-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                                        <i class="fa fa-times fa-lg" style="color: dimgray;"></i>
                                    </a>
                                </div>
                                <form id="updateForm" action="{{ route('update-international.submit', $packages['id']) }}" method="POST">
                                @csrf
                                    <div class="modal-body">
                                        <label>Place</label>
                                        <input type="text" name="place" class="form-control mb-3" value="{{ $packages['place'] }}">

                                        <label>Package</label>
                                        <input type="text" name="package" class="form-control mb-3" value="{{ $packages['package'] }}">

                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control mb-3" value="{{ $packages['price'] }}">

                                        <label>Image Upload</label>
                                        <input type="file" name="image" class="form-control mb-3">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">
                                            Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endif


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
    <script src="{{ asset('js/custom/custom-update-package.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- codingeek -->
    <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>