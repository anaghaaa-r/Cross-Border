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


    <main class="add-section">
        <section class="add-india-section">
            <div class="container py-5">
                <h1>ADD INDIA PACKAGE</h1>
                <div class="india-add-area">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <form method="POST" action="{{ route('india.submit') }}" id="packageForm">
                                @csrf
                                <label>Place</label>
                                <input type="text" class="form-control mb-3" name="place" required>

                                <label>Package</label>
                                <input type="text" class="form-control mb-3" name="package" required>

                                <label>Price</label>
                                <input type="text" class="form-control mb-3" name="price" required>

                                <!-- <label>Validity</label>
                                <input type="text" class="form-control mb-3" [(ngModel)]="validity" name="validity" required> -->

                                <label>Upload Image</label>
                                <input type="file" class="form-control mb-3" name="image" id="filename" />

                                <button type="submit" class="btn btn-primary" value="Add International">
                                    ADD INDIA PACKAGE
                                </button>

                            </form>

                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="india container">
            <div class="row">
                @foreach ($allindia as $india)
                <div class="col-3 mb-5">
                    <div class="india-card d-flex flex-column" style="height: 100%;">
                        <div class="card-body">
                            <a href="{{ url('update-india', $india['id']) }}" style="cursor: pointer;">
                                <img src="{{ asset('storage/' . $india['image']) }}" alt="India image"
                                    class="india-image">
                            </a>
                        </div>
                        <div class="d-flex flex-wrap flex-grow-1 align-content-end justify-content-center">
                            <h5 style="width: 100%;" class="text-center">
                                <a href="" style="cursor: pointer;">
                                    <b>{{ $india['place'] }}</b>
                                </a>
                            </h5>
                            <h4 style="width: 100%;" class="text-center">{{ $india['package'] }}</h4>
                            <h6 style="width: 100%;" class="text-center">{{ $india['price'] }}</h6>




                            <a class="btn btn-danger mt-3" data-toggle="modal" data-target="#deleteModal"
                                onclick="openDeleteModal({{ $india['id'] }}, '{{ $india['place'] }}')">
                                Delete Package
                            </a>

                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title fs-5" id="deleteModalLabel">Delete india</h2>
                                            <a data-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                                                <!-- <i class="fa fa-times fa-lg" style="color: dimgray;"></i> -->
                                                <span aria-hidden="true">&times;</span>
                                            </a>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Delete package : <span id="indiaId" style="display:none;"></span>
                                                <span id="indiaPlace"></span>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger" data-dismiss="modal"
                                                id="confirmDeleteBtn">Confirm Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </section>
    </main>




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
    <script src="{{ asset('js/custom/custom-add-package.js') }}"></script>
    <script src="{{ asset('js/custom/custom-delete-india.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- codingeek -->
    <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>