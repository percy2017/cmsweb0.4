<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y-sm">
	<div class="container">

	<header class="section-heading">
		<a href="{{ route('bg_category3') }}" class="btn btn-outline-primary float-right">Ver Todos</a>
		<h3 class="section-title">Productos Populares</h3>
	</header><!-- sect-heading -->

		
	<div class="row">
		@foreach ($data as $item)
			@php
				$images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
			@endphp
			<div class="col-md-3">
				<div href="#" class="card card-product-grid">
					<a href="{{ route('bg_product3', $item->slug) }}" class="img-wrap"> <img src="{{ Voyager::image($images) }}"> </a>
					<figcaption class="info-wrap">
						<a href="{{ route('bg_product3', $item->slug) }}" class="title">{{ $item->name }}</a>
						<div class="price mt-1">{{ $item->product_details[0]->price }} Bs.</div> <!-- price-wrap.// -->
					</figcaption>
				</div>
			</div> <!-- col.// -->
		@endforeach
		
		
	</div> <!-- row.// -->

	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->