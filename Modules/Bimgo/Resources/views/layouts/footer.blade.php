<footer class="page-footer font-small pt-4 dark-grey-text">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mt-md-1 mt-3">

                <h3 class="mb-3">
                    <a class="brand purple-pastel" href="">
                        <strong><br><span class="font-weight-bold">{{ setting('site.title') }}</span><span
                                class="font-weight-bold pink-pastel">.</span>
                        </strong>
                    </a>
                </h3>

                <p class="mb-1">
                    <strong>
                        Trinidad - Beni.
                    </strong>
                </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 mb-md-0 mb-3">

                <!-- Links -->
                <ul class="list-unstyled">
                    {{ menu('LandingPageBimgo', 'bimgo::menus.menu-footer') }}
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <ul class="list-unstyled">
                    {{ menu('LandingPage', 'bimgo::menus.menu-legal') }}
                    
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-12 col-lg-4 my-lg-0 my-4">

                <h5 class="mb-4"><strong>Si quieres saber más información,
                    déjanos tu dirección de correo electrónico:</strong></h5>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="enter tu email"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Enviar</span>
                    </div>
                </div>
                <br>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 dark-grey-text">© 2020 Copyright:
        <a class="text-black-50" href="https://loginweb.dev">Loginweb</a>
    </div>
    <!-- Copyright -->

</footer>