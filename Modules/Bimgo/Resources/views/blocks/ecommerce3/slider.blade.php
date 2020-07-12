
<section class="section-content padding-y">
	<div class="container">
		<h4>{{ $block->title->value }}</h4>
		<hr />
		<!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
		<div class="slider-items-slick row" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
			<div class="item-slide p-2">
				@foreach ($data as $item)
					@php
						$images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
						$default = null;
					@endphp
					@foreach ($item->product_details as $value)
						@if ($value->default)
							@php
								$default = $value;
							@endphp
						@endif
					@endforeach
					<figure class="card card-product-grid mb-0">
						<a href="{{ route('bg_product3', $item->slug) }}" class="img-wrap">
							<div class="img-wrap"> 
								<span class="badge badge-danger">{{ json_decode($item->tags)[0] }}</span>
								<img src="{{ Voyager::image($images) }}">
							</div>
						</a>
						<figcaption class="info-wrap text-center">
							<p class="title text-truncate">{{ $item->name }}</p>
						</figcaption>
						<div class="card-footer">
							@if($default->price_last > 0)
								{{--  <h5 class="mb-0 pb-0 mt-1 font-weight-bold">  --}}
									<span class="red-text"><strong>{{ $default->price }}</strong></span> {{ setting('ecommerce.monedas') }}
									<span class="grey-text"><small><s>{{ $default->price_last }}</s></small></span>
								{{--  </h5>  --}}
							@else 
								<span class="float-left"><strong>{{ $default->price }} {{ setting('ecommerce.monedas') }}</strong></span>
							@endif
							<span class="float-right">
								<a onclick="addcart('{{ route('bg_ajax_addcart', [$item->slug, $default->id]) }}')" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i
									class="fas fa-shopping-cart ml-3"></i></a>
							</span>
						</div>
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