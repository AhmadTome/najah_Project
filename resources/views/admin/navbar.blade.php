<div id='cssmenu'>
    <ul> <!-- fe class active b5le el style 3la ele a5tarha "active" -->
        <li><a href='{{asset('showsuggestions')}}'>عرض الاقتراحات</a></li>
        <li><a href='{{asset('showcompliant')}}'>عرض الشكاوي</a></li>
        <li><a href='{{asset('show_water_Request')}}'>عرض طلبات خطوط المياه</a></li>
        <li><a href='{{asset('show_electrical_request')}}'>عرض طلبات خطوط الكهرباء</a></li>
        <li><a href='{{asset('report')}}'>تقرير</a></li>
        <li style="float:left;"><a href='{{ route('logout') }}'  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
        <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </ul>
</div>