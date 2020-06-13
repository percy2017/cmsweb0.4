<!-- =============== SECTION 2 =============== -->
<section class="padding-bottom">
    <header class="section-heading heading-line">
        <h4 class="title-section text-uppercase">Productos Premium</h4>
    </header>
    <div class="card card-home-category">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="home-category-banner bg-light-orange">
                    <h5 class="title">Productos Premium, para clientes exigentes</h5>
                    <p>Todos los productos son de calidad premium solo para clientes exigentes y de buen gusto</p>
                    {{--  <a href="#" class="btn btn-outline-primary rounded-pill">Source now</a>  --}}
                    <img src="{{ asset('vendor/bimgo/alistyle/images/items/14.jpg') }}" class="img-bg">
                </div>
            </div>
            <div class="col-md-9">
                <ul class="row no-gutters bordered-cols">
                    @foreach ($data as $item)
                        @php
                            $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                        @endphp
                        <li class="col-6 col-lg-3 col-md-4">
                            <a href="{{ route('bg_product4', $item->slug) }}" class="item"> 
                                <div class="card-body">
                                    <h6 class="title">{{ $item->name }} </h6>
                                    <img class="img-sm float-right" src="{{ Voyager::image($images) }}"> 
                                    <p class="text-muted"><i class="fa fa-money-bill-alt"></i> {{ $item->product_details[0]->price }} Bs.</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- =============== SECTION 2 END =============== -->