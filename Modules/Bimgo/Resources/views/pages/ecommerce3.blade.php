<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

<!-- custom javascript -->
<script src="{{ asset('vendor/bimgo/bootstrap/js/script.js') }}" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>


<header class="section-header">
	<section class="header-main border-bottom">
		<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-2 col-4">
			<a href="http://bootstrap-ecommerce.com" class="brand-wrap">
				<img class="logo" src="{{ asset('vendor/bimgo/bootstrap/images/logo.png') }}">
			</a> <!-- brand-wrap.// -->
		</div>
		<div class="col-lg-6 col-sm-12">
			<form action="#" class="search">
				<div class="input-group w-100">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-append">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-search"></i>
					</button>
					</div>
				</div>
			</form> <!-- search-wrap .end// -->
		</div> <!-- col.// -->
		<div class="col-lg-4 col-sm-6 col-12">
			<div class="widgets-wrap float-md-right">
				<div class="widget-header  mr-3">
					<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
					<span class="badge badge-pill badge-danger notify">0</span>
				</div>
				<div class="widget-header icontext">
					<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
					<div class="text">
						<span class="text-muted">Welcome!</span>
						<div> 
							<a href="#">Sign in</a> |  
							<a href="#"> Register</a>
						</div>
					</div>
				</div>

			</div> <!-- widgets-wrap.// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section> <!-- header-main .// -->
	</header> <!-- section-header.// -->


	<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
			<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Supermarket</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Partnership</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Baby &amp Toys</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Fitness sport</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Clothing</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Furnitures</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Foods and Drink</a>
				<a class="dropdown-item" href="#">Home interior</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Category 1</a>
				<a class="dropdown-item" href="#">Category 2</a>
				<a class="dropdown-item" href="#">Category 3</a>
			</div>
			</li>
		</ul>
		</div> <!-- collapse .// -->
	</div> <!-- container .// -->
	</nav>

</header> <!-- section-header.// -->


<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-y">
	<div class="container">

	<div class="row">
		<aside class="col-md-3">
			<nav class="card">
				<ul class="menu-category">
					<li><a href="#">Best clothes</a></li>
					<li><a href="#">Automobiles</a></li>
					<li><a href="#">Home interior</a></li>
					<li><a href="#">Electronics</a></li>
					<li><a href="#">Technologies</a></li>
					<li><a href="#">Digital goods</a></li>
					<li class="has-submenu"><a href="#">More items</a>
						<ul class="submenu">
							<li><a href="#">Submenu name</a></li>
							<li><a href="#">Great submenu</a></li>
							<li><a href="#">Another menu</a></li>
							<li><a href="#">Some others</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</aside> <!-- col.// -->
		<div class="col-md-9">
			<article class="banner-wrap">
				<img src="{{ asset('vendor/bimgo/bootstrap/images/banners/2.jpg') }}" class="w-100 rounded">
			</article>
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- container //  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->


<!-- ========================= SECTION SPECIAL ========================= -->
<section class="section-specials padding-y border-bottom">
	<div class="container">	
	<div class="row">
	<div class="col-md-4">	
				<figure class="itemside">
					<div class="aside">
						<span class="icon-sm rounded-circle bg-primary">
							<i class="fa fa-money-bill-alt white"></i>
						</span>
					</div>
					<figcaption class="info">
						<h6 class="title">Reasonable prices</h6>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labor </p>
					</figcaption>
				</figure> <!-- iconbox // -->
		</div><!-- col // -->
		<div class="col-md-4">
				<figure class="itemside">
					<div class="aside">
						<span class="icon-sm rounded-circle bg-danger">
							<i class="fa fa-comment-dots white"></i>
						</span>
					</div>
					<figcaption class="info">
						<h6 class="title">Customer support 24/7 </h6>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labor </p>
					</figcaption>
				</figure> <!-- iconbox // -->
		</div><!-- col // -->
		<div class="col-md-4">
				<figure class="itemside">
					<div class="aside">
						<span class="icon-sm rounded-circle bg-success">
							<i class="fa fa-truck white"></i>
						</span>
					</div>
					<figcaption class="info">
						<h6 class="title">Quick delivery</h6>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labor </p>
					</figcaption>
				</figure> <!-- iconbox // -->
		</div><!-- col // -->
	</div> <!-- row.// -->

	</div> <!-- container.// -->
</section>
<!-- ========================= SECTION SPECIAL END// ========================= -->


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
	<div class="container">

	<header class="section-heading">
		<a href="#" class="btn btn-outline-primary float-right">See all</a>
		<h3 class="section-title">Popular products</h3>
	</header><!-- sect-heading -->

		
	<div class="row">
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/1.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Just another product name</a>
					<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/2.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Some item name here</a>
					<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/3.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Great product name here</a>
					<div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/4.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Just another product name</a>
					<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/5.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Just another product name</a>
					<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/6.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Some item name here</a>
					<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/7.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Great product name here</a>
					<div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3">
			<div href="#" class="card card-product-grid">
				<a href="#" class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/9.jpg') }}"> </a>
				<figcaption class="info-wrap">
					<a href="#" class="title">Just another product name</a>
					<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
	</div> <!-- row.// -->

	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
	<div class="container">

	<div class="row">
	<div class="col-md-6">
		<h3>Download app demo text</h3>
		<p>Get an amazing app  to make Your life easy</p>
	</div>
	<div class="col-md-6 text-md-right">
		<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/misc/appstore.png') }}" height="40"></a>
		<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/misc/appstore.png') }}" height="40"></a>
	</div>
	</div> <!-- row.// -->
	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->


<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
	<div class="container">
	<article class="card card-body">


	<div class="row">
		<div class="col-md-4">	
			<figure class="item-feature">
				<span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
				<figcaption class="pt-3">
					<h5 class="title">Fast delivery</h5>
					<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore </p>
				</figcaption>
			</figure> <!-- iconbox // -->
		</div><!-- col // -->
		<div class="col-md-4">
			<figure  class="item-feature">
				<span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>	
				<figcaption class="pt-3">
					<h5 class="title">Creative Strategy</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
				</figcaption>
			</figure> <!-- iconbox // -->
		</div><!-- col // -->
		<div class="col-md-4">
			<figure  class="item-feature">
				<span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
				<figcaption class="pt-3">
					<h5 class="title">High secured </h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
				</figcaption>
			</figure> <!-- iconbox // -->
		</div> <!-- col // -->
	</div>
	</article>

	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Our Brands</h3>
	</header><!-- sect-heading -->

	<div class="row">
		<div class="col-md-2 col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo1.png') }}"></a>
				<figcaption class="border-top pt-2">36 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		<div class="col-md-2  col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo2.png') }}"></a>
				<figcaption class="border-top pt-2">980 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		<div class="col-md-2  col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo3.png') }}"></a>
				<figcaption class="border-top pt-2">25 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		<div class="col-md-2  col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo4.png') }}"></a>
				<figcaption class="border-top pt-2">72 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		<div class="col-md-2  col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo5.png') }}"></a>
				<figcaption class="border-top pt-2">41 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
		<div class="col-md-2  col-6">
			<figure class="box item-logo">
				<a href="#"><img src="{{ asset('vendor/bimgo/bootstrap/images/logos/logo2.png') }}"></a>
				<figcaption class="border-top pt-2">12 Products</figcaption>
			</figure> <!-- item-logo.// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-2">
				<p class="text-muted"> &copy 2019 Company name </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span  class="px-2">info@pixsellz.io</span>
				<span  class="px-2">+879-332-9375</span>
				<span  class="px-2">Street name 123, Avanue abc</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>