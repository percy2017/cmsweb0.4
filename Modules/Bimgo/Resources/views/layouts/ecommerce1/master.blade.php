<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_property')

    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    <link href="{{ asset('vendor/bimgo/mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bimgo/mdb/css/mdb.min.css') }}" rel="stylesheet">
    <style>
    
    </style>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('vendor/whatsapp/floating-wpp.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/up/css/floating-totop-button.css') }}">
    @laravelPWA
</head>

<body class="homepage-v2 hidden-sn white-skin animated">
    @yield('header')
    @yield('menu')
    <!-- Main Container -->
    <div class="container">
        <!-- Grid row -->
        <div class="row">
        <!-- Content -->
        <div class="col-lg-12">
            @yield('content')
        </div>
        <!-- Content -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Main Container -->
    @yield('footer')
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <div id="myWP"></div> 
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/mdb.min.js') }}"></script>

    <script src="{{ asset('vendor/whatsapp/floating-wpp.js') }}"></script>
    <script src="{{ asset('vendor/up/js/floating-totop-button.js') }}"></script>

    <script type="text/javascript">
      /* WOW.js init */
      new WOW().init();
      // Tooltips Initialization
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      // Material Select Initialization
      $(document).ready(function () {

        $('.mdb-select').material_select();
      });

      // SideNav Initialization
      $(".button-collapse").sideNav();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
      $('document').ready(function () {
        $('#cartTotalQuantity').html('{{ \Cart::getTotalQuantity() }}');    
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
          imagePath: '../vendor/up/img/icons/',
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
    @yield('js')
</body>

</html>
