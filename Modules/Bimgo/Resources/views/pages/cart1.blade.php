@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
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
                <th class="font-weight-bold">
                  <strong>Producto</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Type</strong>
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
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>iPhone</strong>

                  </h5>

                  <p class="text-muted">Apple</p>

                </td>

                <td>White</td>

                <td></td>

                <td>$800</td>

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

                  <strong>$800</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
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