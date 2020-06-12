@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

@php
    $cart = \Cart::getContent();
@endphp

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">

<table class="table table-borderless table-shopping-cart">
	<thead class="text-muted">
		<tr class="small text-uppercase">
			<th scope="col">Producto</th>
			<th scope="col" width="80">Cantidad</th>
			<th scope="col" width="100">Precio</th>
			<th scope="col" width="100">Monto</th>
			<th scope="col" class="text-right" width="180"> </th>
		</tr>
	</thead>
	<tbody>
		@foreach ($cart as $item)
			@php
				$images = $item->attributes->images ? json_decode($item->attributes->images)[0] : '../images/icons-bimgo/icon-512x512.png';
			@endphp
		
			<tr>
				<td>
					<figure class="itemside">
						<div class="aside"><img src="{{ Voyager::image($images) }}" class="img-sm"></div>
						<figcaption class="info">
							<a href="#" class="title text-dark">{{ $item->name }}</a>
							{{--  <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>  --}}
							<p class="text-muted small">{{ $item->attributes->description }}</p>
						</figcaption>
					</figure>
				</td>
				<td>
					<div class="form-group col-md flex-grow-0">
						<div class="input-group mb-3 input-spinner">
							<div class="input-group-prepend">
								<button class="btn btn-light" type="button" id="button-plus"> + </button>
							</div>
							<input type="text" class="form-control" value="{{ $item->quantity }}">
							<div class="input-group-append">
								<button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
							</div>
						</div>
					</div> <!-- col.// -->
				</td>
				<td> 
					<div class="price-wrap"> 
						<var class="price">{{ $item->price }} <small class="text-muted">Bs.</small></var>
					</div> <!-- price-wrap .// -->
				</td>
				<td>
					<div class="price-wrap"> 
						<var class="price">{{ $item->getPriceSum() }} <small class="text-muted">Bs.</small></var>
					</div>
				</td>
				<td class="text-right"> 
				<a data-original-title="Guardar a favorito" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
				<a href="#" onclick="removecart('{{ route('bg_ajax_removecart', $item->attributes->slug) }}')" class="btn btn-light"> Eliminar</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<div class="card-body border-top">
	<a href="#" class="btn btn-primary float-md-right"> Realizar Compra <i class="fa fa-chevron-right"></i> </a>
	<a href="{{ url('/') }}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continua Comprando </a>
</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i>Delivery gratis dentro de las 1-2 semanas</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
					<label>Tienes Cupon?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Codigo del Cupon">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Aplicar</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total Precio:</dt>
					  <dd class="text-right">{{ \Cart::getTotal() }} Bs.</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Descuento:</dt>
					  <dd class="text-right">0 Bs.</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total:</dt>
					  <dd class="text-right  h5"><strong>{{ \Cart::getTotal() }} Bs.</strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="{{ asset('vendor/bimgo/bootstrap/images/misc/payments.png') }}" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
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
		function removecart(urli){
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: 'Estas Segur@ ?',
				text: "Estas apunto de eliminar un producto de tu carrito!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Si, Eliminar!',
				cancelButtonText: 'No, cancelar!',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
				$.ajax({
					type: "get",
					url: urli,
					success: function (response) {
					swalWithBootstrapButtons.fire(
						'Item Eliminado!',
						'Puedes volver a Agregar el item! '+response.name,
						'success'
					)
					location.reload();
					}
				});
				} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
				) {
				swalWithBootstrapButtons.fire(
					'Accion Cancelada',
					'Puedes volver intentarlo :)',
					'error'
				)
				}
			})
		}
	</script>
@endsection