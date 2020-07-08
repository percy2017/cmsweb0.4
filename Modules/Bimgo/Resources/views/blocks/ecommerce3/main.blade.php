<!-- ========================= SECTION MAIN ========================= -->
@php
    $sub_categories = \Modules\Bimgo\Entities\BgSubCategory::orderBy('updated_at', 'desc')->limit(7)->get();
@endphp
<section class="section-main bg padding-y">
	<div class="container">

	<div class="row">
		<aside class="col-md-3">
			<nav class="card">
				<ul class="menu-category">
					{{--  <li><a href="{{ $data->link1->value }}">{{ $data->text1->value }}</a></li>
					<li><a href="{{ $data->link2->value }}">{{ $data->text2->value }}</a></li>
					<li><a href="{{ $data->link3->value }}">{{ $data->text3->value }}</a></li>
					<li><a href="{{ $data->link4->value }}">{{ $data->text4->value }}</a></li>
					<li><a href="{{ $data->link5->value }}">{{ $data->text5->value }}</a></li>
					<li><a href="{{ $data->link6->value }}">{{ $data->text6->value }}</a></li>
					<li class="has-submenu"><a href="#">{{ $data->text7->value }}</a>
						<ul class="submenu">
							<li><a href="{{ $data->link71->value }}">{{ $data->text71->value }}</a></li>
							<li><a href="{{ $data->link72->value }}">{{ $data->text72->value }}</a></li>
							<li><a href="{{ $data->link73->value }}">{{ $data->text73->value }}</a></li>
							<li><a href="{{ $data->link74->value }}">{{ $data->text74->value }}</a></li>
						</ul>
					</li>  --}}
					@foreach ($sub_categories as $item)
						<li><a href="{{ $item->title }}">{{ $item->title }}</a></li>
					@endforeach
				</ul>
			</nav>
		</aside> <!-- col.// -->
		<div class="col-md-9">
			<article class="banner-wrap">
				<img src="{{ Voyager::Image($data->image->value) }}" class="w-100 rounded">
			</article>
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- container //  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->