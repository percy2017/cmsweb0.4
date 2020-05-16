<!-- Section: Features v.4 -->
<section id="3" class="mb-5 pb-4">

    <!-- Section heading -->
    <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>{{ $data->title_h3->value }}</strong>
    </h3>

    <!-- Section sescription -->
    <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">
        {{ $data->parrafo_p->value }}
    </p>

    <!-- Grid row -->
    <div class="row features-small wow fadeIn" data-wow-delay="0.4s">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12">
            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-2">
                    <i class="{{ $data->icons1->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_1->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_1->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-2">
                    <i class="{{ $data->icons2->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_2->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_2->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">
                <div class="col-2">
                    <i class="{{ $data->icons3->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_3->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_3->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-1 text-center text-md-left">
            <img src="{!! voyager::Image($data->imagen_bl2->value) !!}" alt=""
                class="z-depth-0 img-fluid">
        </div>
        <!-- Grid column -->

        <!-- Third column -->
        <div class="col-lg-4 col-md-12">
            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-2">
                    <i class="{{ $data->icons4->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_4->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_4->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">
                <div class="col-2">
                    <i class="{{ $data->icons5->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_5->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_5->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">
                <div class="col-2">
                    <i class="{{ $data->icons6->value }}"></i>
                </div>
                <div class="col-10 mb-2">
                    <h5 class="font-weight-bold title">{{ $data->title_6->value }}</h5>
                    <p class="grey-text">
                        {!! $data->parrafo_6->value !!}
                    </p>
                </div>
            </div>
            <!-- Grid row -->
        </div>
        <!-- Third column -->
    </div>
    <!-- Grid row -->

</section>
<!-- Section: Features v.4 -->
<hr>