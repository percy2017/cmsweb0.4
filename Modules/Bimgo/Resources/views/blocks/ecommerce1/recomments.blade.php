<section class="mt-3">
    <div class="row">
        <div class="col-12">
            <h4 class="font-weight-bold dark-grey-text"> {{ $block->title->value }} </h4>
            <p> {{ $block->description->value }} </p>
            <hr>
            <div class="row">
                @foreach ($data as $item)
                    {{-- @if($item->block == "recomments") --}}
                        @php
                            $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                        @endphp
                        <div class="col-md-3 mt-3">
                            <div class="card card-ecommerce">
                                <div class="view overlay">
                                    <img src="{{ Voyager::image($images) }}" class="img-fluid" alt="{{ $item->name }}">
                                    @if($item->offer)
                                        <div class="texto-encima"><span class="badge badge-pill badge-info">En Oferta</span></div>
                                    @endif
                                    <a href="{{ route('bg_product', $item->slug) }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1"><strong><a href="{{ route('bg_product', $item->slug) }}" class="dark-grey-text">{{ $item->name }}</a></strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">{{ json_decode($item->tags)[0] }}</span>
                                    <ul class="rating">
                                        @switch($item->stars)
                                            @case(1)
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 1]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 2]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 3]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 4]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 5]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                @break
                                            @case(2)
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 1]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 2]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 3]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 4]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 5]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                @break
                                            @case(3)
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 1]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 2]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 3]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 4]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 5]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                @break
                                            @case(4)
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 1]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 2]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 3]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 4]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 5]) }}')"><i class="fas fa-star grey-text"></i></a></li>
                                                @break
                                            @case(5)
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 1]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 2]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 3]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 4]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                <li><a onclick="stars('{{ route('product_stars', [$item->id, 5]) }}')"><i class="fas fa-star blue-text"></i></a></li>
                                                @break
                                            @default
                                                
                                        @endswitch
                                    </ul>
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
                                                    class="red-text"><strong>{{ $default->price }}</strong></span>
                                                    <span class="grey-text"><small><s>{{ $default->price_last }}</s></small></span>
                                                    {{ setting('ecommerce.monedas') }}
                                                </h5>
                                            @else 
                                                <span class="float-left"><strong>{{ $default->price }} {{ setting('ecommerce.monedas') }}</strong></span>
                                            @endif
                                            <span class="float-right">
                                                <a onclick="addcart('{{ route('bg_ajax_addcart', [$item->slug, $default->id]) }}')" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i
                                                    class="fas fa-shopping-cart ml-3"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
</section>
