@include('layouts.header')
@include('layouts.preloader')
@yield('login')
@includeWhen((Str::after(url()->current(), url('/'))!='/login') ? true:false, 'layouts.nav')
@includeWhen((Str::after(url()->current(), url('/'))!='/login') ? true:false, 'layouts.container')
@include('layouts.footer')
