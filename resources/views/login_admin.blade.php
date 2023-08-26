<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ __('auth.Login_title') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="loginAdmin/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="loginAdmin/css/util.css">
    <link rel="stylesheet" type="text/css" href="loginAdmin/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('loginAdmin/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('login_admin_check') }}" method="POST">
                    @csrf
                    <span class="login100-form-logo" style="overflow: hidden">
                        {{-- <i class="zmdi zmdi-landscape"></i> --}}
                        <img src="loginAdmin/images/Dynamics2.ico">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        {{ __('auth.Login_title') }}
                    </span>

                    {{-- <div class="wrap-input100 " > --}}
                        {{-- <input class="input100" type="text" name="email" placeholder="Email OR userName"> --}}
                        <input class="input100" type="hidden" name="email" value="d" placeholder="Email OR userName">
                        {{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
                    {{-- </div> --}}

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" pattern="[0-9]*" inputmode="numeric" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    {{-- <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div> --}}

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('auth.Login_title') }}
                        </button>
                    </div>

                    {{-- <div class="text-center p-t-90">
                        <a class="txt1" href="#">
                            Forgot Password?
                        </a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/bootstrap/js/popper.js"></script>
    <script src="loginAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/daterangepicker/moment.min.js"></script>
    <script src="loginAdmin/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="loginAdmin/js/main.js"></script>

</body>

</html>
