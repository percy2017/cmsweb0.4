@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
    <section id="productDetails" class="mb-3 mt-3">
      <div class="card hoverable">
        <div class="row mt-3">
          <div class="col-lg-6">

            <div class="row mx-2">
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-1 pb-1" data-ride="carousel">
                <div class="carousel-inner text-center text-md-left" role="listbox">
                  @foreach ($product->images != null ? json_decode($product->images) : [] as $item)
                    @if ($loop->index == 0)
                      <div class="carousel-item active">
                        <img src="{{ Voyager::image($item) }}" alt="Second slide" class="img-fluid">
                      </div>
                    @else
                      <div class="carousel-item">
                        <img src="{{ Voyager::image($item) }}" alt="Second slide" class="img-fluid">
                      </div>
                    @endif
                    
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            
            <div class="row mb-4">
              <div class="col-md-12">
                <div id="mdb-lightbox-ui"></div>
                <div class="mdb-lightbox no-margin">
                  @foreach ($product->images != null ? json_decode($product->images) : [] as $item)
                    <figure class="col-md-4">
                      <a href="{{ Voyager::image($item) }}" data-size="1600x1067">
                        <img src="{{ Voyager::image($item) }}" class="img-fluid">                  
                      </a>
                    </figure>
                  @endforeach
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-5 mr-3 text-center text-md-left">
            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
              <strong>{{ $product->name }} </strong>
            </h2>
            @php
                $array = ['dark', 'danger', 'success', 'primary', 'warning'];
            @endphp
            @foreach (json_decode($product->tags) as $item)
                <span class="badge badge-{{ $array[$loop->index] }} product mb-4 ml-xl-0 ml-4">{{ $item }}</span>
            @endforeach
            <h3 class="h3-responsive text-center text-md-left mb-3 ml-xl-0 ml-4">
              <div id="price"></div>
              @if($product->offer)
                <small class="badge badge-pill badge-info">En Oferta</small>
              @endif
              @if($product->shortage)
                <small class="badge badge-pill badge-primary">Pocas Unidades</small>
              @endif
            </h3>
            
            <p class="ml-xl-0 ml-4">{{ $product->description }}</p>
            @foreach($product->characteristics != null ? json_decode($product->characteristics) : [] as $item => $value)
                <p class="ml-xl-0 ml-4"><strong>{{ $item }}: </strong>{{ $value }}</p>
            @endforeach
            
            <section class="color">
              <div class="mt-3">
                <p class="grey-text">Elije tu {{ $product->product_details[0]->{'type'} }}</p>
                <div class="row text-center text-md-left">
                  @foreach ($product->product_details as $item => $value)
                    <div class="col-md-4 @if($loop->index == 0) col-12 @endif">
                      <div class="form-group">
                        <input class="form-check-input" name="group100" type="radio" id="{{ $value->id }}" @if($value->default) checked @endif>
                        <label for="{{ $value->id }}" class="form-check-label dark-grey-text">{{ $value->title }}</label>
                      </div>
                    </div>
                  @endforeach
                </div>
                
                {{-- <p class="ml-xl-0 ml-4"> --}}
                  <label>Envios a</label>
                  <select name="regions" id="regions_select" class="browser-default custom-select">
                    <option value="" disabled><smal>Elije tu Region o Localidad</smal></option>
                    @foreach ($regions as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                  <div id="price_delivery"></div>
                {{-- </p> --}}

                <div class="row mt-3 mb-4">
                  <div class="col-md-12 text-center text-md-left text-md-right">
                    <a class="btn btn-primary btn-rounded" onclick="addcart('{{ route('bg_ajax_addcart', [$product->slug, ':detail']) }}')">
                      <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agreagar al Carrito</a>
                  </div>
                </div>

              </div>
            </section>
            
          </div>
          
        </div>
      </div>
      
    </section>

    <div class="card mb-5">
      <div class="card-body">
        {{-- <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
          <strong>Descripción del Producto</strong>
        </h4>
        <hr class="mb-5"> --}}
        {!! htmlspecialchars_decode($product->description_long) !!}
        
      </div>
    </div>
    
    @comments(['model' => $product]).

    <section id="products" class="pb-5 mt-4">
      <hr>
      <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
        <strong>Productos Relacionados</strong>
      </h4>
      <hr class="mb-5">
      <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Tambien te pueden interesar los siguientes productos</p>
      <div class="row">
        @foreach ($sugerencias as $item)
          @php
            $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
          @endphp
          <div class="col-md-3 mb-4">
            <!-- Card -->
            <div class="card card-ecommerce">
              <!-- Card image -->
              <div class="view overlay">
                <img src="{{ Voyager::image($images) }}" class="img-fluid"
                  alt="">
                <a href="{{ route('bg_product', $item->slug) }}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body">
                <!-- Category & Title -->
                <h5 class="card-title mb-1">
                  <strong><a href="" class="dark-grey-text">{{ $item->name }}</a></strong>
                </h5>
                <span class="badge badge-danger mb-2">{{ json_decode($item->tags)[0] }}</span>
                <!-- Rating -->
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

                <!-- Card footer -->
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
                          class="red-text"><strong>{{ $default->price }} Bs.</strong></span>
                          <span class="grey-text"><small><s>{{ $default->price_last }} Bs.</s></small></span>
                      </h5>
                    @else 
                      <span class="float-left">
                        <strong>{{ $default->price }} Bs.</strong>
                      </span>
                    @endif
                    {{-- <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <i class="fas fa-shopping-cart ml-3"></i>
                      </a>
                    </span> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection

@section('js')
  <script>
    $('document').ready(function(){

      $('.color input[type=radio]').each(function (idx, elt) {
          if (elt.checked){
            let id = '#'+elt.id; 
            var urli = '{{ route('bg_ajax_product_details', ':id') }}';
            urli = urli.replace(':id', elt.id);
            $.ajax({
              type: "get",
              url: urli,
              success: function (response) {
                if(response.price_last > 0)
                {
                  $('#price').html('<span class="red-text font-weight-bold">'+response.price+'</strong></span> <span class="grey-text"><small><s>'+response.price_last+'</s></small></span> '+' {{ setting('ecommerce.monedas') }}');
                }else{
                  $('#price').html('<span class="dark-grey-text font-weight-bold">'+response.price+'</strong></span> '+' {{ setting('ecommerce.monedas') }}');
                }
              }
            });
          }
      });

      let ids = $( "#regions_select option:checked" ).val();
      let urli = '{{ route('bg_ajax_region_get', ':id') }}';
      urli = urli.replace(':id', ids);
      let price = '{{ setting('ecommerce.monedas') }}';
      $.ajax({
        type: "get",
        url: urli,
        success: function (response) {
          $('#price_delivery').html('<strong>Costo de Envio: '+response.price_shipping+'  '+price+' / Entrega en '+response.day_delivery+' y '+response.hour_delivery+'</strong>');
        }
      }); 

      $.ajax({
        type: "get",
        url: "{{ route('product_view', $product->id) }}",
        success: function (response) {  
        }
      });

    });
    function addcart(urli){
      var urli;
      $('.color input[type=radio]').each(function (idx, elt) {
        if (elt.checked){
          urli = urli.replace(':detail', elt.id);
        }
      });
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

    $('.color input[type=radio]').each(function (idx, elt) {
      let id = '#'+elt.id; 
      var urli = '{{ route('bg_ajax_product_details', ':id') }}';
      urli = urli.replace(':id', elt.id);
      $(id).click(function() {
        $.ajax({
          type: "get",
          url: urli,
          success: function (response) {
            if(response.price_last > 0)
            {
              $('#price').html('<span class="red-text font-weight-bold">'+response.price+'</strong></span> <span class="grey-text"><small><s>'+response.price_last+'</s></small></span> '+'{{ setting('ecommerce.monedas') }}');
            }else{
              $('#price').html('<span class="dark-grey-text font-weight-bold">'+response.price+'</strong></span>'+'{{ setting('ecommerce.monedas') }}');
            }
          }
        });
      });
    });  
    
    $( "blockquote" ).addClass( "blockquote" );

    $('#regions_select').change(function(idx){
       //console.log(idx);
      let urli = '{{ route('bg_ajax_region_get', ':id') }}';
      urli = urli.replace(':id', idx.target.value);
      let price = '{{ setting('ecommerce.monedas') }}';
      $.ajax({
        type: "get",
        url: urli,
        success: function (response) {
          $('#price_delivery').html('<strong>Costo de Envio: '+response.price_shipping+' '+price+' / Entrega en '+response.day_delivery+' y '+response.hour_delivery+'</strong>');
        }
      });      
    });

    
  </script>
@show