<!-- Section: About Us -->
<section id="about" class="mb-5 pb-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center">{{ $data->title->value }}</h2>
    <hr class="hr-pink my-3">
    <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">{{ $data->parrafo->value }}</p>

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-2 col-md-3 col-2">
                    <i class="{{ $data->icons1->value }}"></i>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-10 col-md-9 col-10">
                    <h4 class="font-weight-bold orange-pastel">{{ $data->title_group1->value }}</h4>
                    <p class="grey-text">{!! $data->parrafo_group1->value !!}</p>
                    <a target="_blank" href="{{ $data->btn_action_group1->value }}" class="btn btn-orange-pastel btn-rounded btn-sm">{{ $data->btn_name_group1->value }}</a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-2 col-md-3 col-2">
                    <i class="{{ $data->icons2->value }}"></i>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-10 col-md-9 col-10">
                    <h4 class="font-weight-bold blue-pastel">{{ $data->title_group2->value }}</h4>
                    <p class="grey-text">{!! $data->parrafo_group2->value !!}</p>
                    <a target="_blank" href="{{ $data->btn_action_group2->value }}" class="btn btn-blue-pastel btn-rounded btn-sm">{{ $data->btn_name_group2->value }}</a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-2 col-md-3 col-2">
                    <i class="{{ $data->icons3->value }}"></i>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-10 col-md-9 col-10">
                    <h4 class="font-weight-bold green-pastel">{{ $data->title_group3->value }}</h4>
                    <p class="grey-text">{!! $data->parrafo_group3->value !!}</p>
                    <a target="_blank" href="{{ $data->btn_action_group3->value }}" class="btn btn-green-pastel btn-rounded btn-sm">{{ $data->btn_name_group3->value }}</a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: About Us -->