<!DOCTYPE html>
<html lang="zxx">
    @include('includes.head')
    <body>
        @include('includes.preloader')
        @include('includes.header')
        @yield('content')     
        @include('includes.footer')
        @include('includes.foot')
    </body>
</html>