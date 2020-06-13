<!-- =============== SECTION ITEMS =============== -->
<section  class="padding-bottom-sm">
    <header class="section-heading heading-line">
        <h4 class="title-section text-uppercase">Productos Recomendados</h4>
    </header>

    <div class="row row-sm">
        @foreach ($data as $item)
            @php
                $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
            @endphp
            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                <div href="#" class="card card-sm card-product-grid">
                    <a href="{{ route('bg_product4', $item->slug) }}" class="img-wrap"> <img src="{{ Voyager::image($images) }}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{ route('bg_product4', $item->slug) }}" class="title">{{ $item->name }}</a>
                        <div class="price mt-1">{{ $item->product_details[0]->price }} Bs.</div>
                    </figcaption>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- =============== SECTION ITEMS .//END =============== -->