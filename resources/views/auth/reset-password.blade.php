<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Cruise Planners - Reset Password</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset( 'css/dashboard/css/font-face.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset( 'vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset( 'css/dashboard/theme.css' ) }}" rel="stylesheet" media="all">
    <link href="{{ asset( 'css/dashboard/custom.css' ) }}" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('images/cruise-planner-logo.jpg') }}" alt="Cruise Planner">
                                <!-- Logo -->
                            </a>
                        </div>
                        <div class="login-form">
                            @if(@session('error-msg'))
                                        <span style="text-align:center; padding: 10px 0; display:block; color:red;"><strong>Error: {{ @session('error-msg') }}</strong></span>
                            @endif
                            <form action="{{ route('cruisehome.resetPassword') }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Reset Password</button>
                            </form>
                            <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset( 'vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset( 'vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset( 'vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset( 'vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset( 'vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset( 'vendor/animsition/animsition.min.js') }}"></script>
    </script>
    <script src="{{ asset( 'vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset( 'vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset( 'vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset( 'vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    </script>

    <!-- Main JS-->
    <script src="{{ asset( 'js/dashboard/dashboard-main.js') }}"></script>

</body>

</html>
<!-- end document-->