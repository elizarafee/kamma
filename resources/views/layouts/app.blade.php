<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.html-head')

<body>
    <div class="app">
        @include('shared.header')
        <div class="container">
            @yield('content')
        </div>
        @include('shared.footer')
    </div>
</body>

</html>