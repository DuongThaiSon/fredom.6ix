<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/themify-icons.css">
    <script src="https://kit.fontawesome.com/540cf737fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/style.css">
</head>


<body>
    <div class="site-wrap">
        @include('client.partials.header')
        @yield('content')
        @include('client.partials.footer')
    </div>
    <script src="{{ asset('assets/client') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.marquee.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/aos.js"></script>
    <script src="{{ asset('assets/client') }}/js/script.js"></script>
</body>

</html>
