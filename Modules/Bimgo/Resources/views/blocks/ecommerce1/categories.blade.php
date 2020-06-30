<section class="mt-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="font-weight-bold dark-grey-text"> {{ $block->title->value }}  </h4>
            <p> {{ $block->description->value }} </p>
        </div>
        {{--  {{ dd($data) }}  --}}
        @foreach ($data as $category)
            @if($category->block == "categories")
                <div class="col-lg-4 col-md-12 col-12">
                    <hr>
                    <h5 class="text-center font-weight-bold dark-grey-text"><strong>{{ $category->title }}</strong></h5>
                    <hr>
                    @foreach ($category->products->take(4) as $product)
                        @if ($product->published)
                            @if($product->block == "categories")
                                <div class="row mt-3 py-2 mb-3 hoverable align-items-center">
                                    <div class="col-6">
                                        @php
                                            $images = $product->images ? json_decode($product->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                                        @endphp
                                        <a href="{{ route('bg_product', $product->slug) }}">
                                            <img src="{{ Voyager::image($images) }}" class="img-fluid">
                                            @if($product->offer)
                                                <div class="texto-encima"><span class="badge badge-pill badge-info">En Oferta</span></div>
                                            @endif
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('bg_product', $product->slug) }}" class="pt-5"><strong>{{ $product->name }}</strong></a>
                                        <ul class="rating inline-ul">
                                            @switch($product->stars)
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
                                        @php
                                            $default = null;
                                        @endphp
                                        @foreach ($product->product_details as $value)
                                            @if ($value->default)
                                                @php
                                                    $default = $value;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($default->price_last > 0)
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                                <strong> {{ $default->price }} </strong> 
                                                <span class="grey-text"><small><s> {{ $default->price_last }} </s></small></span>
                                                {{ setting('ecommerce.monedas') }}
                                            </h6>
                                        @else
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong> {{ $default->price }} {{ setting('ecommerce.monedas') }} </strong></h6>
                                        @endif
                                    </div>
                                </div>     
                            @endif               
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</section>