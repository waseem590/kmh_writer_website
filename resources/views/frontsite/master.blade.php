<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- <link rel="shortcut icon" href="{{asset('frontsite/images/favicon.png')}}" type=""> --}}
    <title>Khalid Mehmood Khan:Dashboard</title>
    @include('frontsite.partial.head')
</head>
<body>
    @include('frontsite.partial.header')
    @yield('content')
    <!-- end client section -->
    @include('frontsite.partial.footer')
    <!--<div class="cpy_">-->
    <!--    <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>-->
    <!--        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>-->
    <!--    </p>-->
    <!--</div>-->
    <!-- jQery -->
    <script src="{{asset('fronsite/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('fronsite/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('fronsite/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('fronsite/js/custom.js')}}"></script>
</body>

</html>
