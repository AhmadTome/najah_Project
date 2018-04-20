<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>

<div class="topnav" id="myTopnav" dir="rtl">
    <a style="float:right;" href="{{ asset('compliant') }}" class="active">ادخال شكوى</a>
    <div class="vl" style="float: right; border-left: 6px solid white; height: 52px"></div>
    <a  style="float:right;" href="{{ asset('suggestion') }}" class="active">ادخال اقتراح</a>
    <div class="vl" style="float: right; border-left: 6px solid white; height: 52px"></div>
    <a  style="float:right;" href="{{ asset('electrical_line') }}" class="active">ادخال خط كهرباء</a>
    <div class="vl" style="float: right; border-left: 6px solid white; height: 52px"></div>
    <a  style="float:right;" href="{{ asset('water_line') }}" class="active">ادخال خط مياه</a>


    <a href="" class="logout" style="float: left">تسجيل خروج</a>



<!-- <a href="\Illuminate\Support\Facades\Auth::logout()" class="" style="float: left">تسجيل خروج</a> -->

    <a class="adminname" style="float: left"></a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">

</div>

<script>


    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    $(document).ready(function () {
        $(".adminname").empty();
        var adminname;
        $.ajax({

            type:'get',
            url:'{!!URL::to('adminname')!!}',
            data:{},
            success:function(data) {
                adminname=data;
            },
            async: false

        });

        $(".adminname").append(adminname);

        $(".logout").on('click',function() {

            $.ajax({
                type:'get',
                url:'{!!URL::to('logout')!!}',
                data:{},
                success:function(data) {

                }

            });


        });








    });

</script>

</body>
</html>
