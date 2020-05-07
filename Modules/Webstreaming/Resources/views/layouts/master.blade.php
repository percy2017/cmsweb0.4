<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}" />
        <meta property="og:title" content="{{ $page->name }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('pages', $page->slug) }}" />
        <meta property="og:image" content="{{ Voyager::Image($page->image) }}" />
        <meta property="og:description" content="{{ $page->description }}" />

        <title>{{ $page->name }}</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/histream/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('vendor/histream/css/mdb.min.css') }}" rel="stylesheet">
        @yield('css')
        @laravelPWA
        {{--  google analityc  --}}
        <script async
            src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2305516163092209');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=2305516163092209&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    </head>


    <body class="creative-lp">
        <!-- Navigation & Intro -->
        <header>
            @yield('header')
        </header>
        @yield('content')
        @include('webstreaming::layouts.footer')

        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.j') }}s"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/mdb.min.js') }}"></script>

        <!-- Custom scripts -->
        <script>
            // Animation init
            new WOW().init();

            // Gallery
            $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
                }, 300);
            });
            });

        </script>

    </body>

</html>