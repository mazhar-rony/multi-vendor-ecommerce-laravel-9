<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags --}}

    {{-- Title  --}}
    <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? '' }}</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('ui/frontend/assets/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/icofont.min.css') }}">


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/css/style.css') }}">

    @stack('css')

</head>

<body>
    {{-- Preloader --}}
    <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    
    {{-- Header Area --}}
    <x-frontend.layout.partials.header />
    {{-- Header Area End --}}
    
    {{-- Main Content --}}
    {{ $slot }}
    {{-- Main Content End --}}    

    {{-- Footer Area --}}
    <x-frontend.layout.partials.footer />
    {{-- Footer Area --}}

    {{-- jQuery (Necessary for All JavaScript Plugins) --}}
    <script src="{{ asset('ui/frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/classy-nav.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/js/active.js') }}"></script>

    @stack('js')

</body>

</html>