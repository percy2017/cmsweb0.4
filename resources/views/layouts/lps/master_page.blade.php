<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('resources/landingpage/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('resources/landingpage/css/mdb.min.css') }}">
  
  <style type="text/css">
    body { padding-top: 70px; }
  </style>
  @yield('css')
  <link rel="stylesheet" href="{{ asset('vendor/whatsapp/floating-wpp.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/up/css/floating-totop-button.css') }}">
  @laravelPWA
  

</head>

<body class="software-lp">
  @yield('menu')
  <main>
    @yield('content')
  </main>
  @yield('footer')

  <div id="myWP"></div>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/mdb.min.js') }}"></script>

  <script src="{{ asset('vendor/whatsapp/floating-wpp.js') }}"></script>
  <script src="{{ asset('vendor/up/js/floating-totop-button.js') }}"></script>
  <script>
    //Animation init
    new WOW().init();
    //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
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

    $( "blockquote" ).addClass( "blockquote" );
  </script>
  @yield('javascript')
</body>
</html>