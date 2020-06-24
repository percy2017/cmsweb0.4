<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
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

    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    <link href="{{ asset('vendor/bimgo/mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bimgo/mdb/css/mdb.min.css') }}" rel="stylesheet">
    <style>

    </style>
    @yield('css')
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
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/js/mdb.min.js') }}"></script>
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
      $(document).ready(function () {
        $('#cartTotalQuantity').html('{{ \Cart::getTotalQuantity() }}');    
      });
    </script>
    @yield('js')
</body>

</html>
