@extends('bimgo::layouts.ecommerce3.master')

@section('css')
@show

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
    <div class="container">
    <!-- ============================ ITEM DETAIL ======================== -->
        <div class="row">
            <aside class="col-md-6">
                <div class="card">
                    <article class="gallery-wrap"> 
                        <div class="img-big-wrap">
                            <div> 
                                <a href="#"><img src="{{ Voyager::image(json_decode($product->images)[0]) }}"></a>
                            </div>
                        </div> <!-- slider-product.// -->
                        <div class="thumbs-wrap">
                            @foreach ($product->images != null ? json_decode($product->images) : [] as $item)
                                <a href="#" class="item-thumb"> <img src="{{ Voyager::image($item) }}"></a>
                            @endforeach
                    </article> <!-- gallery-wrap .end// -->
                </div> <!-- card.// -->
            </aside>
            <main class="col-md-6">
                <article class="product-info-aside">

                    <h2 class="title mt-3">{{ $product->name }} </h2>

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
                        <small class="label-rating text-muted"><i class="fa fa-eye"></i> {{ $product->views }} Vistas</small>
                        {{--  <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>  --}}
                    </div> <!-- rating-wrap.// --> 

                    <div class="mb-3"> 
                        <div id="price"></div>
                    </div> <!-- price-detail-wrap .// -->

                    <p>{{ $product->description }} </p>

                    <dl class="row">
                        @foreach($product->characteristics != null ? json_decode($product->characteristics) : [] as $item => $value)
                            <dt class="col-sm-3">{{ $item }}: </dt>
                            <dd class="col-sm-9">{{ $value }}</dd>
                        @endforeach
                    </dl>

                    <div class="form-row  mt-4">
                        <div class="form-group col-md flex-grow-0">
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
                            <a href="#" onclick="addcart('{{ route('bg_ajax_addcart', $product->slug) }}')" class="btn  btn-primary"> 
                                <i class="fas fa-shopping-cart"></i> <span class="text">Agregar al Carrito</span> 
                            </a>
                            <a href="#" class="btn btn-light">
                                <i class="fas fa-envelope"></i> <span class="text">Contactar con Vendedor</span> 
                            </a>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->

                </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->
    <!-- ================ ITEM DETAIL END .// ================= -->
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
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
    </script>
@show