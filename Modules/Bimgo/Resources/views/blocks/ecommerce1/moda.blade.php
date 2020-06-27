  <section class="dark-grey-text text-left">
    <h4 class="font-weight-bold mt-3">Productos de Moda o Tendencias <small><a href="#">Ve Mas</a> <i class="fas fa-location-arrow"></i></small></h4>
    <hr />
    <div class="row">
        @foreach ($data as $item)
            @php
                $images = $item->images_large ? json_decode($item->images_large)[0] : '../images/icons-bimgo/icon-512x512.png';
            @endphp
            <div class="col-lg-3 col-md-6 mb-3">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img src="{{ Voyager::image($images) }}" class="card-img-top"
                    alt="sample photo">
                    <a href="{{ route('bg_product', $item->slug) }}">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body card-body-cascade text-center pb-3">
                    <!-- Title -->
                    <h5 class="card-title mb-1">
                    <strong>
                        <a href="{{ route('bg_product', $item->slug) }}">{{ $item->name }}</a>
                    </strong>
                    </h5>
                    <!--Rating-->
                    <ul class="rating mb-1 pb-2">
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
                    <!-- Description -->
                    <p class="card-text">{{ $item->description }}
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                    <span class="float-left font-weight-bold">
                        {{-- <strong>49$</strong> --}}
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
                            <strong>{{ $default->price }} {{ setting('ecommerce.monedas') }}</strong>
                        @else
                            <strong> {{ $default->price }} </strong> <small><s> {{ $default->price_last }} </s></small> {{ setting('ecommerce.monedas') }}
                        @endif
                    </span>
                    <span class="float-right">
                        <a onclick="addcart('{{ route('bg_ajax_addcart', [$item->slug, $default->id]) }}')" class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Agreagar a carrito">
                            <i class="fas fa-shopping-cart grey-text ml-3"></i>
                        </a>
                        {{-- <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                        <i class="fas fa-heart grey-text ml-3"></i> --}}
                        </a>
                    </span>
                    </div>
                </div>
                <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
        @endforeach
    </div>
  </section>