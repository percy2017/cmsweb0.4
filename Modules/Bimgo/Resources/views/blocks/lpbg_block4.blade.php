<!-- Section: Contact Us -->
<section id="contact" class="mb-3">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center">{{ $data->title->value }}</h2>
    <hr class="hr-pink my-3">
    <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">
        {{  $data->parrafo->value  }}
    </p>

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 mb-lg-0 mb-4">

            <p class="text-center purple-pastel ml-lg-5"><strong>{!! $data->descripcion->value !!}</strong></p>

            <!-- Form -->
            <form class="text-center ml-lg-5">

                <!-- Name -->
                <div class="md-form md-outline">
                    <input type="text" id="materialContactFormName" class="form-control">
                    <label for="materialContactFormName">Name</label>
                </div>

                <!-- E-mail -->
                <div class="md-form md-outline">
                    <input type="email" id="materialContactFormEmail" class="form-control">
                    <label for="materialContactFormEmail">E-mail</label>
                </div>

                <!--Message-->
                <div class="md-form md-outline">
                    <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                    <label for="materialContactFormMessage">Message</label>
                </div>

                <!-- Send button -->
                <button class="btn btn-outline-purple-pastel btn-rounded btn-block z-depth-0 mx-0 my-4 waves-effect"
                    type="submit">Send</button>

            </form>
            <!-- Form -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7" style="margin-top: -7rem;">

            <div class="view">
                <img src="{{ voyager::Image($data->imagen->value) }}" class="img-fluid"
                    alt="smaple image">
            </div>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Contact Us -->