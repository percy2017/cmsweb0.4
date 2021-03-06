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
	<!-- plugin: owl carousel  -->
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">

	<link href="{{ asset('vendor/bimgo/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Font awesome 5 -->
	<link href="{{ asset('vendor/bimgo/bootstrap/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
	<!-- custom style -->
	<link href="{{ asset('vendor/bimgo/bootstrap/css/ui.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('vendor/bimgo/bootstrap/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick-theme.css') }}" rel="stylesheet" type="text/css" />
	
	@yield('css')
	@laravelPWA
</head>
<body>
	@yield('header')
	@yield('content')
	@yield('footer')
	<script src="{{ asset('vendor/bimgo/bootstrap/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vendor/bimgo/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vendor/bimgo/bootstrap/plugins/slickslider/slick.min.js') }}"></script>
	<script src="{{ asset('vendor/bimgo/bootstrap/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
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

					/////////////////  items slider. /plugins/owlcarousel/
			if ($('.slider-banner-owl').length > 0) { // check if element exists
				$('.slider-banner-owl').owlCarousel({
					loop:true,
					margin:0,
					items: 1,
					dots: false,
					nav:true,
					navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
				});
			} // end if 

			/////////////////  items slider. /plugins/owlslider/
			if ($('.slider-items-owl').length > 0) { // check if element exists
				$('.slider-items-owl').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
					responsive:{
						0:{
							items:1
						},
						640:{
							items:3
						},
						1024:{
							items:4
						}
					}
				})
			} // end if

			/////////////////  items slider. /plugins/owlcarousel/
			if ($('.slider-custom-owl').length > 0) { // check if element exists
				var slider_custom_owl = $('.slider-custom-owl');
				slider_custom_owl.owlCarousel({
					loop: true,
					margin:15,
					items: 2,
					nav: false,
				});

				// for custom navigation
				$('.owl-prev-custom').click(function(){
					slider_custom_owl.trigger('prev.owl.carousel');
				});

				$('.owl-next-custom').click(function(){
				slider_custom_owl.trigger('next.owl.carousel');
				});

			} // end if 

		}); 
		// jquery end
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	@yield('js')
</body>
</html>