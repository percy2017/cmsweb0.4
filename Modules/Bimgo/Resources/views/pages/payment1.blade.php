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
  <section class="dark-grey-text mt-3 mb-3">
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
                {{-- <form> --}}
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
                  <form action="{{ route('bg_ajax_update_bussiness') }}" id="form_bussiness" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row">
                      
                      <div class="col-md-6 mb-4">
                        @php
                            $images = $customer->banner ? Voyager::Image($customer->banner) : '../images/icons-bimgo/icon-512x512.png';
                        @endphp
                        <img src="{{ $images }}" alt="thumbnail" class="img-thumbnail z-depth-1">
                        <input class="form-control" type="file" name="banner" id="banner">
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="row">
                          
                          <div class="col-md-12 mb-4">
                            <label for="country">Nombre Comercial (opcional)</label>
                            <input type="text" id="name_bussiness" name="name_bussiness" class="form-control" placeholder="Nombre Comercial" value="{{ $customer->name_bussiness }}">
                          </div>
                          <div class="col-md-12 mb-4">
                            <label for="state">NIT o Carnet (opcional)</label>
                            <input type="text" id="nit_ci" name="nit_ci" class="form-control" placeholder="NIT o Carnet" value="{{ $customer->nit_ci }}">
                          </div>
                          <div class="col-md-12 mb-4">
                            <label for="state">Direcion (opcional)</label>
                            <textarea class="form-control" name="address">{{ $customer->address }}</textarea>
                          </div>
                          <div class="col-md-12 mb-4">
                            <button type="submit" id="button_submit" class="btn btn-sm btn-primary">Actualizar Datos</button>
                          </div>
                          
                        </div>
                      </div>
                    
                    </div>
                  </form>
                {{-- </form> --}}
              </div>
              <!--/.Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="tabCheckoutAddons123" role="tabpanel">
                @if($location)
                  @php
                    $lat =  $location->latitud;
                    $lng =  $location->longitud;
                  @endphp
                  <div class="row">
                    <div class="col-md-12 mb-4">
                      @foreach ($location2 as $item)
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="{{ $item->id }}" name="inlineDefaultRadiosExample" @if($item->default) checked @endif>
                            <label class="custom-control-label" for="{{ $item->id }}">{{ $item->type }} - {{ $item->address }}</label>
                          </div>
                      @endforeach
                    </div>
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
                    </div>
                    <div class="col-md-6 mb-4">
                      <label for="address">Tipo de Referencia</label>
                      <input class="form-control" type="text" id="type" name="type" disabled value="{{ $location->type }}" />
                    </div>
                    <div class="col-md-12 mb-4">
                      <label for="address">Direcion Literal</label>
                      <textarea class="form-control" disabled>{{ $location->address }}</textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <input type="checkbox" class="form-check-input filled-in" id="chekboxRules2" @if($location->default) checked @endif disabled>
                        <label class="form-check-label" for="chekboxRules2">Ubicación por Defecto ?</label>
                    </div>
                    <div class="col-md-6 mb-4">
                      <a id="button_modal" data-toggle="modal" data-target="#centralModalSm" class="btn btn-sm btn-primary">Nueva Ubicacion</a>
                    </div>
                  </div>
                @else
                  @php
                    $lat =  0;
                    $lgt =  0;
                  @endphp
                    <h2 class="text-center">
                      No tienes Ubicaciones
                      <br>
                      <a id=button_modal class="btn btn-sm btn-success" data-toggle="modal" data-target="#centralModalSm">Crear Nueva</a>
                    </h2>
                @endif
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
                                <a data-dismiss="modal" id="" class="btn btn-sm btn-primary">Seleccionar este metodo de pago</a>
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
{{-- <hr> --}}

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm" id="button_modal">
  Launch demo modal
</button> --}}

<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Nueva Ubicacion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('bg_save_location') }}" method="post">
      {{ csrf_field() }}
        <div class="modal-body">
            <div class="row">
              
                <div class="col-md-12">
                  <div id="map_modal" class="z-depth-1-half map-container"></div>
                  <input type="hidden" id="lat" name="lat" />
                  <input type="hidden" id="lng" name="lng" />
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Regions</label>
                    <select name="regions" class="browser-default custom-select">
                      @foreach ($regions as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Referencia</label>
                    <select name="references" class="browser-default custom-select">
                      @foreach ($references as $item)
                          <option value="{{ $item }}">{{ $item }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Direcion</label>
                    <textarea class="form-control" name="address"></textarea>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="checkbox" class="form-check-input filled-in" id="chekboxRules2" name="default">
                    <label class="form-check-label" for="chekboxRules2">Ubicación por Defecto ?</label>
                  </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <button id="button_modal" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection

@section('js')
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
  <script>
      $('document').ready(function() {
        $('.mdb-select').material_select();
        var map;
        var marcador;
        map = L.map('map').fitWorld();
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 20,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery ©️ <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox.streets'
            }).addTo(map);
        function onLocationFound(e) 
        {
            var lat = '{{ $lat }}';
            var lng = '{{ $lng }}';
            $('#latitud').val(lat);
            $('#longitud').val(lng);
            marcador =  L.marker(L.latLng(lat, lng), {
                        draggable: true
                        }).addTo(map)
                        .bindPopup("Localización actual").openPopup()
                        .on('drag', function(e) {
                            $('#latitud').val(e.latlng.lat);
                            $('#longitud').val(e.latlng.lng);
                        });
            map.setView(L.latLng(lat, lng));
        }

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);

        map.locate();
        map.setZoom(13);
 
    });

    $("#button_modal").click(function() {
        console.log('click en modal');
        var map;
        var marcador;
        map = L.map('map_modal').fitWorld();
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 20,
                attribution: 'Power By; <a href="https://loginweb.dev/">Loginweb @2020</a>',
                id: 'mapbox.streets'
            }).addTo(map);
        function onLocationFound(e) 
        {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            $('#lat').val(lat);
            $('#lng').val(lng);
            marcador =  L.marker(L.latLng(lat, lng), {
                        draggable: true
                        }).addTo(map)
                        .bindPopup("Localización actual").openPopup()
                        .on('drag', function(e) {
                            $('#lat').val(e.latlng.lat);
                            $('#lng').val(e.latlng.lng);
                        });
            map.setView(L.latLng(lat, lng));
        }

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);

        map.locate();
        map.setZoom(13);
    });
    //var frm = new FormData($('#form_bussiness')[0])
    $("#button_submit").click(function() {
      event.preventDefault();
      Swal.fire({
      title: 'Actualizando',
      text: "Estas segur@ de actualizar los datos?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      }).then((result) => {
          if (result.value) {
            $.ajax({
                type: 'post',
                url: '{{ route('bg_ajax_update_bussiness') }}',
                data: new FormData($('#form_bussiness')[0]),
                contentType : false,
                processData : false,
                success: function (data) {
                  console.log(data);
                  location.reload();
                },
                error: function (data) {
                    //console.log(data);
                },
            });
          }else{
            console.log('accion declinada');
          }
      })
    });
  </script>
@endsection