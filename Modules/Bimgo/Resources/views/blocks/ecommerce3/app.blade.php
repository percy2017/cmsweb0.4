<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<h4>{{ $data->title->value }}</h4>
			<p>{{ $data->parrafo->value }}</p>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="#"><img src="{{ Voyager::image($data->android->value) }}" height="40"></a>
			<a href="#"><img src="{{ Voyager::image($data->apple->value) }}" height="40"></a>
		</div>
		</div> <!-- row.// -->
	</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->