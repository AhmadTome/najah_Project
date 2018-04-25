<!DOCTYPE html>
<html lang="en">
<head>
    <title>شكوى</title>

    <link rel="stylesheet" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/noui/nouislider.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>
@include('tamplate.navbar')


<div dir="rtl" class="container-contact100">

    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="savecompliant">
            {{ csrf_field() }}
            <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 " style="align-content: center;">

                @if(session()->has('notif'))
                    <div class="row">
                        <div class="alert alert-success" dir="rtl">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>{{ session('notif') }}</strong>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
				<span class="contact100-form-title">
					شكوى
				</span>

            <div style="float:right;" class="wrap-input100 validate-input bg1" data-validate="يجب ادخال عنوان الشكوى">
                <span style=" float:right; font-size:20px;" class="label-input100">* عنوان الشكوى</span>
                <input class="input100" type="text" name="compliant_title" id="compliant_title" placeholder="الرجاء ادخال عنوان الشكوى">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span style=" float:center; font-size:20px;" class="label-input100"> * نوع الشكوى</span>
                <div>
                    <select class="js-select2" id="compliant_select" name="compliant_select">
                        <option value="مياه">مياه</option>
                        <option value="طرق"> طرق</option>
                        <option value="كهرباء">كهرباء</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>



            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
                <span style=" float:right; font-size:20px;" class="label-input100">نص الشكوى</span>
                <textarea class="input100" name="compliant_text" id="compliant_text" placeholder="الرجاء كتابة نص الشكوى"></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button type="submit" class="contact100-form-btn">
						<span>
							ارسال	<i class="fa m-l-7" aria-hidden="true"></i>
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>

						</span>
                </button>
            </div>
        </form>
    </div>
</div>


<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function(){
            $(this).on('select2:close', function (e){
                if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                }
                else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/noui/nouislider.min.js') }}"></script>
<script>
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [ 1500, 3900 ],
        connect: true,
        range: {
            'min': 1500,
            'max': 7500
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function( values, handle ) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
