<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
	<div class="container">
		<header class="section-heading">
			<h4 class="section-title">{{ $block->title->value }}</h4>
		</header>
		<hr />
		<div class="row">
			@foreach ($data as $item)
				@php
					$images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
					$cant = \Modules\Bimgo\Entities\BgProduct::where('brand_id', $item->id)->count();
				@endphp
				<div class="col-md-2 col-6">
					<figure class="box item-logo">
						<a href="#"><img src="{{ Voyager::image($images) }}"></a>
						<figcaption class="border-top pt-2">{{ $cant }} Products</figcaption>
					</figure> <!-- item-logo.// -->
				</div>
			@endforeach
		</div> <!-- row.// -->
	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->