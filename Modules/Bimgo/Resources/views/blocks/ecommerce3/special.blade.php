  <!-- ========================= SECTION SPECIAL ========================= -->
<section class="section-specials padding-y border-bottom">
	<div class="container">	
		<div class="row">
		<div class="col-md-4">	
			<figure class="itemside">
				<div class="aside">
					<span class="icon-sm rounded-circle bg-primary">
						<i class="{{ $data->icons1->value }}"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">{{ $data->text1->value }}</h6>
					<p class="text-muted">{{ $data->parrafo1->value }}</p>
				</figcaption>
			</figure> <!-- iconbox // -->
			</div><!-- col // -->
		<div class="col-md-4">
			<figure class="itemside">
				<div class="aside">
					<span class="icon-sm rounded-circle bg-danger">
						<i class="{{ $data->icons2->value }}"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">{{ $data->text2->value }}</h6>
					<p class="text-muted">{{ $data->parrafo2->value }}</p>
				</figcaption>
			</figure> <!-- iconbox // -->
		</div><!-- col // -->
		<div class="col-md-4">
			<figure class="itemside">
				<div class="aside">
					<span class="icon-sm rounded-circle bg-success">
						<i class="{{ $data->icons3->value }}"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">{{ $data->text3->value }}</h6>
					<p class="text-muted">{{ $data->parrafo3->value }}</p>
				</figcaption>
			</figure> <!-- iconbox // -->
		</div><!-- col // -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section>
<!-- ========================= SECTION SPECIAL END// ========================= -->