<br>
<hr>
<br>
<section class="px-md-5 mx-md-5 text-center dark-grey-text" id="pasarela">

    <!--Grid row-->
    {{--  <div class="row d-flex justify-content-center"> --}}

    <!--Grid column-->
    {{--   <div class="col-xl-6 col-md-8"> --}}

    <h3 class="font-weight-bold pb-3 mb-4">{{ $data->title_strong->value }}</h3>

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
                <!--Modal: Name-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item" src="{{ $data->urlvideo_1->value }}" allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Compartir :</span>
                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                        class="fab fa-facebook-f"></i></a>
                                <!--Twitter-->
                                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                <!--Google +-->
                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                        class="fab fa-google-plus-g"></i></a>
                                <!--Linkedin-->
                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                    data-dismiss="modal">cerrar</button>

                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image1->value) }}" alt="Card image cap">
                    <a data-toggle="modal" data-target="#modal1">
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

                <!--Modal: Name-->
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item" src="{{ $data->urlvideo_2->value }}" allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Compartir :</span>
                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                        class="fab fa-facebook-f"></i></a>
                                <!--Twitter-->
                                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                <!--Google +-->
                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                        class="fab fa-google-plus-g"></i></a>
                                <!--Linkedin-->
                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                    data-dismiss="modal">cerrar</button>

                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image2->value) }}" alt="Card image cap">
                    <a data-toggle="modal" data-target="#modal2">
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

                <!--Modal: Name-->
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe class="embed-responsive-item" src="{{ $data->urlvideo_3->value }}" allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <span class="mr-4">Compartir :</span>
                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                        class="fab fa-facebook-f"></i></a>
                                <!--Twitter-->
                                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                <!--Google +-->
                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                        class="fab fa-google-plus-g"></i></a>
                                <!--Linkedin-->
                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                    data-dismiss="modal">cerrar</button>

                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->


                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="{{ voyager::Image($data->image3->value) }}" alt="Card image cap">
                    <a data-toggle="modal" data-target="#modal3">
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
</div> {{--cierre del div en el blocke 6 --}}