@extends('bimgo::layouts.ecommerce2.master')

@section('css')
@endsection

@section('header')
  @include('bimgo::layouts.ecommerce2.header')
@endsection

{{--  @section('intro')
  @include('bimgo::layouts.ecommerce2.intro')
@endsection  --}}

@section('content')
@php
    $cart = \Cart::getContent();
@endphp
<section class="section my-5 pb-5">
    <div class="card card-ecommerce">
        <div class="card-body">
        <!-- Shopping Cart table -->
        <div class="table-responsive">
            <table class="table product-table table-cart-v-2">
            <!-- Table head -->
            <thead class="mdb-color lighten-5">
                <tr>
                <th></th>
                <th class="font-weight-bold">
                    <strong>Product</strong>
                </th>
                <th class="font-weight-bold">
                    <strong>Color</strong>
                </th>
                <th></th>
                <th class="font-weight-bold">
                    <strong>Price</strong>
                </th>
                <th class="font-weight-bold">
                    <strong>QTY</strong>
                </th>
                <th class="font-weight-bold">
                    <strong>Amount</strong>
                </th>
                <th></th>
                </tr>

            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
                @foreach ($cart as $item)
                    @php
                    $images = $item->attributes->images ? json_decode($item->attributes->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                    @endphp
                    <!-- First row -->
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
                        <td>{{ $item->price }} Bs.  </td>

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

                            <strong>{{ $item->getPriceSum() }} Bs.</strong>

                        </td>
                        <td>

                            <a type="button" onclick="removecart('{{ route('bg_ajax_removecart', $item->attributes->slug) }}')" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Eliminar item">X

                            </a>

                        </td>
                    </tr>
                    <!-- First row -->
                    
                @endforeach
                <tr>
                    <td colspan="3"></td>
                    <td>
                      <h4 class="mt-2">
                        <strong>Total</strong>
                      </h4>
                    </td>
                    <td class="text-right">
                      <h4 class="mt-2">
                        <strong>{{ \Cart::getTotal() }} Bs.</strong>
                      </h4>
                    </td>
                    <td colspan="3" class="text-right">
                      <a href="{{ route('bg_payment2') }}" class="btn btn-primary btn-rounded">Realizar Pago
                        <i class="fas fa-angle-right right"></i>
                      </a>

                    </td>
                  </tr>
            </tbody>
            <!-- Table body -->

            </table>

        </div>
        <!-- Shopping Cart table -->

        </div>

    </div>
</section>

@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce2.footer')
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