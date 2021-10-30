<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> NOPROB</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    {{-- <link href="{{ asset('assets/frontend/css/aos.css') }}" rel="stylesheet"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    @stack('styles')
    <style>
        body {
            background-color: #ffff;
            font-family: 'Assistant', sans-serif;
            color: #003A2D;
            overflow-x: hidden;
        }
        
        .navbar-brand img {
            max-height: 40px;
        }
        
        .navbar-light .navbar-nav .nav-link {
            color: #003A2D;
        }
        
        .navbar-light .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #003A2D !important;
        }
        
        .btn-navbar-right {
            margin-top: -15px !important;
            margin-bottom: -11px !important;
            margin-right: -32px !important;
            height: 70px;
            border-radius: 0;
        }
        
        .btn-login {
            background-color: #003A2D;
            color: #fff;
        }
        
        .btn-login:hover {
            background-color: #0F5747;
            color: #fff;
        }
        
        header {
            padding: 180px 0 165px;
            margin-top: -70px;
            background-image: url("{{ asset('assets/frontend/images/bg_2.jpg') }}");
            background-size: cover;
        }
        
        header h1,
        header p {
            color: #fff;
        }
        
        header h1 {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            font-size: 50px;
        }
        
        header p {
            font-size: 20px;
        }
        
        header .btn-get-started {
            background-color: #FF9900;
            color: #fff;
        }
        
        header .btn-get-started:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .section-stats {
            margin-top: -60px;
        }
        
        .section-stats .stats-detail {
            padding-top: 10px;
            background-color: #fff;
            padding-left: 40px;
        }
        
        .section-stats h2 {
            font-size: 30px;
            margin-bottom: 0;
        }
        
        .section-stats p {
            font-size: 20px;
            font-weight: lighter;
        }
        
        .section-popular {
            min-height: 540px;
            background-color: #003A2D;
            margin-top: -42px;
            margin-bottom: -230px;
        }
        
        .section-popular .section-popular-heading {
            margin-top: 160px;
        }
        
        .section-popular .section-popular-heading h2,
        .section-popular .section-popular-heading p {
            color: #fff;
        }
        
        .section-popular .section-popular-heading h2 {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            font-size: 40px;
        }
        
        .section-popular .section-popular-heading p {
            font-size: 18px;
        }
        
        .section-popular-content .section-popular-travel .card-travel {
            min-height: 380px;
            background-color: #000;
            color: #fff;
            padding: 30px;
            background-size: cover;
            margin-bottom: 20px;
        }
        
        .section-popular-content .section-popular-travel .travel-country {
            font-size: 18px;
            color: #fff;
        }
        
        .section-popular-content .section-popular-travel .travel-location {
            font-size: 26px;
            color: #fff;
        }
        
        .section-popular-content .section-popular-travel .travel-button .btn-travel-details {
            background-color: #FF9900;
            color: #fff;
        }
        
        .section-popular-content .section-popular-travel .travel-button .btn-travel-details:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .section-networks {
            background-color: #fff;
            margin-top: -170px;
            padding-top: 240px;
            padding-bottom: 50px;
        }
        
        .section-networks h2 {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            font-size: 40px;
        }
        
        .section-networks p {
            font-size: 18px;
        }
        
        .section-networks img {
            max-width: 100%;
        }
        
        .section-testimonial-heading {
            background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ECFFFB));
            background: linear-gradient(#fff 0%, #ECFFFB 100%);
            padding-top: 50px;
            min-height: 520px;
        }
        
        .section-testimonial-heading h2 {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            font-size: 40px;
        }
        
        .section-testimonial-heading p {
            font-size: 18px;
        }
        
        .section-testimonial-content {
            margin-top: -320px;
            padding-bottom: 50px;
        }
        
        .section-testimonial-content .card-testimonial {
            padding: 40px 20px 10px;
            border-radius: 11px;
            margin-bottom: 20px;
        }
        
        .section-testimonial-content .card-testimonial .testimonial-content {
            min-height: 380px;
        }
        
        .section-testimonial-content .card-testimonial h3 {
            font-size: 22px;
        }
        
        .section-testimonial-content .card-testimonial .testimonial {
            font-weight: 200;
            font-size: 26px;
            color: #6A6A6A;
        }
        
        .section-testimonial-content .card-testimonial .trip-to {
            font-weight: normal;
            font-size: 22px;
            color: #6A6A6A;
        }
        
        .section-testimonial-content .card-testimonial hr {
            margin-left: -20px;
            margin-right: -20px;
        }
        
        .section-testimonial-content .btn-get-started {
            background-color: #FF9900;
            color: #fff;
        }
        
        .section-testimonial-content .btn-get-started:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .section-testimonial-content .btn-need-help {
            background-color: #F6F5F5;
            color: #BDBDBD;
        }
        
        .section-testimonial-content .btn-need-help:hover {
            background-color: #E4E4E4;
            color: #BDBDBD;
        }
        
        .section-footer {
            margin-top: 100px;
        }
        
        .section-footer a {
            color: #003A2D;
        }
        
        .section-details-header {
            min-height: 310px;
            background: #C3FFF2;
            margin-top: -70px;
        }
        
        .section-details-content {
            margin-top: -210px;
            min-height: 100vh;
        }
        
        .section-details-content .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 30px;
        }
        
        .section-details-content .breadcrumb-item.active {
            font-weight: bold;
            color: #003A2D;
        }
        
        .section-details-content .card-details {
            padding: 20px;
            border-radius: 11px;
        }
        
        .section-details-content .card-details h1 {
            font-size: 26px;
        }
        
        .section-details-content .card-details h2 {
            font-size: 20px;
        }
        
        .section-details-content .card-details p {
            font-size: 18px;
            color: #B3B3B3;
        }
        
        .section-details-content .card-details h3 {
            font-weight: 400;
            font-size: 14px;
            color: #003A2D;
        }
        
        .section-details-content .card-details .trip-informations th {
            font-weight: 300;
            font-size: 18px;
            color: #003A2D;
        }
        
        .section-details-content .card-details .trip-informations td {
            font-weight: 300;
            font-size: 18px;
            color: #B3B3B3;
        }
        
        .section-details-content .card-details .trip-informations .text-blue {
            color: #003A2D;
            font-weight: bold;
        }
        
        .section-details-content .card-details .trip-informations .text-orange {
            color: #FF9900;
            font-weight: bold;
        }
        
        .section-details-content .card-details .payment-instructions {
            font-weight: 300;
            font-size: 14px;
            color: #B3B3B3;
        }
        
        .section-details-content .card-details .bank .bank-item h3 {
            font-size: 18px;
            color: #003A2D;
            margin-bottom: 0;
        }
        
        .section-details-content .card-details .bank .bank-item p {
            margin-bottom: 0;
        }
        
        .section-details-content .card-details .bank .bank-item .description {
            margin-left: 10px;
            overflow: hidden;
            float: left;
        }
        
        .section-details-content .card-details .bank .bank-item .description p {
            font-weight: normal;
            font-size: 16px;
            color: #003A2D;
        }
        
        .section-details-content .card-details .bank .bank-image {
            width: 45px;
            float: left;
        }
        
        .section-details-content .card-details .disclaimer {
            font-weight: 300;
            font-size: 14px;
            color: #6A6A6A;
        }
        
        .section-details-content .card-details .gj-datepicker .datepicker {
            border-right: 0;
        }
        
        .section-details-content .card-details .gj-datepicker .input-group-append .btn {
            padding-right: 30px;
        }
        
        .section-details-content .card-details .btn-add-now {
            background-color: #003A2D;
            color: #fff;
        }
        
        .section-details-content .card-details .btn-add-now:hover {
            background-color: #0F5747;
            color: #fff;
        }
        
        .section-details-content .card-right {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom: 0;
        }
        
        .section-details-content .features {
            margin-top: 20px;
        }
        
        .section-details-content .features h3 {
            font-size: 18px;
            color: #003A2D;
            margin-bottom: 0;
        }
        
        .section-details-content .features p {
            margin-bottom: 0;
        }
        
        .section-details-content .features .description {
            margin-left: 10px;
            overflow: hidden;
            float: left;
        }
        
        .section-details-content .features .features-image {
            width: 45px;
            float: left;
        }
        
        .section-details-content .gallery .xzoom-container {
            display: block;
        }
        
        .section-details-content .gallery .xzoom-container .xzoom {
            width: 100%;
            -webkit-box-shadow: none;
                    box-shadow: none;
            margin-bottom: 10px;
        }
        
        .section-details-content .gallery .xzoom-container .xactive {
            border: 4px solid #20F300;
            -webkit-box-shadow: none;
                    box-shadow: none;
        }
        
        .section-details-content .member .member-image {
            width: 40px;
        }
        
        .section-details-content .join-container {
            margin-top: -16px;
        }
        
        .section-details-content .btn-join-now {
            background-color: #FF9900;
            color: #fff;
            border-radius: 0;
        }
        
        .section-details-content .btn-join-now:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .section-success {
            height: 90vh;
        }
        
        .section-success h1 {
            font-weight: 600;
            font-size: 24px;
            color: #003A2D;
        }
        
        .section-success p {
            font-weight: 300;
            font-size: 18px;
            color: #B3B3B3;
        }
        
        .section-success .btn-home-page {
            border-radius: 4px;
            background-color: #003A2D;
            color: #fff;
        }
        
        .section-success .btn-home-page:hover {
            background-color: #0F5747;
            color: #fff;
        }
        
        @media (min-width: 992px) {
            .login-container {
            background: -webkit-gradient(linear, left top, right top, color-stop(65%, #ffffff), color-stop(35%, #C3FFF2));
            background: linear-gradient(90deg, #ffffff 65%, #C3FFF2 35%);
            width: 100vw;
            height: 100vh;
            }
        }
        
        .page-login {
            height: 100vh;
        }
        
        .page-login .btn-login {
            background-color: #FF9900;
            color: #fff;
        }
        
        .page-login .btn-login:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .page-login h1 {
            color: #0F5747;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
            font-size: 35px;
        }
        
        .page-login h2 {
            color: #0F5747;
            font-weight: bold;
            font-size: 21px;
            margin-top: -10px;
        }
        
        .page-login h3 {
            font-size: 14px;
            font-weight: normal;
            color: #0F5747;
        }
        
        .page-login h3 .link {
            color: #FF9900;
        }
        
        .page-login .password-link {
            color: #BDBDBD;
            font-size: 14px;
            font-weight: normal;
        }
        
        .page-login .f-color {
            color: #0F5747;
        }
        
        .register-container .img-position {
            margin-top: -500px;
            margin-left: -215px;
        }
        
        .register-container .text-position {
            margin-left: -315px;
        }
        
        .register-container h4 {
            font-size: 15px;
        }
        
        .register-container h4 .link {
            color: #FF9900;
        }
        
        .register-container .card {
            margin-top: -60px;
        }
        
        .register-container .page-login .form-center {
            margin-top: 140px;
        }
        
        .register-container .page-login .text-font {
            margin-top: 500px;
        }
        
        .register-container .page-login .text-font h1 {
            color: #ffffff;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            text-align: left;
            margin-left: -100px;
        }
        
        .register-container .page-login .text-font h2 {
            color: #ffffff;
            font-weight: normal;
            font-size: 20px;
            text-align: left;
            margin-left: -100px;
        }
        
        .register-container .form-group {
            font-size: 14px;
        }
        
        .register-container .form-group .form-control {
            height: 35px;
        }
        
        .verify-position {
            margin-top: 130px;
        }
        
        .verify-position h1 {
            color: #003A2D;
            font-size: 25px;
            font-weight: 600;
        }
        
        .verify-position .link-font {
            color: #FF9900;
            font-weight: 500;
        }
        
        .content-reset {
            margin-top: 180px;
            color: #003A2D;
        }
        
        .content-reset .btn-reset-password {
            background-color: #FF9900;
            color: #fff;
        }
        
        .content-reset .btn-reset-password:hover {
            background-color: #FAC97E;
        }
        
        .form-reset {
            margin-top: 150px;
            color: #003A2D;
        }
        
        .form-reset .btn-reset-password {
            background-color: #FF9900;
            color: #fff;
        }
        
        .form-reset .btn-reset-password:hover {
            background-color: #FAC97E;
            color: #fff;
        }
        
        .regis-style h5 {
            font-size: 20px;
            font-family: 'Assistant', sans-serif;
        }
        
        .already-have {
            color: #0F5747;
            font-size: 16px;
        }
        
        .already-have .link {
            color: #FF9900;
            text-decoration: none;
        }
        
        .already-have .link:hover {
            color: #FAC97E;
        }
        /*# sourceMappingURL=main.css.map */
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('frontend.layouts.partials.navbar')

    @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Rewards</a></li>

                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>

                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Makassar</a></li>
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">0821-8894-1616</a></li>
                                <li><a href="#">support@noprob.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Copyright Noprob All rights reserved Made in Makassar
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/retina.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/js/aos.js') }}"></script> --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')
</body>

</html>