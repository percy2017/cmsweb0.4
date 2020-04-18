<div class="container">
<!-- Section: About -->
<section id="about" class="about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

    <!-- Grid row -->
    <div class="row pt-2 mt-5">

        <!-- Grid column -->
        <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">
            <!-- Image -->
            <img src="{{ voyager::Image($data->imagen->value) }}" class="img-fluid z-depth-1 rounded"
                alt="My photo">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!-- Secion heading -->
            <h3 class="mb-5 dark-grey-text title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                <strong>{{ $data->title_h3->value }}</strong>
            </h3>

            <!-- Description -->
            <p align="justify" class="grey-text">{{ $data->parrafo_1->value }}</p>
            <p align="justify" class="grey-text">{{ $data->parrafo_2->value }}</p>
            <p align="justify" class="grey-text mb-5">{{ $data->parrafo_3->value }}</p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: About -->

<hr>