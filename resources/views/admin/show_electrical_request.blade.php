<!DOCTYPE html>
<html lang="en">
<head>
    <title>عرض طلبات الكهرباء </title>

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

@include('admin.navbar')


<div dir="rtl" class="container-contact100">
    <div class="wrap-contact100">

        @foreach($electrical as $item)
            @if($item->type == "electrical" && $item->accept == null)
                <div id="content">
                    <form class="contact100-form validate-form" >

                        <div class="col-sm-12">
                            <div class="col-sm-10 contact100-form-title">
                                الاسم :   {{$item->name}}
                            </div>
                            <div class="col-sm-10 contact100-form-title">
                                رقم الهوية :  {{$item->idperson}}
                            </div>
                            <div class="col-sm-10 contact100-form-title">
                                اسم الشارع :                                {{$item->streetname}}
                            </div>
                        </div>

                        <div class="container-contact100-form-btn1">
                            <button  style="background-color: #ff5050;" class="contact100-form-btn reject" data-id="{{$item->idelecrtic_water_line}}" data-user="{{$item->userid}}">
						<span>
							رفض	<i class="fa m-l-7" aria-hidden="true"></i>
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>

						</span>
                            </button>
                        </div>
                        <div class="container-contact100-form-btn1">
                            <button  class="contact100-form-btn accept" data-id="{{$item->idelecrtic_water_line}}" data-user="{{$item->userid}}">
						<span>
							قبول	<i class="fa m-l-7" aria-hidden="true"></i>
							<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>

						</span>
                            </button>
                        </div>

                    </form>
                </div>

                <hr style="margin-top: 50px;border-width: 3px;">
            @endif

        @endforeach
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
<script src="{{ asset('js/main.js') }}"></script>

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
<script>
    $(document).ready(function () {



        $(".reject").on('click',function() {
            $(this).each(function() {

                var id= $(this).data('id');

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('rejectelectricalrequest')!!}',
                    data:{'id':id},
                    success:function(data) {

                    },
                    async: false

                });


            });

        });

        $(".accept").on('click',function() {
            $(this).each(function() {

                var id= $(this).data('id');

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('acceptelectricalrequest')!!}',
                    data:{'id':id},
                    success:function(data) {

                    },
                    async: false

                });

            });

        });


    });
</script>