<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="cache-control" content="max-age=604800" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:site_name" content="{{ setting('site.title') }}" />
        <meta property="og:title" content="{{ $page->name }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('pages', $page->slug) }}" />
        <meta property="og:image" content="{{ Voyager::Image($page->image) }}" />
        <meta property="og:description" content="{{ $page->description }}" />

        <title>{{ $page->name }}</title>

        <link href="{{ asset('vendor/bimgo/alistyle/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('vendor/bimgo/alistyle/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Font awesome 5 -->
        <link href="{{ asset('vendor/bimgo/alistyle/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
        <!-- custom style -->
        <link href="{{ asset('vendor/bimgo/alistyle/css/ui.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/bimgo/alistyle/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    </head>
    @yield('css')
    @laravelPWA
<body>

    @yield('header')
    <div class="container">
        @yield('content')
    </div>  
    <!-- container end.// -->

    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    {{--  <section class="section-subscribe padding-y-lg">
        <div class="container">
            <p class="pb-2 text-center text-white">Delivering the latest product trends and industry news straight to your inbox</p>
            <div class="row justify-content-md-center">
                <div class="col-lg-5 col-md-6">
                    <form class="form-row">
                            <div class="col-md-8 col-7">
                            <input class="form-control border-0" placeholder="Your Email" type="email">
                            </div> <!-- col.// -->
                            <div class="col-md-4 col-5">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                            </div>
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
            </div>
        </div>
    </section>  --}}
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->

    @yield('footer')
    <!-- jQuery -->
    <script src="{{ asset('vendor/bimgo/alistyle/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap4 files-->
    <script src="{{ asset('vendor/bimgo/alistyle/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <!-- custom javascript -->
    <script src="{{ asset('vendor/bimgo/alistyle/js/script.js') }}" type="text/javascript"></script>
    @yield('js')
</body>
</html>