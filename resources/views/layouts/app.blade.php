<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{ asset('resources/landingpage/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/landingpage/css/mdb.min.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
        padding-top: 60px;
    }
    </style>

</head>
<body>
    <div class="container">
        {{--  <main class="py-4">  --}}
        @yield('content')
        {{--  </main>  --}}
    </div>

  

  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/mdb.min.js') }}"></script>

  @yield('script')
</body>
</html>
