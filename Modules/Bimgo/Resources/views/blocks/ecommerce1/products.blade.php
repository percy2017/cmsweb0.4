
<!-- Section: Products -->
    <section>
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
           
            <div class="col-12">
             {{--  {{ dd($data) }}  --}}
                <!-- Grid row -->
                <div class="row">
                    @foreach ($data as $item)
                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <!-- Card -->
                            <div class="card card-ecommerce">
                                <!-- Card image -->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg"
                                        class="img-fluid" alt="">
                                    <a href="{{ url('product') }}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Category & Title -->
                                    <h5 class="card-title mb-1"><strong><a href="{{ url('product-details') }}" class="dark-grey-text">{{ $item->name }}</a></strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>

                                        <li><i class="fas fa-star blue-text"></i></li>

                                        <li><i class="fas fa-star blue-text"></i></li>

                                        <li><i class="fas fa-star blue-text"></i></li>

                                        <li><i class="fas fa-star blue-text"></i></li>

                                    </ul>

                                    <!-- Card footer -->
                                    <div class="card-footer pb-0">

                                        <div class="row mb-0">

                                        <span class="float-left"><strong>1439$</strong></span>

                                        <span class="float-right">

                                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                                class="fas fa-shopping-cart ml-3"></i></a>

                                        </span>

                                        </div>

                                    </div>
                                </div>
                                <!-- Card content -->
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
                    @endforeach
                    

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                {{--  <div class="row mb-3">  --}}
                
            </div>

        </div>
        <!-- Grid row -->

    </section>
<!-- Section: Products -->