@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
{{--  {{ $cart = \Cart::getContent() }}  --}}
@php
    $cart = \Cart::getContent();
@endphp
<!-- Main Container -->
    <div class="container">
      <section class="section my-5 pb-5">
        <!-- Shopping Cart table -->
        <div class="table-responsive">
          <table class="table product-table table-cart-v-1">
            <!-- Table head -->
            <thead>
              <tr>
                <th></th>
                {{--  <th class="font-weight-bold">
                  <strong>Image</strong>
                </th>  --}}
                <th class="font-weight-bold">
                  <strong>Producto</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Opción</strong>
                </th>
                <th></th>
                <th class="font-weight-bold">
                  <strong>Pricio</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Cantidad</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Monto</strong>
                </th>
                <th></th>
              </tr>
            </thead>
            <!-- Table head -->
            <!-- Table body -->
            <tbody>
              <!-- First row -->
              @foreach ($cart as $item)
                @php
                  $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                @endphp
                <tr>
                  <th scope="row">
                    <img src="{{ Voyager::image($images) }}" alt=""
                      class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>{{ $item->name }}</strong>
                    </h5>
                    <p class="text-muted">{{ $item->attributes->description }}</p>
                  </td>
                  <td>{{ $item->attributes->title }}</td>
                  <td></td>
                  <td>{{ $item->price }} Bs.</td>
                  <td class="text-center text-md-left">
                    <span class="qty">1 </span>
                    <div class="btn-group radio-group ml-2" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-rounded">
                        <input type="radio" name="options" id="option1">&mdash;
                      </label>
                      <label class="btn btn-sm btn-primary btn-rounded">
                        <input type="radio" name="options" id="option2">+
                      </label>
                    </div>
                  </td>
                  <td class="font-weight-bold">
                    <strong>{{ $item->price }} Bs.</strong>
                  </td>
                  <td>
                    <a onclick="removecart('{{ route('bg_ajax_removecart', $item->attributes->slug) }}')" href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                      title="Remove item">X
                    </a>
                  </td>
                </tr>
              @endforeach
              
              <!-- First row -->
              <!-- Fourth row -->
              <tr>
                <td colspan="3"></td>
                <td>
                  <h4 class="mt-2">
                    <strong>Total</strong>
                  </h4>
                </td>
                <td class="text-right">
                  <h4 class="mt-2">
                    <strong>$2600</strong>
                  </h4>
                </td>
                <td colspan="3" class="text-right">
                  <a href="{{ url('my/payment') }}" class="btn btn-primary btn-rounded">Realizar Pago
                    <i class="fas fa-angle-right right"></i>
                  </a>
                </td>
              </tr>
              <!-- Fourth row -->
            </tbody>
            <!-- Table body -->
          </table>
        </div>
        <!-- Shopping Cart table -->
      </section>
    </div>
    <!-- Main Container -->
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
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