<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset( 'css/dashboard/font-face.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset( 'vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    @yield('custom-style');
    <link href="{{ asset( 'vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset( 'css/dashboard/theme.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'css/dashboard/custom.css' ) }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
                            Logo
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            @include('layouts.dashboard-partials.mobile-nav')
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('layouts.dashboard-partials.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts.dashboard-partials.header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset( 'vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset( 'vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset( 'vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS -->
    @yield('custom-script');
    <script src="{{ asset( 'vendor/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset( 'vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset( 'vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset( 'vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset( 'vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset( 'vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset( 'vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset( 'vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset( 'vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset( 'vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset( 'vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset( 'js/dashboard/dashboard-main.js') }}"></script>
    <script src="{{ asset( 'js/dashboard/script.js') }}"></script>

</body>

</html>
<!-- end document-->
