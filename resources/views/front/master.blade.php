<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIU | Dhaka International University</title>
    <meta name="description"
          content="Dhaka International University DIU is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline">
    <meta name="keywords"
          content="DIU, Dhaka International University, Dhaka, Dhaka International, University, Private Universities In Bangladesh, Universities In Bangladesh">
    <meta name="author" content="Dhaka International University">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@diubd"/>
    <meta name="google-site-verification" content="A8rwnYA9M2SLmwpyC8lbmsPvrY-QkJWoBb4-B0aitc4"/>

    <link rel="canonical" href="{{ urldecode(url()->full()) ?? env('api_url') }}"/>
    <meta property="og:title"
          content="{{ \Request::route()->getName() ?? 'DIU | DIU | Dhaka International University' }}"/>
    <meta property="og:url" content="{{ urldecode(url()->full()) ?? env('api_url') }}"/>

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="/favicons.png">


    {{--@include('front.partials.allCss')--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/all.min.css">
    {{-- output the compiled JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{--@include('front.partials.allJs')--}}
    <script src="{{ asset('/') }}js/all.min.js" defer></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" defer></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" defer></script>
    <![endif]-->

    <style>

        body {
            margin: 0;
            padding: 0;
            z-index: 1;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: #fff;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb {
            /*background-color: #6F323D;*/
            background: linear-gradient(transparent, #01AA4D);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(transparent, #01AA4D);
        }

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


<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "160248167326381");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@stack('script')

</body>
</html>
