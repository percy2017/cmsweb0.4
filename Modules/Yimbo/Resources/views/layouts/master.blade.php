<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="{{ $page->name }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('pages', $page->slug) }}" />
    <meta property="og:image" content="{{ Voyager::Image($page->image) }}" />
    <meta property="og:description" content="{{ $page->description }}" />

    <title>{{ $page->name }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- jQuery -->
    <script src="{{ asset('vendor/yimbo/bootstrap/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap4 files-->
    <script src="{{ asset('vendor/yimbo/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('vendor/yimbo/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font awesome 5 -->
    <link href="{{ asset('vendor/yimbo/bootstrap/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
    <!-- custom style -->
    <link href="{{ asset('vendor/yimbo/bootstrap/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/yimbo/bootstrap/css/responsive.css') }}" rel="stylesheet" />
    <!-- custom javascript -->
    <script src="{{ asset('vendor/yimbo/bootstrap/js/script.js') }}" type="text/javascript"></script>
    @laravelPWA
</head>
<body>

<header class="section-header">

    <nav class="navbar p-md-0 navbar-expand-sm navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTop4">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
                        <ul class="dropdown-menu small">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
                        <ul class="dropdown-menu small">
                            <li><a class="dropdown-item" href="#">EUR</a></li>
                            <li><a class="dropdown-item" href="#">AED</a></li>
                            <li><a class="dropdown-item" href="#">RUBL </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li><a href="#" class="nav-link"> <i class="fa fa-comment"></i> Live chat </a></li>
                    <li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us </a></li>
                </ul> <!-- list-inline //  -->
            </div> <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav>

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                        <img class="logo" src="{{ asset('vendor/yimbo/bootstrap/images/logo.png') }}">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg col-sm col-md col-6 flex-grow-0">
                    <div class="category-wrap dropdown d-inline-block float-md-right">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> 
                            <i class="fa fa-bars"></i> All category 
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
                            <a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
                            <a class="dropdown-item" href="#">Auto / Transportation</a>
                            <a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
                            <a class="dropdown-item" href="#">Home & Garden / Construction / Lights </a>
                            <a class="dropdown-item" href="#">Beauty & Personal Care / Health </a> 
                        </div>
                    </div>  <!-- category-wrap.// -->
                </div> <!-- col.// -->
                <div class="col-lg  col-md-6 col-sm-12 col">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" style="width:60%;" placeholder="Search">
                            <select class="custom-select"  name="category_name">
                                    <option value="">All type</option><option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
                            </select>
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                    <div class="d-flex justify-content-md-end widgets-wrap">
                        <a href="#" class="widget-header">
                            <div class="icontext">
                                <div class="icon icon-sm border rounded-circle">
                                    <i class="fa  fa-user"></i>
                                </div>
                                <div class="text">
                                    <small>Sign in | Join </small>
                                    <div>My account </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="widget-header ml-4">
                            <div class="icon icon-sm border rounded-circle"><i class="fa fa-shopping-cart"></i></div>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </a>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->


    <nav class="navbar navbar-main navbar-expand-lg border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav4">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link pl-0" href="#"> <strong>All category</strong></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Fashion</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Supermarket</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Electronics</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Baby &amp Toys</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Fitness sport</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
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
    </nav> <!-- navbar main end.// -->

</header> <!-- section-header.// -->

<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro">

    <div class="intro-banner-wrap">
        <img src="{{ asset('vendor/yimbo/bootstrap/images/banners/1.jpg') }}" class="w-100 img-fluid">
    </div>
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md-4">
					<article class="mr-3">
						<img src="{{ asset('vendor/yimbo/bootstrap/images/logo.png') }}"  class="logo-footer">
						<p class="mt-3">Some short text about company like You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.</p>
						<div>
						    <a class="btn btn-icon btn-light" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
						    <a class="btn btn-icon btn-light" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a>
						    <a class="btn btn-icon btn-light" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube"></i></a>
						    <a class="btn btn-icon btn-light" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a>
						</div>
					</article>
				</aside>
				<aside class="col-sm-3 col-md-2">
					<h6 class="title">About</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Services</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Blogs</a></li>
					</ul>
				</aside>
				<aside class="col-sm-3 col-md-2">
					<h6 class="title">Services</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Help center</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Terms and Policy</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-sm-3  col-md-2">
					<h6 class="title">For users</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
						<li> <a href="#"> My Wishlist </a></li>
					</ul>
				</aside>
				<aside class="col-sm-2  col-md-2">
					<h6 class="title">Our app</h6>
					<a href="#" class="d-block mb-2"><img src="{{ asset('vendor/yimbo/bootstrap/images/misc/appstore.png') }}" height="40"></a>
					<a href="#"  class="d-block mb-2"><img src="{{ asset('vendor/yimbo/bootstrap/images/misc/playmarket.png') }}" height="40"></a>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-copyright border-top">
				<p class="float-left text-muted"> &copy 2019 Company  All rights resetved </p>
				<p target="_blank" class="float-right text-muted">
					<a href="#">Privacy & Cookies</a> &nbsp   &nbsp 
					<a href="#">Accessibility</a>
				</p>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>