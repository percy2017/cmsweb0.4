<div class="container mt-5">
  <section class="dark-grey-text text-center">
    <h3 class="font-weight-bold mb-4 pb-2">Los mas Vendidos</h3>
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      <div class="controls-top">
        <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
          <i class="fas fa-chevron-left"></i>
        </a>
        <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
          <i class="fas fa-chevron-right"></i>
        </a>
      </div>
      <ol class="carousel-indicators mb-n3">
        <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        @foreach ($data as $item)
            <div class="carousel-item @if($loop->index == 0) active @endif">
                @foreach ($item->products as $item2)
                    @php
                        $images = $item2->images ? json_decode($item2->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                    @endphp
                    <div class="col-md-4 mb-2">
                        <!-- Card -->
                        <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="{{ Voyager::Image($images) }}" class="card-img-top"
                            alt="sample photo">
                            <a href="{{ $item2->slug }}">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Category & Title -->
                            <a class="text-muted">
                            <h5>{{ $item->title }}</h5>
                            </a>
                            <h4 class="card-title my-4">
                            <strong>
                                <a href="{{ $item2->slug }}">{{ $item2->name }}</a>
                            </strong>
                            </h4>
                            <!-- Description -->
                            <p class="card-text">{{ $item2->description }}</p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                @php
                                    $default = null;
                                @endphp
                                @foreach ($item2->product_details as $value)
                                    @if ($value->default)
                                        @php
                                            $default = $value;
                                        @endphp
                                    @endif
                                @endforeach
                                @if($default->price_last > 0)
                                    <h5 class="mb-0 pb-0 mt-1 font-weight-bold"><span
                                        class="red-text"><strong>{{ $default->price }}</strong></span>
                                        <span class="grey-text"><small><s>{{ $default->price_last }}</s></small></span>
                                        {{ setting('ecommerce.monedas') }}
                                    </h5>
                                @else
                                    <span class="float-left">{{ $default->price }} {{ setting('ecommerce.monedas') }}</span>
                                @endif
                                <span class="float-right">
                                    {{-- <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                                    <i class="fas fa-eye ml-3"></i>
                                    </a> --}}
                                    {{-- <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                    <i class="fas fa-heart ml-3"></i>
                                    </a> --}}
                                    <a onclick="addcart('{{ route('bg_ajax_addcart', [$item2->slug, $default->id]) }}')" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i
                                                class="fas fa-shopping-cart ml-3"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                        </div>
                        <!-- Card -->
                    </div>
                    @if($loop->index == 2)
                        @break
                    @endif
                @endforeach 
            </div>
            
        @endforeach
      </div>
    </div>
  </section>
</div>