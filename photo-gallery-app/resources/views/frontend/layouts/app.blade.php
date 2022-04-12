<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photo Gallery &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/lightgallery.min.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        @include('frontend.layouts.header')

        @yield('content')


        @include('frontend.layouts.footer')


    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/aos.js')}}"></script>

    <script src="{{ asset('frontend/js/picturefill.min.js')}}"></script>
    <script src="{{ asset('frontend/js/lightgallery-all.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.mousewheel.min.js')}}"></script>

    <script src="{{ asset('frontend/js/main.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#lightgallery').lightGallery();
        });

    </script>

</body>

</html>
