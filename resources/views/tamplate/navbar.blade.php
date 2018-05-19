<div id='cssmenu'>
    <ul> <!-- fe class active b5le el style 3la ele a5tarha "active" -->
        <li><a href='{{asset('suggestion')}}'>اقتراحات</a></li>
        <li><a href='{{asset('compliant')}}'>شكاوي</a></li>
        <li><a href='{{asset('licenses')}}'>ترخيص</a></li>
        <li><a href='{{asset('water')}}'>خط مياه</a></li>
        <li><a href='{{asset('electrical')}}'>خط كهرباء</a></li>
        <li><a href='{{asset('my_request')}}'>طلباتي</a></li>
        <li style="float:left;"><a href='{{ route('logout') }}'  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
        <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </ul>
</div>