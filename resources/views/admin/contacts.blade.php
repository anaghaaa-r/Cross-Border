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


    <section class="contacts">

        <div class="container p-5">
            <h1 class="mb-5">CONTACTS</h1>


            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Message</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact['id'] }}</td>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phone'] }}</td>
                        <td>{{ $contact['message'] }}</td>
                        
                        <td class="text-center">

                            <a data-toggle="modal" data-target="#deleteModal" onclick="openDeleteModal({{ $contact['id'] }})">
                                <i class="fa fa-trash"></i>
                            </a>

                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title fs-5" id="deleteModalLabel">Delete Contact</h2>
                                            <a data-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                                                <!-- <i class="fa fa-times fa-lg" style="color: dimgray;"></i> -->
                                                <span aria-hidden="true">&times;</span>
                                            </a>
                                        </div>
                                        <div class="modal-body">
                                            <p>Delete contact with ID: <span id="contactId"></span></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal" id="confirmDeleteBtn">Confirm Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

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
    <script src="{{ asset('js/custom/custom-deletecontact.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- codingeek -->
    <!-- <script src="codingeek-link.js"></script>
    <script src="../../../codingeek.net/codingeek-js/codingeek-2"></script> -->
</body>


</html>