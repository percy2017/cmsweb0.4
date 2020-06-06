<section>
    <div class="row">
        <div class="col-12">
            <div class="row">
            {{--  {{ dd($data) }}  --}}
                @foreach ($data as $item)
                    @php
                        $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                    @endphp
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card card-ecommerce">
                            <div class="view overlay">
                                <img src="{{ Voyager::image($images) }}"
                                    class="img-fluid" alt="">
                                <a href="{{ url('product/'.$item->slug) }}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-1"><strong><a href="{{ url('product-details') }}" class="dark-grey-text">{{ $item->name }}</a></strong>
                                </h5>
                                <span class="badge badge-danger mb-2">{{ json_decode($item->tags)[0] }}</span>
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
                                        @if($item->product_details[0]->price_last > 0)
                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold"><span
                                                class="red-text"><strong>{{ $item->product_details[0]->price }} Bs.</strong></span>
                                                <span class="grey-text"><small><s>{{ $item->product_details[0]->price_last }} Bs.</s></small></span>
                                            </h5>
                                        @else 
                                            <span class="float-left"><strong>{{ $item->product_details[0]->price }} Bs.</strong></span>
                                        @endif
                                        
                                        <span class="float-right">
                                            <a class="" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i
                                                class="fas fa-shopping-cart ml-3"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
