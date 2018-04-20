<html>
<head>
    <title>ادخال شكوى</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/ico" href="{{ asset('img/photo2.png') }}">
    <link href="{{ asset('css/AdminCss/SuperadminStyles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body style="background-image:url('{{ asset('images/background.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

<div class="container-fluid">
    <!-- Background pic -->


    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        @include('user.usernavbar')
    </div>

    <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 " >

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

    <!--Body-->

    <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 " >
        <div class="panel panel-default">
            <div class="panel-heading text-center PanelHeadingCss">ادخال شكوى</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" method="post" action="savecompliant">
                        {{ csrf_field() }}
                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> عنوان الشكوى : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="compliant_title" id="compliant_title" type="text"  placeholder="ادخل الشكوى" required/>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  نوع الشكوى :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="compliant_select" name="compliant_select">
                                    <option selected disabled="">اختار نوع الشكوى</option>
                                    <option value="كهرباء">كهرباء</option>
                                    <option value="مياه">مياه</option>
                                    <option value="طرق">طرق</option>
                                    <option value="صرف صحي">صرف صحي</option>
                                    <option>أخرى</option>

                                </select>
                            </div>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="compliant_other" name="compliant_other" placeholder="" readonly >
                            </div>


                        </div>


                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left">  نص الشكوى : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="note" class="form-control PanelBodyCssInput" rows="5" name="compliant_text" id="compliant_text" placeholder="ادخل نص الشكوى" required></textArea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-success" id="submit" value="إدخال">
                            </div>
                            <label class="control-label col-sm-7"></label>
                        </div>
                    </form>

                </div>


            </div>
        </div>

    </div>

    <!-- end Body -->
    <!--footer-->

    <!--/footer-->



</div>

</body>
</html>