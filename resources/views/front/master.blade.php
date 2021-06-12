<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>DIU | Dhaka International University</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="/favicons.png">

{{--    @include('front.partials.allCss')--}}

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/all.min.css">


    <style>
        .useful-link li {
            width: 100% !important;
        }

        .toolbar-share-icon-active {
            border-bottom: 2px solid #FFFFFF;
        }
    </style>

    @stack('style')

</head>
<body class="home1">

<span id="app">
    @include('front.partials.header')

    @yield('body')

    @include('front.partials.footer')
    @include('front.partials.scrollTop')
    {{--@include('front.partials.canvasMenu')--}}
    {{--@include('front.partials.searchModal')--}}
</span>

@routes

{{ TawkTo::widgetCode() }}


<!--<script src="https://cms.diu.ac/axios/axios.min.js"></script>
<script>
    window.newAxios = axios;
</script>-->


{{-- output the compiled JS --}}
<script src="{{ asset('js/app.js') }}"></script>


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{--all javascript--}}
{{--@include('front.partials.allJs')--}}
<script src="{{ asset('/') }}js/all.min.js"></script>
@stack('script')

</body>
</html>
