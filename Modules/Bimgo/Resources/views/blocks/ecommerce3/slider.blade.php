
<section class="section-content padding-y">
	<div class="container">
		<h4>Slick slider items</h4>
		<!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
		<div class="slider-items-slick row" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
			<div class="item-slide p-2">
				@foreach ($data as $item)
					@php
						$images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
					@endphp
					<figure class="card card-product-grid mb-0">
						<div class="img-wrap"> 
							<span class="badge badge-danger">{{ json_decode($item->tags)[0] }}</span>
							<img src="{{ Voyager::image($images) }}">
						</div>
						<figcaption class="info-wrap text-center">
							<h6 class="title text-truncate"><a href="#">{{ $item->name }}</a></h6>
						</figcaption>
					</figure> <!-- card // -->
						</div>
						<div class="item-slide p-2">
					{{-- <figure class="card card-product-grid  mb-0">
						<div class="img-wrap"> <img src="{{ asset('vendor/bimgo/bootstrap/images/items/2.jpg') }}"> </div>
						<figcaption class="info-wrap text-center">
							<h6 class="title text-truncate"><a href="#">Second item name</a></h6>
						</figcaption>
					</figure> --}}
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- ============== COMPONENT SLIDER ITEMS SLICK .end // ============= -->