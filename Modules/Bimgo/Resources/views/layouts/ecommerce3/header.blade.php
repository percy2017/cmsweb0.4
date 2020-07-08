@php
	$categories = \Modules\Bimgo\Entities\BgCategory::orderBy('updated_at', 'desc')->limit(12)->get();
@endphp
<header class="section-header">
	<section class="header-main border-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2 col-4">
					<a href="{{ url('/') }}" class="brand-wrap">
						<img class="logo" src="{{ asset('vendor/bimgo/bootstrap/images/logo.png') }}">
					</a> <!-- brand-wrap.// -->
				</div>
				<div class="col-lg-6 col-sm-12">
					<form action="#" class="search">
						<div class="input-group w-100">
							<input type="text" class="form-control" placeholder="Buscar">
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
							<a href="{{ route('bg_cart3') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
							<span class="badge badge-pill badge-danger notify">0</span>
						</div>
						<div class="widget-header icontext">
							<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
							<div class="text">
								@guest
									<span class="text-muted">Bienvenido!</span>
									<div> 
										<a href="{{ url('login') }}">Ingresar</a> |  
										<a href="{{ url('register') }}"> registrar</a>
									</div>
								@else
									<span class="text-muted">Bienvenido!</span>
									<div> 
										<a href="{{ route('bg_profile') }}">{{ Auth::user()->name }}</a> | 
										<a href="{{ route('logout') }}">Salir</a>
									</div>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								@endguest
							</div>
						</div>

					</div> <!-- widgets-wrap.// -->
				</div> <!-- col.// -->
			</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section> <!-- header-main .// -->



	<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="main_nav">
				<ul class="navbar-nav">
					@foreach ($categories as $item)
						@php
							$subcategories = \Modules\Bimgo\Entities\BgSubCategory::where('category_id', $item->id)->orderBy('id', 'desc')->limit(12)->get();
						@endphp

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> {{ $item->title }}</a>
							<div class="dropdown-menu">
							 @foreach ($subcategories as $item2)
								@php
									$products = \Modules\Bimgo\Entities\BgProduct::where('sub_category_id', $item2->id)->orderBy('id', 'desc')->limit(6)->get();
								@endphp
								
									{{--  @foreach ($products as $item3)  --}}
										<a class="dropdown-item" href="#">{{ $item2->title }}</a>
									{{--  @endforeach  --}}
								
							@endforeach
							</div>
						</li>


						{{--  <li class="nav-item dropdown">
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
						</li>--}}
						{{--  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Foods and Drink</a>
								<a class="dropdown-item" href="#">Home interior</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Category 1</a>
								<a class="dropdown-item" href="#">Category 2</a>
								<a class="dropdown-item" href="#">Category 3</a>
							</div>
						</li>  --}}
					@endforeach
				</ul>
			</div> <!-- collapse .// -->
		</div> <!-- container .// -->
	</nav>

</header> <!-- section-header.// -->