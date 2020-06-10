<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="max-age=604800" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="{{ $page->name }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('pages', $page->slug) }}" />
    <meta property="og:image" content="{{ Voyager::Image($page->image) }}" />
    <meta property="og:description" content="{{ $page->description }}" />

	<title>{{ $page->name }}</title>

	<link href="{{ asset('vendor/bimgo/bootstrap/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
	<!-- jQuery -->
	<script src="{{ asset('vendor/bimgo/bootstrap/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
	<!-- Bootstrap4 files-->
	<script src="{{ asset('vendor/bimgo/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
	<link href="{{ asset('vendor/bimgo/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Font awesome 5 -->
	<link href="{{ asset('vendor/bimgo/bootstrap/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
	<!-- custom style -->
	<link href="{{ asset('vendor/bimgo/bootstrap/css/ui.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('vendor/bimgo/bootstrap/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick-theme.css') }}" rel="stylesheet" type="text/css" />
	<script src="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick.min.js') }}"></script>
	<!-- plugin: owl carousel  -->
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
	<script src="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
	<!-- custom javascript -->
	<script src="{{ asset('vendor/bimgo/bootstrap/js/script.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
	/// some script
	// jquery ready start
	$(document).ready(function() {
		// jQuery code
		/////////////////  items slider. /plugins/slickslider/
		if ($('.slider-banner-slick').length > 0) { // check if element exists
			$('.slider-banner-slick').slick({
				infinite: true,
				autoplay: true,
				slidesToShow: 1,
				dots: false,
				prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
			});
		} // end if

		/////////////////  items slider. /plugins/slickslider/
		if ($('.slider-custom-slick').length > 0) { // check if element exists
			$('.slider-custom-slick').slick({
				infinite: true,
				slidesToShow: 2,
				dots: true,
				prevArrow: $('.slick-prev-custom'),
				nextArrow: $('.slick-next-custom')
			});
		} // end if

			/////////////////  items slider. /plugins/slickslider/
		if ($('.slider-items-slick').length > 0) { // check if element exists
			$('.slider-items-slick').slick({
				infinite: true,
				swipeToSlide: true,
				slidesToShow: 4,
				dots: true,
				slidesToScroll: 2,
				prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 640,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
		} // end if
	}); 
	// jquery end
	</script>

	@yield('css')
	@laravelPWA
</head>
<body>
	@yield('header')
	@yield('content')
	@yield('footer')
	@yield('js')
</body>
</html>