<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $page->name }}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bimgo/mdb/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('vendor/bimgo/mdb/css/mdb.min.css') }}" rel="stylesheet">
  <style>

  </style>

</head>

<body class="homepage-v1 hidden-sn white-skin animated">
  @yield('header')
  @yield('intro')
  <!-- Main Container -->
  <div class="container">
      <!-- Grid row -->
      <div class="row pt-4">
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
  <script type="text/javascript" src="{{  asset('vendor/bimgo/mdb/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{  asset('vendor/bimgo/mdb/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{  asset('vendor/bimgo/mdb/js/bootstrap.min.js') }}">
  </script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{  asset('vendor/bimgo/mdb/js/mdb.min.js') }}"></script>
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

</body>

</html>
