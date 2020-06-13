@extends('bimgo::layouts.ecommerce2.master')

@section('header')
  @include('bimgo::layouts.ecommerce2.header')
@endsection

@section('content')
<!-- Main Container -->
<div class="container mt-5 pt-3">

    <!-- Section: Product detail -->
    <section id="productDetails" class="pb-5">

      <!-- News card -->
      <div class="card mt-5 hoverable">

        <div class="row mt-5">

          <div class="col-lg-6">

            <!-- Carousel Wrapper -->
            <div class="row mx-2">
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
                <div class="carousel-inner text-center text-md-left" role="listbox">
                  
                  @foreach (json_decode($product->images) as $item)
                    @if ($loop->index == 1)
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
                  @foreach (json_decode($product->images) as $item)
                    <figure class="col-md-4">
                      <a href="{{ Voyager::image($item) }}" data-size="1600x1067">
                        <img src="{{ Voyager::image($item) }}" class="img-fluid">
                      </a>
                    </figure>
                  @endforeach
                  
                  {{--  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid">
                    </a>
                  </figure>
                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" class="img-fluid">
                    </a>
                  </figure>  --}}
                </div>
              </div>
            </div>
            <!-- Carousel Wrapper -->

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

              @if($product->product_details[0]->price_last > 0)
                <span class="red-text font-weight-bold">
                
                  <strong>{{ $product->product_details[0]->price }} Bs.</strong>
                </span>
                <span class="grey-text">
                  <small>
                    <s>{{ $product->product_details[0]->price_last }} Bs.</s>
                  </small>
                </span>
              @else 
                <span class="dark-grey-text font-weight-bold">
                  <strong>{{ $product->product_details[0]->price }} Bs.</strong>
                </span>
              @endif

            </h3>

            <!-- Accordion wrapper -->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
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

                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute,

                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                    moon

                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

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

                      Details

                      <i class="fas fa-angle-down rotate-icon"></i>

                    </h5>

                  </a>

                </div>

                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
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
            <section class="color">
              <div class="mt-3">
                <p class="grey-text">Caracteristicas :</p>
              
                  @foreach(json_decode($product->characteristics) as $item => $value)
                  <div class="col-md-4 @if($loop->index == 0) col-12 @endif">
                    <p class="badge badge-primary dark-grey-text text-capitalize"><strong>{{ $item }}: </strong>{{ $value }}</p>
                  </div>
               
                    @endforeach
               
              </div>
            </section>
            <!-- Add to Cart -->
            <section class="color">
              <div class="mt-3">
                <p class="grey-text">Elije una Opcion</p>
                <div class="row text-center text-md-left">
                  @foreach ($product->product_details as $item => $value)
                      <div class="col-md-4 @if($loop->index == 0) col-12 @endif">
                        <div class="form-group">
                          <input class="form-check-input" name="group100" type="radio" id="radio{{ $value->id }}" @if($loop->index == 0) checked="checked" @endif>
                          <label for="radio{{ $value->id }}" class="form-check-label dark-grey-text">{{ $value->title }}</label>
                        </div>
                      </div>
                  @endforeach
                  

                </div>
                <div class="row mt-3 mb-4">
                  <div class="col-md-12 text-center text-md-left text-md-right">
                    <a class="btn btn-primary btn-rounded" href="{{ url('cart') }}">
                      <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- Add to Cart -->

          </>

        </div>

      </div>

    </section>

    <!-- Product Reviews -->
    <div class="divider-new">

      <h3 class="h3-responsive font-weight-bold blue-text mx-3">Productos Relacionados</h3>

    </div>

    <!-- Section: Products v.5 -->
    <section id="products" class="pb-5 mt-4">
    {{--   <hr>
      <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
        <strong>Productos Relacionados</strong>
      </h4>
      <hr class="mb-5"> --}}
      <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Tambien te pueden interesar los siguientes productos</p>
      <div class="row">
        @foreach ($sugerencias as $item)
          <div class="col-md-3 mb-4">
            <!-- Card -->
            <div class="card card-ecommerce">
              <!-- Card image -->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
                  alt="">
                <a>
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
                <span class="badge badge-danger mb-2">bestseller</span>

                <!-- Rating -->
                <ul class="rating">
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star grey-text"></i>
                  </li>
                </ul>

                <!-- Card footer -->
                <div class="card-footer pb-0">

                  <div class="row mb-0">

                    <span class="float-left">

                      <strong>1439$</strong>

                    </span>

                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                        <i class="fas fa-shopping-cart ml-3"></i>

                      </a>

                    </span>

                  </div>

                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->
          </div>
        @endforeach
      </div>
      <!-- Carousel Wrapper -->
      {{-- <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel"> --}}
        <!-- Controls -->
        {{-- <div class="controls-top">
          <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
          </a>
          <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
            <i class="fas fa-chevron-right"></i>
          </a>
        </div> --}}
        <!-- Controls -->

        <!-- Indicators -->
        {{-- <ol class="carousel-indicators">
          <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
          <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
          <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
        </ol> --}}
        <!-- Indicators -->

        <!-- Slides -->
        {{-- <div class="carousel-inner" role="listbox"> --}}

          <!-- First slide -->
          {{-- <div class="carousel-item active">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Sony TV-675i</a>

                    </strong>

                  </h5>

                  <span class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star grey-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Samsung 786i</a>

                    </strong>

                  </h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star grey-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Canon 675-D</a>

                    </strong>

                  </h5>

                  <span class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div> --}}
          <!-- First slide -->

          <!-- Second slide -->
          {{-- <div class="carousel-item">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Samsung V54</a>

                    </strong>

                  </h5>

                  <span class="badge grey mb-2">best rated</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Dell V-964i</a>

                    </strong>

                  </h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">iPad PRO</a>

                    </strong>

                  </h5>

                  <span class="badge badge-danger mb-2">bestseller</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star grey-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div> --}}
          <!-- Second slide -->

          <!-- Third slide -->
          {{-- <div class="carousel-item">

            <div class="col-md-4 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Asus CT-567</a>

                    </strong>

                  </h5>

                  <span class="badge grey mb-2">best rated</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Dell 786i</a>

                    </strong>

                  </h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star grey-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

            <div class="col-md-4 clearfix d-none d-md-block mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="" class="dark-grey-text">Headphones</a>

                    </strong>

                  </h5>

                  <span class="badge badge-info mb-2">new</span>

                  <!-- Rating -->
                  <ul class="rating">

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                    <li>

                      <i class="fas fa-star blue-text"></i>

                    </li>

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left">

                        <strong>1439$</strong>

                      </span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>

          </div> --}}
          <!-- Third slide -->

        {{-- </div> --}}
        <!-- Slides -->

      {{-- </div> --}}
      <!-- Carousel Wrapper -->

    </section>
   <!-- : Products v.5 -->

  </div>
  <!-- Main Container -->
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce2.footer')
@endsection