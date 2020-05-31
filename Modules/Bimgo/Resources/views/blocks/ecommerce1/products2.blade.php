 <!-- Section: product list -->
    <section class="mb-5">
        <div class="row">
            {{-- Recorre los tipos de lista --}}
            @foreach ($data as $type_list)
            <div class="col-lg-4 col-md-12 col-12 pt-4">
                <hr><h5 class="text-center font-weight-bold dark-grey-text"><strong>{{ $type_list->name }}</strong></h5><hr>
                {{-- Recorre los productos --}}
                @foreach ($type_list->products as $product)
                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                        <div class="col-6">
                            @php
                                $images = $product->images ? json_decode($product->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                            @endphp
                            <a><img src="{{ Voyager::image($images) }}" class="img-fluid"></a>
                        </div>
                        <div class="col-6">
                        <!-- Title -->
                        <a class="pt-5"><strong>{{ $product->name }}</strong></a>
                        <!-- Rating -->
                        <ul class="rating inline-ul">
                            <li><i class="fas fa-star blue-text"></i></li>
                            <li><i class="fas fa-star blue-text"></i></li>
                            <li><i class="fas fa-star blue-text"></i></li>
                            <li><i class="fas fa-star blue-text"></i></li>
                            <li><i class="fas fa-star grey-text"></i></li>
                        </ul>
                        <!-- Price -->
                        <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>Bs. {{ $product->price }}</strong></h6>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
    <!-- Section: product list -->