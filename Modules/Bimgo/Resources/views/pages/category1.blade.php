@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
    @php
        $cart = \Cart::getContent();
    @endphp
      <!-- Main Container-->
  {{-- <div class="container mt-5 pt-3"> --}}
    <!-- Navbar-->
    <div class="row pt-4">
      <!-- Content-->
      <div class="col-lg-9">
        <!-- Filter Area-->
        <div class="row">
          <div class="col-md-4 mt-3">
            <!-- Sort by-->
            <select class="mdb-select grey-text md-form" multiple>
              <option value="" disabled selected>Elije una Sub Categoria</option>
              @foreach ($SubCategorias as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
              @endforeach
            </select>
            <label class="mdb-main-label">Sub Categorias</label>
            <button class="btn-save btn btn-primary btn-sm">Save</button>
            <!-- Sort by-->
          </div>
          <div class="col-8 col-md-8 text-right">
            <!-- View Switcher-->
            <a class="btn blue darken-3 btn-sm"><i class="fas fa-th mr-2" aria-hidden="true"></i><strong>
                Grid</strong></a>
            <a class="btn blue darken-3 btn-sm"><i class="fas fa-th-list mr-2" aria-hidden="true"></i><strong>
                List</strong></a>
            <!-- View Switcher-->
          </div>
        </div>
        <!-- Filter Area-->
        <!-- Products Grid-->
        <section class="section pt-4">

          <!-- Grid row-->
          <div class="row mb-3">
            @foreach ($products as $item)
              @php
                $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
              @endphp
              <!-- Grid column-->
              <div class="col-lg-4 col-md-12 mb-4">
                <!-- Card-->
                <div class="card card-ecommerce">
                  <!-- Card image-->
                  <div class="view overlay">
                    <img src="{{ Voyager::image($images) }}" class="img-fluid" alt="{{ $item->name }}">
                    <a href="{{ route('bg_product', $item->slug) }}">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image-->

                  <!-- Card content-->
                  <div class="card-body">
                    <!-- Category & Title-->
                    <h5 class="card-title mb-1"><strong><a class="dark-grey-text">{{ $item->name }}</a></strong></h5>
                    <span class="badge grey mb-2">{{ json_decode($item->tags)[0] }}</span>
                    <!-- Rating-->
                    <ul class="rating">
                      @switch($item->stars)
                          @case(1)
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              @break
                          @case(2)
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              @break
                          @case(3)
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              @break
                          @case(4)
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star grey-text"></i></li>
                              @break
                          @case(5)
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              <li><i class="fas fa-star blue-text"></i></li>
                              @break
                          @default
                      @endswitch
                    </ul>
                    <!-- Card footer-->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">
                        @php
                            $default = null;
                        @endphp
                        @foreach ($item->product_details as $value)
                            @if ($value->default)
                                @php
                                    $default = $value;
                                @endphp
                            @endif
                        @endforeach
                        @if($default->price_last > 0)
                          <h5 class="mb-0 pb-0 mt-1 font-weight-bold"><span
                              class="red-text"><strong> {{ $default->price }} </strong></span>
                              <span class="grey-text"><small><s> {{ $default->price_last }} </s></small></span>
                              {{ setting('ecommerce.monedas') }}
                          </h5>
                        @else 
                          <span class="float-left"><strong>{{ $default->price }} {{ setting('ecommerce.monedas') }} </strong></span>
                        @endif
                        {{--  <span class="float-left"><strong>1439$</strong></span>  --}}
                        <span class="float-right">
                          <a onclick="addcart('{{ route('bg_ajax_addcart', [$item->slug, $default->id]) }}')"  data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i
                              class="fas fa-shopping-cart ml-3"></i></a>
                        </span>

                      </div>

                    </div>

                  </div>
                  <!-- Card content-->

                </div>
                <!-- Card-->

              </div>
              <!-- Grid column-->
            @endforeach

          </div>
          <!-- Grid row-->

          <!-- Grid row-->
          <div class="row justify-content-center mb-4">
            {{ $products->links() }}
          </div>
          <!-- Grid row-->

        </section>
        <!-- Products Grid-->

      </div>
      <!-- Content-->

      <!-- Sidebar-->
      <div class="col-lg-3">

        <div class="">

          <!-- Grid row-->
          <div class="row">

            <!-- Filter by category-->
            <div class="col-md-6 col-lg-12 mb-5">

              <h5 class="font-weight-bold dark-grey-text"><strong>Categorias</strong></h3>

                <div class="divider"></div>

                <!-- Radio group-->
                <div class="form-group ">
                  <input class="form-check-input" name="group100" type="radio" id="001" checked>
                  <label for="001" class="form-check-label dark-grey-text">Todos</label>
                </div>
                @foreach ($categorias as $item)
                    <div class="form-group ">
                      <input class="form-check-input" name="group100" type="radio" id="{{ $item->id }}">
                      <label for="{{ $item->id }}" class="form-check-label dark-grey-text">{{ $item->title }}</label>
                    </div>
                @endforeach
            </div>
            <!-- Filter by category-->

            <div class="col-md-6 col-lg-12 mb-5">

              <!-- Panel-->
              <h5 class="font-weight-bold dark-grey-text"><strong>Ordenar Por</strong></h3>
                <div class="divider"></div>
                <p class="blue-text"><a>Default</a></p>
                <p class="dark-grey-text"><a>Popularity</a></p>
                <p class="dark-grey-text"><a>Average rating</a></p>
                <p class="dark-grey-text"><a>Price: low to high</a></p>
                <p class="dark-grey-text"><a>Price: high to low</a></p>
            </div>
          </div>
          <!-- Grid row-->

          <!-- Grid row-->
          <div class="row">

            <!-- Filter by price-->
            <div class="col-md-6 col-lg-12 mb-5">
              <h5 class="font-weight-bold dark-grey-text"><strong>Precios</strong></h3>
                <div class="divider"></div>
                <form class="range-field mt-3">
                  <input id="calculatorSlider" class="no-border" type="range" value="0" min="0" max="30" />
                </form>
                <!-- Grid row-->
                <div class="row justify-content-center">
                  <!-- Grid column-->
                  <div class="col-md-6 text-left">
                    <p class="dark-grey-text"><strong id="resellerEarnings">0 Bs.</strong></p>
                  </div>
                  <!-- Grid column-->
                  <!-- Grid column-->
                  <div class="col-md-6 text-right">
                    <p class="dark-grey-text"><strong id="clientPrice">9999 Bs.</strong></p>
                  </div>
                  <!-- Grid column-->
                </div>
                <!-- Grid row-->
            </div>
            <!-- Filter by price-->

            <!-- Filter by rating-->
            <div class="col-md-6 col-lg-12 mb-5">

              <h5 class="font-weight-bold dark-grey-text"><strong>Rating</strong></h3>

                <div class="divider"></div>

                <div class="row ml-1">

                  <!-- Rating-->
                  <ul class="rating mb-0">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li>

                      <p class="ml-3 dark-grey-text"><a>4 and more</a></p>

                    </li>

                  </ul>

                </div>

                <div class="row ml-1">

                  <!-- Rating-->
                  <ul class="rating mb-0">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                    <li>

                      <p class="ml-3 dark-grey-text"><a>3 - 3,99</a></p>

                    </li>

                  </ul>

                </div>

                <div class="row ml-1">

                  <!-- Rating-->
                  <ul class="rating">

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star blue-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                    <li><i class="fas fa-star grey-text"></i></li>

                    <li>

                      <p class="ml-3 dark-grey-text"><a>3.00 and less</a></p>

                    </li>

                  </ul>

                </div>

            </div>
            <!-- Filter by rating-->
          </div>
          <!-- Grid row-->
        </div>
      </div>
      <!-- Sidebar-->
    </div>

  {{-- </div> --}}
  <!-- Main Container-->
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
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
          });
          //$('#cartTotalQuantity').html('{{ \Cart::getTotalQuantity() }}');
        }
      });
    }
  </script>
@endsection