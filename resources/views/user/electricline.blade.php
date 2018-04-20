<html>
<head>
    <title>طلب خط كهرباء</title>
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
            <div class="panel-heading text-center PanelHeadingCss">طلب خط كهرباء</div>
            <div class="panel-body PanelBodyCss">

                <div style="max-width: 1000px ;margin-bottom: -15px">

                    <form class="form-horizontal" method="post" action="saveelictricalline">
                        {{ csrf_field() }}
                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" >  الاسم الرباعي :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input class="form-control" name="name" id="name" type="text"  placeholder="ادخل الاسم الرباعي" required/>

                            </div>
                            <label class="control-label col-sm-2 pull-right text-left" > رقم الهوية :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="personid" name="personid" placeholder="ادخل رقم الهوية"  >
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > اسم الشارع :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input class="form-control" name="streetname" id="streetname" type="text"  placeholder="ادخل اسم الشارع" required/>

                            </div>
                            <label class="control-label col-sm-2 pull-right text-left" > اسم البناية :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="buldingname" name="buldingname" placeholder="ادخل اسم البناية"  >
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > رقم الحوض :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input class="form-control" name="hodnumber" id="hodnumber" type="text"  placeholder="ادخل رقم الحوض" required/>

                            </div>
                            <label class="control-label col-sm-2 pull-right text-left" > رقم الهاتف :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="telnumber" name="telnumber" placeholder="ادخل رقم الهاتف"  >
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > العنوان  :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input class="form-control" name="address" id="address" type="text"  placeholder="ادخل العنوان" required/>

                            </div>
                            <label class="control-label col-sm-2 pull-right text-left" > اسم المكتب المصمم :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input type="text" class="form-control PanelBodyCssInput " id="officedesigner" name="officedesigner" placeholder="ادخل اسم المكتب المصمم"  >
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left" > المهندس المشرف  :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <input class="form-control" name="engineer" id="engineer" type="text"  placeholder="ادخل اسم لمهندس المشرف" required/>

                            </div>

                            <label class="control-label col-sm-2 pull-right text-left" >  الارتداد :</label>
                            <div class="col-sm-4 pull-right text-left">
                                <select class="form-control " id="rebound" name="rebound">
                                    <option selected disabled="">-- اختار  الارتداد --</option>
                                    <option value="أمامي">أمامي</option>
                                    <option value="خلفي">خلفي</option>
                                    <option value="جانبي">جانبي</option>

                                </select>
                            </div>


                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> ملاحظات : </label>

                            <div class="col-sm-8 pull-right">
                                <textArea type="note" class="form-control PanelBodyCssInput" rows="5" name="note" id="note" placeholder="ادخل  ملاحظات" required></textArea>
                            </div>
                        </div>

                        <div class="form-group row" dir="rtl">
                            <label class="control-label col-sm-2 pull-right text-left"> المرفقات : </label>
                            <div class="col-sm-8 pull-right">
                                <input class="form-control" name="attachment" id="attachment" type="text"  placeholder="ادخل المرفقات" required/>
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