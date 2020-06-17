@extends('bimgo::layouts.ecommerce2.master')

@section('header')
  @include('bimgo::layouts.ecommerce2.header')
@endsection

@section('content')
<!-- Main Container -->
<div class="container mt-5 pt-3">
    <section id="productDetails" class="pb-5">
      <div class="card mt-5 hoverable">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row mx-2">
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
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
          </div>

          <div class="col-lg-5 mr-3 text-center text-md-left">
            <h2
              class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
              <strong>{{  $product->name  }}</strong>
            </h2>
            @php
                $array = ['dark', 'danger', 'success', 'primary', 'warning'];
            @endphp
            @foreach (json_decode($product->tags) as $item)
              <span class="badge badge-{{ $array[$loop->index] }} product mb-4 ml-xl-0 ml-4">{{ $item }}</span>
            @endforeach
            <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
              <div id="price"></div>
            </h3>

            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0">
                      Descripción
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    {{ $product->description }}
                  </div>

                </div>

              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                      Caracteristicas
                      <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    @foreach($product->characteristics != null ? json_decode($product->characteristics) : [] as $item => $value)
                      <p class="ml-xl-0 ml-4"><strong>{{ $item }}: </strong>{{ $value }}</p>
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree3">

                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                    aria-expanded="false" aria-controls="collapseThree3">

                    <h5 class="mb-0">

                      Shipping

                      <i class="fas fa-angle-down rotate-icon"></i>

                    </h5>

                  </a>

                </div>

                <!-- Card body -->
                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                  data-parent="#accordionEx">

                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                    moon
                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <!-- Accordion card -->
            </div>
            <!-- Accordion wrapper -->
            
            <!-- Add to Cart -->
            <section class="color">
              <div class="mt-5">
                <p class="grey-text">Elije tu {{ $product->product_details[0]->{'type'} }}</p>
                <div class="row text-center text-md-left">
                  @foreach ($product->product_details as $item => $value)
                    <div class="col-md-4 @if($loop->index == 0) col-12 @endif">
                      <div class="form-group">
                        <input class="form-check-input" name="group100" type="radio" id="{{ $value->id }}">
                        <label for="{{ $value->id }}" class="form-check-label dark-grey-text">{{ $value->title }}</label>
                      </div>
                    </div>
                  @endforeach
                </div>
                <div class="row mt-3 mb-4">
                  <div class="col-md-12 text-center text-md-left text-md-right">
                    <a class="btn btn-primary btn-rounded" onclick="addcart('{{ route('bg_ajax_addcart', $product->slug) }}')" href="#">
                      <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agregar al Carrito</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- Add to Cart -->

          </>

        </div>

      </div>

    </section>

    <div class="card mb-5">
      <div class="card-body">
        <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
          <strong>Descripción del Producto</strong>
        </h4>
        <hr class="mb-5">
        {!! htmlspecialchars_decode($product->description_long) !!}
      </div>
    </div>
    
    @comments(['model' => $product])
    <!-- Product Reviews -->
    <div class="divider-new">
      <h3 class="h3-responsive font-weight-bold blue-text mx-3">Productos Relacionados</h3>
    </div>
    <section id="products" class="pb-5 mt-4">
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
                  <strong><a href="{{ route('bg_product', $item->slug) }}" class="dark-grey-text">{{ $item->name }}</a></strong>
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
                <div class="card-footer pb-0">
                  <div class="row mb-0">
                    {{--  <span class="float-left">
                      <strong>1439$</strong>
                    </span>  --}}
                    @if($item->product_details[0]->price_last > 0)
                    <h5 class="mb-0 pb-0 mt-1 font-weight-bold"><span
                        class="red-text"><strong>{{ $item->product_details[0]->price }} Bs.</strong></span>
                        <span class="grey-text"><small><s>{{ $item->product_details[0]->price_last }} Bs.</s></small></span>
                    </h5>
                  @else 
                    <span class="float-left">
                      <strong>{{ $item->product_details[0]->price }} Bs.</strong>
                    </span>
                  @endif
                    <span class="float-right">
                      <a class="#" onclick="addcart('{{ route('bg_ajax_addcart', $product->slug) }}')" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito">
                        <i class="fas fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce2.footer')
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

    $('.color input[type=radio]').each(function (idx, elt) {
    let id = '#'+elt.id; 
    var urli = '{{ route('bg_ajax_product_details', ':id') }}';
    urli = urli.replace(':id', elt.id);
    //console.log(urli);
    $(id).click(function() {
      $.ajax({
            type: "get",
            url: urli,
            success: function (response) {
              if(response.price_last > 0)
              {
                $('#price').html('<span class="red-text font-weight-bold">'+response.price+' Bs.</strong></span> <span class="grey-text"><small><s>'+response.price_last+' Bs.</s></small></span>');
              }else{
                $('#price').html('<span class="dark-grey-text font-weight-bold">'+response.price+' Bs.</strong></span>');
              }
            }
        });
      });
    });  
    
    $( "blockquote" ).addClass( "blockquote" );
  </script>
@show