<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('shared.html-head')

    <body>
        @include('shared.header')
        @yield('content')
        @include('shared.footer')
    </body>

</html>