@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('css')
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
  <style>
    .map-container{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
  </style>
@endsection
@section('content')
  <section class="dark-grey-text">
  	<div class="card">
      <div class="card-body">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-8">
            <!-- Pills navs -->
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1. Factura o Recibo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCheckoutAddons123" role="tab">2. Ubicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">3. Metodos de Pago</a>
              </li>
            </ul>

            <!-- Pills panels -->
            <div class="tab-content pt-4">
              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
                <!--Card content-->
                <form>
                  <!--Grid row-->
                  <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                      <img src="{{ Voyager::Image(Auth::user()->avatar) }}" alt="thumbnail" class="img-thumbnail z-depth-1" style="">
                      <input class="form-control" type="file" name="avatar" id="avatar" disabled>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="row">

                        <div class="col-md-12 mb-4">
                          <label for="firstName" class="">Nombre Completo</label>
                          <input type="text" id="firstName" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>

                        <div class="col-md-12 mb-4">
                          <label for="correo" class="">Correo</label>
                          <input type="text" id="correo" class="form-control" value="{{ Auth::user()->email }}" disabled>
                        </div>

                        <div class="col-md-12 mb-4">
                          <label for="created_at" class="">Fecha de Registro</label>
                          {{--  <input type="text" id="created_at" class="form-control" value="{{ Auth::user()->created_at }}">  --}}
                          <input type="text" id="created_at" class="form-control" value="{{ Auth::user()->created_at->diffForHumans(Carbon\Carbon::now()) }}" disabled>
                          
                        </div>

                      </div>
                    </div>
                  </div>
                  <!--Grid row-->
                  <div class="col-lg-12 col-md-12 mb-4 text-center">
                    <strong><u>Datos del Negocio o Empresa</u></strong>
                    <hr />
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6 mb-4">
                      @php
                          $images = $customer->banner ? Voyager::Image($customer->banner) : '../images/icons-bimgo/icon-512x512.png';
                      @endphp
                      <img src="{{ $images }}" alt="thumbnail" class="img-thumbnail z-depth-1" style="">
                      <input class="form-control" type="file" name="banner" id="banner" disabled>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <label for="country">Nombre Comercial</label>
                          <input type="text" id="name_bussiness" class="form-control" placeholder="Nombre Comercial" value="{{ $customer->name_bussiness }}" disabled>
                        </div>
                        <div class="col-md-12 mb-4">
                          <label for="state">NIT o Carnet</label>
                          <input type="text" id="nit_ci" class="form-control" placeholder="NIT o Carnet" value="{{ $customer->nit_ci }}" disabled>
                        </div>
                        <div class="col-md-12 mb-4">
                          <label for="state">Direcion</label>
                          <textarea class="form-control" disabled>{{ $customer->address }}</textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                          <a class="btn btn-sm btn-primary">Editar Datos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--/.Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="tabCheckoutAddons123" role="tabpanel">

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div id="map" class="z-depth-1-half map-container"></div>
                    <input type="hidden" id="latitud" name="latitud" />
                    <input type="hidden" id="longitud" name="longitud" />
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label for="address">Localidad o Cuidad</label>
                    <input class="form-control" type="text" id="address" name="address" disabled value="{{ $location->region->name }}" />
                    {{-- <select class="custom-select d-block w-100" id="location" required disabled>
                      <option value="" disabled>Elije una Localidad o Cuidad...</option>
                      <option>Trinidad Beni Bolivia</option>
                    </select> --}}
                  </div>
                  <div class="col-md-6 mb-4">
                    <label for="address">Tipo de Referencia</label>
                    <input class="form-control" type="text" id="type" name="type" disabled value="{{ $location->type }}" />
                    {{-- <select class="custom-select d-block w-100" id="type" required disabled>
                      <option value="" disabled>Elije una Referencia...</option>
                      <option>Casa</option>
                    </select> --}}
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="address">Direcion Literal</label>
                    <textarea class="form-control" disabled>{{ $location->address }}</textarea>
                  </div>
                  <div class="col-md-6 mb-4">
                    {{-- <div class="mb-1"> --}}
                      <input type="checkbox" class="form-check-input filled-in" id="chekboxRules2" @if($location->default) checked @endif disabled>
                      <label class="form-check-label" for="chekboxRules2">Ubicación por Defecto ?</label>
                    {{-- </div> --}}
                    
                  </div>
                  <div class="col-md-6 mb-4">
                    <a class="btn btn-sm btn-primary">Nueva Ubicacion</a>
                  </div>
                </div>
              </div>
              <!--/.Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">
                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                  @foreach ($pagos as $item)
                    <!-- Accordion card -->
                    <div class="card">
                      <!-- Card header -->
                      <div class="card-header" role="tab" id="heding{{ $item->id }}">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion{{ $item->id }}" href="#{{ $item->id }}"
                          aria-expanded="true" aria-controls="{{ $item->id }}">
                          <h5 class="mb-0">
                          {{ $item->name }} <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <!-- Card body -->
                      <div id="{{ $item->id }}" class="collapse show" role="tabpanel" aria-labelledby="heding{{ $item->id }}"
                        data-parent="#accordion{{ $item->id }}">
                        <div class="card-body">
                          <div class=row>
                            <div class="col-md-6">
                              <img src="{{ Voyager::Image($item->image) }}" alt="thumbnail" class="img-thumbnail z-depth-1" style="">
                            </div>
                            <div class="col-md-6">
                              <div class="col-md-12">
                                <input type="text" class="form-control" value="{{ $item->name }}" disabled />
                              </div>
                              <br />
                              <div class="col-md-12">
                                <textarea class="form-control" disabled>{{ $item->description }}</textarea>
                              </div>
                              <br />
                              <div class="col-md-12">
                                <a class="btn btn-sm btn-primary">Seleccionar este metodo de pago</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- Accordion card -->  
                  @endforeach
                  

                </div>
                <!-- Accordion wrapper -->

              </div>
              <!--/.Panel 3-->

            </div>
            <!-- Pills panels -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <div class="card z-depth-0 border border-light rounded-0">
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold"><u>Resumen del <a target="_blank" href="{{ route('bg_cart') }}">Carrito</a></u></h4>
                <hr>
                <dl class="row">
                  <dd class="col-sm-6">
                    Monto Total
                  </dd>
                  <dd class="col-sm-6">
                    {{ \Cart::getTotal() }} Bs.
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-6">
                    Cantidad Total
                  </dd>
                  <dd class="col-sm-6">
                    {{ \Cart::getTotalQuantity() }} Uni.
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-12">
                    <div class="md-form input-group mb-3">
                      <input type="text" class="form-control" placeholder="Tienes Cupon?" aria-label="Tienes Cupon?"
                        aria-describedby="Tienes Cupon?">
                      <div class="input-group-append">
                        <button class="btn btn-md btn-primary m-0 px-3" type="button" id="MaterialButton-addon2">OK</button>
                      </div>
                    </div>
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-6">
                    <label class="custom-control custom-radio custom-control-inline">
                      <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                      <span class="custom-control-label"> Aplicar Impuestos </span>
                    </label>
                  </dd>
                  <dd class="col-sm-6">
                    <label class="custom-control custom-radio custom-control-inline">
                      <input class="custom-control-input" type="radio" name="gender" value="option2">
                      <span class="custom-control-label"> Sin Impuestos</span>
                    </label>
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-md-6">
                    <u>Total a Pagar</u>
                  </dt>
                  <dt class="col-md-6">
                    {{ \Cart::getTotal() }} Bs.
                  </dt>
                  <dd class="col-md-12">
                    {{ NumerosEnLetras::convertir(\Cart::getTotal(), 'Bolivianos', true) }}
                  </dd>
                </dl>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-12">
                    <h4 class="mb-4 mt-1 h5 text-center font-weight-bold"><u>Que quieres hacer?</a></u></h4>
                  </dd>
                  <dd class="col-sm-6">
                    <a href="{{ url('/') }}" class="btn btn-sm btn-primary">Realizar Pago</a>
                  </dd>
                  <dd class="col-sm-6">
                    <a href="{{ url('/') }}" class="btn btn-sm btn-dark">Crear Proforma</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </div>
    </div>

  </section>
<hr>
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection

@section('js')
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
  <script>
      $(document).ready(function() {
          $('.mdb-select').material_select();
      

      //----- MAPA ----------
      var map;
      var marcador;
      map = L.map('map').fitWorld();
      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              maxZoom: 20,
              attribution: 'Power By; <a href="https://loginweb.dev/">Loginweb @2020</a>',
              id: 'mapbox.streets'
          }).addTo(map);
      function onLocationFound(e) 
      {
          //$('#latitud').val(e.latlng.lat);
          //$('#longitud').val(e.latlng.lng);
          marcador =  L.marker(L.latLng('{{ $location->latitud }}', '{{ $location->longitud }}'), {
                      draggable: true
                      }).addTo(map)
                      .bindPopup("Localización actual").openPopup()
                      .on('drag', function(e) {
                          //$('#latitud').val(e.latlng.lat);
                          //$('#longitud').val(e.latlng.lng);
                      });
          map.setView(L.latLng('{{ $location->latitud }}', '{{ $location->longitud }}'));
      }

      function onLocationError(e) {
          alert(e.message);
      }

      map.on('locationfound', onLocationFound);
      map.on('locationerror', onLocationError);

      map.locate();
      map.setZoom(13);
 
    });
  </script>
@endsection