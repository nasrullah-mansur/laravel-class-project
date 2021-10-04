<!doctype html>
<html class="no-js" lang="en">

@include('front.include.head')

<body>

    <!-- header start -->
    @include('front.include.header')
    <!-- header end -->

    @yield('content')

    <!-- footer -->
    @include('front.include.footer')
    <!-- footer end -->

    <!-- JS here -->
    @include('front.include.script')
</body>

</html>