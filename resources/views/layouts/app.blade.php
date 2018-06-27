<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Society of Radiography Uganda">
    <meta name="keywords" content="Society of Radiography Uganda">
    <meta name="author" content="mugula abbey">


    <title>Society of Radiography Uganda | @yield('title', 'Society of Radiography Uganda')</title>
    
    <!--Favicon Icon-->
    <link rel="icon" type="image/png" href="{{ asset('uploads/logo.jpeg') }}">
    

    <!--Style Sheet-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    
    

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
</head>
<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--Heading Bar start-->
    @include('partials.top-nav', ['some' => 'data'])
    <!--Heading Bar End-->
    <!--Header Start-->
    @include('partials.header', ['some' => 'data'])
    <!--Header End-->
    @if (Request::path() != '/')
        <!--- Banner Section start-->
            <div class="container-fluid service-bg" id="uni">
            <div class="row">
                <div id="universal"></div>
                    <div class="col-md-12 pt">
                        <h2> @yield('pageTitle') </h2>
                        <p><a href="{{ url('/') }}">home</a> &rarr; @yield('pageTitle')</p>
                    </div>
                    
            </div>
        </div>
        <!--- Banner Section End-->
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    @yield('content')


    <!--Footer Section Start -->
    @include('partials.footer', ['some' => 'data'])


    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.animate.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>