@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

@section('css')
    
@show

@section('content')
  <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
	<div class="container">
		<div class="row">
			<aside class="col-md-3">
				
				<div class="card">
					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
								<i class="icon-control fa fa-chevron-down"></i>
								<h6 class="title">Categorias</h6>
							</a>
						</header>
						<div class="filter-content collapse show" id="collapse_1" style="">
							<div class="card-body">
								<form class="pb-3">
									<div class="input-group">
									<input type="text" class="form-control" placeholder="Buscar">
									<div class="input-group-append">
										<button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
									</div>
									</div>
								</form>
								<ul class="list-menu">
									@foreach ($categorias as $item)
										<li><a href="#">{{ $item->title }}  </a></li>
									@endforeach
								</ul>
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- filter-group  .// -->
					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
								<i class="icon-control fa fa-chevron-down"></i>
								<h6 class="title">Marcas </h6>
							</a>
						</header>
						<div class="filter-content collapse show" id="collapse_2" style="">
							<div class="card-body">
								@foreach ($brands as $item)
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<div class="custom-control-label">{{ $item->name }}  
											<b class="badge badge-pill badge-light float-right">0</b>  
										</div>
									</label>
								@endforeach
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- filter-group .// -->
					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
								<i class="icon-control fa fa-chevron-down"></i>
								<h6 class="title">Rango de Precio </h6>
							</a>
						</header>
						<div class="filter-content collapse show" id="collapse_3" style="">
							<div class="card-body">
								<input type="range" class="custom-range" min="0" max="100" name="">
								<div class="form-row">
								<div class="form-group col-md-6">
								<label>Min</label>
								<input class="form-control" placeholder="$0" type="number">
								</div>
								<div class="form-group text-right col-md-6">
								<label>Max</label>
								<input class="form-control" placeholder="$1,0000" type="number">
								</div>
								</div> <!-- form-row.// -->
								<button class="btn btn-block btn-primary">Apply</button>
							</div><!-- card-body.// -->
						</div>
					</article> <!-- filter-group .// -->
					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
								<i class="icon-control fa fa-chevron-down"></i>
								<h6 class="title">Sizes </h6>
							</a>
						</header>
						<div class="filter-content collapse show" id="collapse_4" style="">
							<div class="card-body">
							<label class="checkbox-btn">
								<input type="checkbox">
								<span class="btn btn-light"> XS </span>
							</label>

							<label class="checkbox-btn">
								<input type="checkbox">
								<span class="btn btn-light"> SM </span>
							</label>

							<label class="checkbox-btn">
								<input type="checkbox">
								<span class="btn btn-light"> LG </span>
							</label>

							<label class="checkbox-btn">
								<input type="checkbox">
								<span class="btn btn-light"> XXL </span>
							</label>
						</div><!-- card-body.// -->
						</div>
					</article> <!-- filter-group .// -->
					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
								<i class="icon-control fa fa-chevron-down"></i>
								<h6 class="title">More filter </h6>
							</a>
						</header>
						<div class="filter-content collapse in" id="collapse_5" style="">
							<div class="card-body">
								<label class="custom-control custom-radio">
								<input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
								<div class="custom-control-label">Any condition</div>
								</label>

								<label class="custom-control custom-radio">
								<input type="radio" name="myfilter_radio" class="custom-control-input">
								<div class="custom-control-label">Brand new </div>
								</label>

								<label class="custom-control custom-radio">
								<input type="radio" name="myfilter_radio" class="custom-control-input">
								<div class="custom-control-label">Used items</div>
								</label>

								<label class="custom-control custom-radio">
								<input type="radio" name="myfilter_radio" class="custom-control-input">
								<div class="custom-control-label">Very old</div>
								</label>
							</div><!-- card-body.// -->
						</div>
					</article> <!-- filter-group .// -->
				</div> <!-- card.// -->

			</aside> <!-- col.// -->
			<main class="col-md-9">

				<header class="border-bottom mb-4 pb-3">
						<div class="form-inline">
							<span class="mr-md-auto">30 Productos Econtrados </span>
							<select class="mr-2 form-control">
								@foreach ($SubCategorias as $item)
									<option>{{ $item->title }}</option>
								@endforeach
							</select>
							<div class="btn-group">
								<a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view"> 
									<i class="fa fa-bars"></i></a>
								<a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view"> 
									<i class="fa fa-th"></i></a>
							</div>
						</div>
				</header><!-- sect-heading -->

				<div class="row">
					@foreach ($products as $item)
						@php
							$images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
						@endphp
						<div class="col-md-4">
							<figure class="card card-product-grid">
								<div class="img-wrap"> 
									<span class="badge badge-danger"> {{ json_decode($item->tags)[0] }} </span>
									<img src="{{ Voyager::image($images) }}">
									<a class="btn-overlay" href="{{ Voyager::image($images) }}" target="_blank"><i class="fa fa-search-plus"></i> Quick view</a>
								</div> <!-- img-wrap.// -->
								<figcaption class="info-wrap">
									<div class="fix-height">
										<a href="{{ route('bg_product3', $item->slug) }}" class="title">{{ $item->name }}</a>
										<div class="price-wrap mt-2">
											@if ($item->product_details[0]->price_last > 0)
												<span class="price">{{ $item->product_details[0]->price }} Bs.</span>
												<del class="price-old">{{ $item->product_details[0]->price_last }} Bs.</del>
											@else
												<span class="price">{{ $item->product_details[0]->price }} Bs.</span>
											@endif
											
										</div> <!-- price-wrap.// -->
									</div>
									<a href="#" onclick="addcart('{{ route('bg_ajax_addcart', $item->slug) }}')" class="btn btn-block btn-primary">Agregar al carrito </a>
								</figcaption>
							</figure>
						</div> <!-- col.// -->
					@endforeach
				</div> <!-- row end.// -->


				<nav class="mt-4" aria-label="Page navigation sample">
					<ul class="pagination">
						{{--  <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>  --}}
						{{ $products->links() }}
					</ul>
				</nav>

			</main> <!-- col.// -->
		</div>
	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce3.footer')
@endsection 

@section('js')
	<script>
		function addcart(urli){
            $.ajax({
                type: "get",
                url: urli,
                success: function (response) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: response.name+', Agregado a tu Carrito',
                        showConfirmButton: true,
                        timer: 3000
                    })
                }
            });
        } 
	</script>
@show