<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ __('auth.Login_title') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login_user/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_user/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_user/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf

                    <span class="login100-form-title p-b-43">
                        {{ __('auth.Login_title') }}
                    </span>


                    {{-- <div class="wrap-input100 " > --}}
                    {{-- <input id="email" type="text" class="input100" name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus> --}}
                    {{-- <input id="email" type="hidden" class="input100" name="email" value="a" required
                        autocomplete="email" autofocus> --}}

                    <select id="email" name="email" class="select_custom">
                        @foreach ($users as $key => $value_users)
                            <option  value="{{ $value_users->email }}">{{ $value_users->name }}</option>
                        @endforeach
                    </select>
                    {{-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                    {{-- <input class="input100" type="text" name="email"> --}}
                    {{-- <span class="focus-input100"></span>
                        <span class="label-input100">Email OR userName</span> --}}
                    {{-- </div> --}}


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        {{-- <input class="input100" type="password" name="pass"> --}}
                        <input id="password" type="password" class="input100" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        {{-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div> --}}
                    </div>


                    <div class="container-login100-form-btn">
                        {{-- <button class="login100-form-btn">
							Login
						</button> --}}
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>

                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            {{-- or sign up using --}}
                            Dynamics
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="https://www.facebook.com/Dynamics2010" target="_BLANK"
                            class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="https://www.youtube.com/channel/UCp2C3NcZDHz-nsZPLdTtL7A" target="_BLANK"
                            class="login100-form-social-item flex-c-m bg3 m-r-5">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('login_user/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="login_user/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/vendor/bootstrap/js/popper.js"></script>
    <script src="login_user/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/vendor/daterangepicker/moment.min.js"></script>
    <script src="login_user/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="login_user/js/main.js"></script>

</body>

</html>
