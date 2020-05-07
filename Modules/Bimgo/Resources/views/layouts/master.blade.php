<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $page->name }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/histream/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('vendor/histream/css/mdb.min.css') }}" rel="stylesheet">
    <style>
      .md-outline.select-wrapper+label {
        top: .6em !important;
        z-index: 2 !important;
      }
    </style>
    @laravelPWA
  </head>

  <body class="coworking-page">

    <!-- Main navigation -->
    <header>
      @yield('header')
    </header>
    <!-- Main navigation -->

    <!-- Main layout -->
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>
    <!-- Main layout -->

    <!-- Footer -->
    @include('bimgo::layouts.footer')
    <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
    <!--  Bootstrap tooltips  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.js') }}"></script>
    <!--  Bootstrap core JavaScript  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
    <!--  MDB core JavaScript  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/mdb.min.js') }}"></script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
      $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
        $(this).closest('.select-outline').find('label').toggleClass('active');
        $(this).closest('.select-outline').find('.caret').toggleClass('active');
      });
    });
    </script>
  </body>
</html>