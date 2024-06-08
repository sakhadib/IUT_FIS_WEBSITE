@if(session('is_logged_in'))
    @include('layouts.log_header')
@else
    @include('layouts.header')
@endif
@yield('main')
@include('layouts.footer')