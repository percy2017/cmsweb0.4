<br>
<hr>
<br>
<section class="px-md-5 mx-md-5 text-center dark-grey-text" id="pasarela">

    <!--Grid row-->
   {{--  <div class="row d-flex justify-content-center"> --}}

        <!--Grid column-->
      {{--   <div class="col-xl-6 col-md-8"> --}}

            <h3  class="font-weight-bold pb-3 mb-4">{{ $data->title_strong->value }}</h3>

            <p class="text-muted w-responsive mx-auto mb-5">{{ $data->description->value }}</p>

            {{-- <i class="btn btn-info btn-md ml-0 mb-5" href="#" role="button">Start now<i class="fa fa-magic ml-2"></i></i> --}}
{{-- 
        </div> --}}
        <!--Grid column-->
{{-- 
    </div> --}}
    <!--Grid row-->


    <!--Grid row-->
    <div class="row">

        <div class="col-lg-4 col-m-12 mb-4">
            <!-- Card Wider -->
            <div class="card card-cascade wider">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image1->value) }}" alt="Card image cap">
                    <a href="https://www.tigo.com.bo/tigo-money/ptm" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h5 class="card-title"><strong>{{ $data->title1->value }}</strong></h5>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>{{ $data->account1->value }}</strong></h5>
                    <!-- Text -->

                </div>

            </div>
            <!-- Card Wider -->
        </div>

        <div class="col-lg-4 col-m-12 mb-4">
            <!-- Card Wider -->
            <div class="card card-cascade wider">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image2->value) }}" alt="Card image cap">
                    <a href="https://youtu.be/udX7bIQ7_Dk" target="_blank">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h5 class="card-title"><strong>{{ $data->title2->value }}</strong></h5>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2" title="Percy Alvarez Cruz cuenta Banco-BNB">
                        <strong>{{ $data->account2->value }}</strong></h5>

                </div>

            </div>
            <!-- Card Wider -->
        </div>

        <div class="col-lg-4 col-m-12 mb-4">
            <!-- Card Wider -->
            <div class="card card-cascade wider">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image3->value) }}" alt="Card image cap">
                    <a href="https://www.youtube.com/watch?v=6abmF9zwCgE">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h5 class="card-title"><strong>{{ $data->title3->value }}</strong></h5>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2" title="Percy Alvarez Cruz cuenta Banco-union">
                        <strong>{{ $data->account3->value }}</strong></h5>


                </div>
                <!-- Card Wider -->
            </div>


        </div>
        <!--/Grid row-->
    </div>

</section>
<!--Section: Content-->
</div>