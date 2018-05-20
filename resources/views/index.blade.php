

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util_index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_index.css') }}">
    <!--===============================================================================================-->
</head>

<body>

<div class="limiter" dir="rtl">

    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image:url('/images/bg-01_index.jpg'); ">
					<span class="login100-form-title-1">
						Sign In
					</span>
            </div>

            <form class="login100-form validate-form" action="sign_in" method="post" dir="rtl">
                {{ csrf_field() }}
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" >
                    <input class="input100" style="float: right" type="text" name="username" placeholder="ادخل اسم المستخدم">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="ادخل كلمة المرور">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" style="float: left;">
                        تسجيل الدخول
                    </button>
                </div>

                <div class="container-login100-form-btn" style="margin-right: 40px;">
                    <a href='{{asset('register')}}'>تسجيل حساب جديد</a>
                </div>

            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/main_index.js') }}"></script>

</body>
</html>