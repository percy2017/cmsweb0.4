@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

@section('content')
    <section class="section-content padding-y bg">
        <div class="container">
            <!-- ============================ COMPONENT 1 ================================= -->
            <div class="card">
                <div class="row no-gutters">
                    <aside class="col-md-6">
                        <article class="gallery-wrap"> 
                            <div class="img-big-wrap">
                            <a href="#"><img src="{{ Voyager::image(json_decode($product->images)[0]) }}"></a>
                            </div> <!-- img-big-wrap.// -->
                            <div class="thumbs-wrap">
                                @foreach ($product->images != null ? json_decode($product->images) : [] as $item)
                                    <a href="#" class="item-thumb"> <img src="{{ Voyager::image($item) }}"></a>
                                @endforeach
                            </div> <!-- thumbs-wrap.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <main class="col-md-6 border-left">
                        <article class="content-body">
                            <h2 class="title">{{ $product->name }}</h2>
                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    @switch($product->stars)
                                        @case(1)
                                            <li style="width:80%" class="stars-active"> 
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            @break
                                        @case(2)
                                            <li style="width:80%" class="stars-active"> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            @break
                                        @case(3)
                                            <li style="width:80%" class="stars-active"> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            @break
                                        @case(4)
                                            <li style="width:80%" class="stars-active"> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </li>
                                            @break
                                        @case(5)
                                            <li style="width:80%" class="stars-active"> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                            </li>
                                            @break
                                    @endswitch
                                </ul>
                                <small class="label-rating text-success"><i class="fa fa-eye"></i> {{ $product->views }} Vistas</small>
                                {{--  <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>  --}}
                            </div> <!-- rating-wrap.// -->
                            <div class="mb-3">
                                <div id="price"></div>
                            </div> 
                            <p>{{ $product->description }}</p>
                            <dl class="row">
                                @foreach($product->characteristics != null ? json_decode($product->characteristics) : [] as $item => $value)
                                    <dt class="col-sm-3">{{ $item }}: </dt>
                                    <dd class="col-sm-9">{{ $value }}</dd>
                                @endforeach
                            </dl>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md flex-grow-0">
                                    <label>Cantidad</label>
                                    <div class="input-group mb-3 input-spinner">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-light" type="button" id="button-plus"> + </button>
                                        </div>
                                        <input type="text" class="form-control" value="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
                                        </div>
                                    </div>
                                </div> <!-- col.// -->
                                <div class="form-group col-md">
                                    <label>Elije tu {{ $product->product_details[0]->{'type'} }}</label>
                                    <div class="mt-1">
                                        @foreach ($product->product_details as $item => $value)
                                            <label class="custom-control custom-radio custom-control-inline color">
                                                <input type="radio" id="{{ $value->id }}" name="select_size" class="custom-control-input">
                                                <div class="custom-control-label">{{ $value->title }}</div>
                                            </label>
                                        @endforeach
                                    </div>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <a href="#" class="btn  btn-primary"> Comprar Ahora </a>
                            <a href="#" onclick="addcart('{{ route('bg_ajax_addcart', $product->slug) }}')" class="btn  btn-outline-primary"> <span class="text">Agregar Carrito</span> <i class="fas fa-shopping-cart"></i>  </a>
                        </article> <!-- product-info-aside .// -->
                    </main> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
            <!-- ============================ COMPONENT 1 END .// ================================= -->
            <br>
            <!-- ============================ COMPONENT 4  ================================= -->
            <article class="card">
                <div class="card-body">
                  {!! htmlspecialchars_decode($product->description_long) !!}
                </div> <!-- card-body.// -->
            </article> <!-- card.// -->
            <!-- ============================ COMPONENT 4  .//END ================================= -->
            <br>
            @comments(['model' => $product])

            <br>

            <h4>Productos Relacionados</h4>
            <!-- ============== COMPONENT SLIDER ITEMS OWL  ============= -->
            <div class="slider-items-owl owl-carousel owl-theme">
                @foreach ($sugerencias as $item)
                    @php
                        $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                    @endphp
                    <div class="item-slide">
                        <figure class="card card-product-grid">
                            <div class="img-wrap"> 
                                <span class="badge badge-danger"> {{ json_decode($item->tags)[0] }} </span>
                                <img src="{{ Voyager::image($images) }}"> 
                            </div>
                            <figcaption class="info-wrap text-center">
                                <h6 class="title text-truncate"><a href="{{ route('bg_product3', $item->slug) }}">{{ $item->name }}</a></h6>
                            </figcaption>
                        </figure> <!-- card // -->
                    </div>
                @endforeach
            </div>
            <!-- ============== COMPONENT SLIDER ITEMS OWL .end // ============= -->
        </div>
    </section>
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce3.footer')
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
            console.log(urli);
            $(id).click(function() {
            $.ajax({
                    type: "get",
                    url: urli,
                    success: function (response) {
                        if(response.price_last > 0)
                        {
                            $('#price').html('<var class="price h4">'+response.price+' Bs.</var><span class="text-muted"><s> '+response.price_last+' Bs.</s></span>');
                        }else{
                            $('#price').html('<var class="price h4">'+response.price+' Bs.</var>');
                        }
                    }
                });
            });
        });  
        $( "blockquote" ).addClass( "blockquote" );
    </script>
@show