<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="https://ecowebengine.com, Software Company,
    Web Services, Web Development,
    Web Studio, Digital Marketing, Advertising, Website Development, Web Design, Business Development Agency, Online Shopping, E-Commerce, high-evolution, IT & Mobile Services, Online Store, ecowebengine,ecoweb,
    high evolution services, EWE"/>
    <meta name="author" content="2076Engine" />
    <meta name="description" content="https://ecowebengine.com, Software Company,
    Web Services, Web Development,
    Web Studio, Digital Marketing, Advertising, Website Development, Web Design, Business Development Agency, Online Shopping, E-Commerce, high-evolution, IT & Mobile Services,Online Store, ecowebengine, ecoweb,
    high evolution services, EWE"/>
    <meta name="author" content="2076Engine"/>
    <meta name="copyright" content="Copyright Eco-web Engine Co., Ltd." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - High-Evolution Service" />
    <meta property="og:url" content="https://ecowebengine/" />
    <meta property="og:site_name" content="High-Evolution Service" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Google-site-verification -->
{{--    <meta name="google-site-verification" content="9bmqCkXmt2mhTkztJBdovl_XNxCFTo1o_KtZHOwgT9g" />--}}

    <title>{{ config('app.name', 'High-Evolution') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{asset('assets/images/ecoweb.jpg')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{asset('assets/css/theStyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/engineStyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/backendStyle.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/css/carousel/animate.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/carousel/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/carousel/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/w3Style.css')}}">
{{--    <link rel="stylesheet" href="{{asset('assets/css/carousel/media-queries.css')}}">--}}




    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond&effect=anaglyph|3d|3d-float">
    <link href='https://fonts.googleapis.com/css?family=Coda&effect=3d-float|3d|emboss' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andada&effect=outline|3d|3d-float|shadow-multiple|emboss|putting-green|mitosis' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine&effect=3d' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Pro&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa&effect=3d-float|mitosis' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Dosis&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Faustina&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Hepta+Slab&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jura&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lemonada&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Literata&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Manuale&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Orbitron&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oswald&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ruda&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn&effect=3d|3d-float' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&effect=3d|3d-float' rel='stylesheet'>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body style="background-image: url({{asset('assets/images/ecowebg.jpg')}});">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5D7F9TC"
                  height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="app">
{{--        @if(request()->segment(1) == 'auth')--}}
{{--            @include('layouts.dashboard')--}}
{{--        @elseif(request()->segment(1) == 'admin')--}}
{{--            @include('layouts.dashboard')--}}
{{--        @else--}}
{{--            @include('layouts.top')--}}
{{--            @include('layouts.nav')--}}
{{--        @endif--}}
        @if(auth()->check())
            @if(auth()->user()->hasRole('master') || auth()->user()->hasRole('admin'))
                @include('layouts.dashboard')
            @else
                @include('layouts.top')
                @include('layouts.nav')
            @endif
        @else
            @include('layouts.top')
            @include('layouts.nav')
        @endif
        <main class="py-4">
            @yield('content')
        </main>
        @if(request()->segment(1) != 'auth')
            @include('layouts.foot')
        @endif

    </div>




{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

<!-- Javascript -->
{{--    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>--}}
{{--    <script src="{{asset('assets/js/carousel/jquery.backstretch.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/carousel/wow.min.js')}}"></script>--}}

    <script src="{{asset('assets/js/carousel/scripts.js')}}"></script>
    <script src="{{asset('assets/js/carousel/w3Script.js')}}"></script>
    <script src="{{asset('assets/js/theScript.js')}}"></script>
    <script src="{{asset('assets/js/engineScript.js')}}"></script>
    <script src="{{asset('assets/js/backendScript.js')}}"></script>


</body>
</html>
