<section class="section-content padding-y bg">
    
	<div class="container">
        <div class="card card-body">
            {{--  <header class="section-heading">  --}}
                <h4 class="section-title">{{ $block->title->value }}</h4>
            {{--  </header>  --}}
            <hr />
            @foreach ($data as $category)
                 <div class="row">
                    @foreach ($category->products->take(3) as $product)
                        @php
                            $default = null;
                            $images = $product->images ? json_decode($product->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                        @endphp
                        @foreach ($product->product_details as $value)
                            @if ($value->default)
                                @php
                                    $default = $value;
                                @endphp
                            @endif
                        @endforeach
                        @if ($product->published)
                            <div class="col-md-4">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="{{ Voyager::image($images) }}" class="img-md"></div>
                                    <figcaption class="info align-self-center">
                                        <a href="#" class="title">{{ $product->name }}</a>
                                        <small>{{ $category->title }}</small>
                                        @if($default->price_last > 0)
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                                <strong> {{ $default->price }} </strong> 
                                                <span class="grey-text"><small><s> {{ $default->price_last }} </s></small></span>
                                                {{ setting('ecommerce.monedas') }}
                                            </h6>
                                        @else
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong> {{ $default->price }} {{ setting('ecommerce.monedas') }} </strong></h6>
                                        @endif
                                        <a href="#" class="btn btn-outline-primary btn-sm"> Agregar al Carrito 
                                            <i class="fa fa-shopping-cart"></i> 
                                        </a>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        @endif
                    @endforeach
                </div> <!-- row.// -->
             @endforeach
        </div> <!-- card.// -->
    </div>
</div>