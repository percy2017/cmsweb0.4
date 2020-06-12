<!-- =============== SECTION DEAL =============== -->
<section class="padding-bottom">
    <div class="card card-deal">
        <div class="col-heading content-body">
            <header class="section-heading">
                <h3 class="section-title">Productos en Ofertas</h3>
                <p>Tiempo en Restante</p>
            </header>
            <div class="timer">
                <div> <span class="num">04</span> <small>Dias</small></div>
                <div> <span class="num">12</span> <small>Horas</small></div>
                <div> <span class="num">58</span> <small>Min</small></div>
                <div> <span class="num">02</span> <small>Sec</small></div>
            </div>
        </div>
        <div class="row no-gutters items-wrap">
            @foreach ($data as $item)
                @php
                    $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                @endphp
                <div class="col-md col-6">
                    <figure class="card-product-grid card-sm">
                        <a href="{{ route('bg_product4', $item->slug) }}" class="img-wrap"> 
                            <img src="{{ Voyager::image($images) }}"> 
                        </a>
                        <div class="text-wrap p-3">
                            <a href="#" class="title">{{ $item->name }}</a>
                            @php
                                $desc = $item->product_details[0]->price_last - $item->product_details[0]->price;
                            @endphp
                            <span class="badge badge-danger"> Desc. {{ $desc }} Bs.</span>
                        </div>
                    </figure>
                </div>
            @endforeach
            {{--  <div class="col-md col-6">
                <figure class="card-product-grid card-sm">
                    <a href="#" class="img-wrap"> 
                        <img src="{{ asset('vendor/bimgo/alistyle/images/items/4.jpg') }}"> 
                    </a>
                    <div class="text-wrap p-3">
                        <a href="#" class="title">Some category</a>
                        <span class="badge badge-danger"> -5% </span>
                    </div>
                </figure>
            </div>
            <div class="col-md col-6">
                <figure class="card-product-grid card-sm">
                    <a href="#" class="img-wrap"> 
                        <img src="{{ asset('vendor/bimgo/alistyle/images/items/5.jpg') }}"> 
                    </a>
                    <div class="text-wrap p-3">
                        <a href="#" class="title">Another category</a>
                        <span class="badge badge-danger"> -20% </span>
                    </div>
                </figure>
            </div>
            <div class="col-md col-6">
                <figure class="card-product-grid card-sm">
                    <a href="#" class="img-wrap"> 
                        <img src="{{ asset('vendor/bimgo/alistyle/images/items/6.jpg') }}"> 
                    </a>
                    <div class="text-wrap p-3">
                        <a href="#" class="title">Home apparel</a>
                        <span class="badge badge-danger"> -15% </span>
                    </div>
                </figure>
            </div>
            <div class="col-md col-6">
                <figure class="card-product-grid card-sm">
                    <a href="#" class="img-wrap"> 
                        <img src="{{ asset('vendor/bimgo/alistyle/images/items/7.jpg') }}"> 
                    </a>
                    <div class="text-wrap p-3">
                        <a href="#" class="title text-truncate">Smart watches</a>
                        <span class="badge badge-danger"> -10% </span>
                    </div>
                </figure>
            </div>  --}}
        </div>
    </div>
</section>
<!-- =============== SECTION DEAL // END =============== -->