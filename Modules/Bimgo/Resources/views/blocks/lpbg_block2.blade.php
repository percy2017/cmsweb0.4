<!-- Section: Offer -->
<section id="offer" class="mb-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center">{{ $data->title->value }}</h2>
    <hr class="hr-pink my-3">
    <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">{{  $data->parrafo->value  }}</p>

    <!-- Grid row -->
    <div class="row mb-lg-0 mb-5">

        <!-- Grid column -->
        <div class="col-lg-6 mb-lg-0 mb-5" style="margin-top: -5.3rem;">
            <div class="view">
                <img src="{{ voyager::Image($data->imagen->value) }}" class="img-fluid"
                    alt="smaple image">
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6">

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons4->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold purple-pastel mb-2">{{ $data->title_group4->value }}</h5>
                    <p class="grey-text">{!! $data->parrafo_group4->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons5->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold green-pastel mb-2">{{ $data->title_group5->value }}</h5>
                    <p class="grey-text">{!! $data->parrafo_group5->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons6->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold orange-pastel mb-2">{{ $data->title_group6->value }}</h5>
                    <p class="grey-text mb-0">{!! $data->parrafo_group6->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6">

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons7->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold blue-pastel mb-2">{{ $data->title_group7->value }}</h5>
                    <p class="grey-text">{!! $data->parrafo_group7->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons8->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold pink-pastel mb-2">{{ $data->title_group8->value }}</h5>
                    <p class="grey-text">{!! $data->parrafo_group8->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-lg-0 mb-5">
                <div class="col-md-1 col-2">
                    <i class="{{ $data->icons9->value }}"></i>
                </div>
                <div class="col-md-11 col-10">
                    <h5 class="font-weight-bold navy-blue-color mb-2">{{ $data->title_group9->value }}</h5>
                    <p class="grey-text mb-0">{!! $data->parrafo_group9->value !!}</p>
                </div>
            </div>
            <!-- Grid row -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6" style="margin-top: -6rem;">
            <div class="view">
                <img src="{{ voyager::Image($data->imagen1->value) }}" class="img-fluid"
                    alt="smaple image">
            </div>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Offer -->