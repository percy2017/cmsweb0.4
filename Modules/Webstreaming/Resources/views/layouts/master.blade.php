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
        <link href="{{ asset('vendor/histream/css/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/histream/css/style1.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('vendor/histream/css/mdb.min.css') }}" rel="stylesheet">
        @yield('css')
        <link rel="stylesheet" href="{{ asset('vendor/whatsapp/floating-wpp.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/up/css/floating-totop-button.css') }}">
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
        fbq('init', '{{ setting('histream.pixel_facebook') }}');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id={{ setting('histream.pixel_facebook') }}&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>


    <body class="creative-lp">
        <!-- Navigation & Intro -->
        <header>
            @yield('header')
        </header>
        @yield('content')
        @include('webstreaming::layouts.footer')
        <div id="myWP"></div> 
        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.j') }}s"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('vendor/histream/js/mdb.min.js') }}"></script>
        <!-- Custom scripts -->

        <script src="{{ asset('vendor/whatsapp/floating-wpp.js') }}"></script>
        <script src="{{ asset('vendor/up/js/floating-totop-button.js') }}"></script>
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


            // whatsapp ----------------------------------------------------------------------------------
            $('#myWP').floatingWhatsApp({
            phone: '{{ setting('whatsapp.phone') }}',
            popupMessage: '{{ setting('whatsapp.popupMessage') }}',
            message: '{{ setting('whatsapp.message') }}',
            showPopup: true,
            showOnIE: true,
            headerTitle: '{{ setting('whatsapp.headerTitle') }}',
            headerColor: '{{ setting('whatsapp.color') }}',
            backgroundColor: '{{ setting('whatsapp.color') }}',
            buttonImage: '<img src="{{ Voyager::Image(setting('whatsapp.buttonImage' )) }}" />',
            position: '{{ setting('whatsapp.position') }}',
            autoOpenTimeout: {{ setting('whatsapp.autoOpenTimeout') }},
            size: '{{ setting('whatsapp.size') }}'
            });

            // buttun up ----------------------------------------------------------------------
            $("body").toTopButton({
            // path to icons
            imagePath: 'vendor/up/img/icons/',
            // arrow, arrow-circle, caret, caret-circle, circle, circle-o, arrow-l, drop, rise, top
            // or your own SVG icon
            arrowType: 'arrow',
            // 'w' = white
            // 'b' = black
            iconColor: 'w',
            // icon shadow
            // from 1 to 16
            iconShadow: 6
            });

        </script>
        @yield('javascript')
        <script>
            $( "blockquote" ).addClass( "blockquote" );
        </script>
    </body>

</html>