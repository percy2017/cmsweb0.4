<!-- Section: Articles -->
<section id="articles" class="mb-5 pb-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center">{{ $data->title->value }}</h2>
    <hr class="hr-pink my-3">
    <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">{{ $data->parrafo->value }}</p>

    <!-- Grid row -->
    <div class="row text-center">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
                <img src="{{ voyager::Image($data->imagen_group1->value) }}" class="img-fluid"
                    alt="Sample project image">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Excerpt-->
            <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">{{ $data->title_group1->value }}</h4>
                <p class="grey-text">
                    {!! $data->parrafo_group1->value !!}
                </p>
                {{-- <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-pastel"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter blue-pastel"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-pastel"> </i>
                    </a>
                </ul> --}}
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
                    <img src="{{ voyager::Image($data->imagen_group2->value) }}" class="img-fluid"
                        alt="Sample project image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
            </div>
            <!--Excerpt-->
            <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">{{ $data->title_group2->value }}</h4>
                <p class="grey-text">
                    {!! $data->parrafo_group2->value !!}
                </p>
                {{-- <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-pastel"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter blue-pastel"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-pastel"> </i>
                    </a>
                </ul> --}}
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
                <img src="{{ voyager::Image($data->imagen_group3->value) }}" class="img-fluid"
                    alt="Sample project image">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Excerpt-->
            <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">{{ $data->title_group3->value }}</h4>
                <p class="grey-text">
                    {!! $data->parrafo_group3->value !!}
                </p>
                {{-- <ul class="list-unstyled mb-0">
                    <!-- Facebook -->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-pastel"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter blue-pastel"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-pastel"> </i>
                    </a>
                </ul> --}}
            </div>
        </div>
        <!-- Grid column -->
    </div>    
</section>
<!-- Section: Articles -->