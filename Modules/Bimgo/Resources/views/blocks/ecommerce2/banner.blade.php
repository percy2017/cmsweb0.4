<!-- Section: Advertising -->
  <section>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-12">

        <!-- Image -->
        <div class="view  z-depth-1">

          <img src="{{ Voyager::image($data->banner_image->value) }}" class="img-fluid"
            alt="Banner 1800x479px">

          <div class="mask rgba-stylish-slight">

            <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">

              <div>

                <a>

                  <span class="badge badge-primary">{{ $data->badge_info->value }}</span>

                </a>

                <h2 class="card-title font-weight-bold pt-md-3 pt-1">

                  <strong>{{ $data->title->value }}

                  </strong>

                </h2>

                <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">{{ $data->description->value }} </p>

                <a href="{{ $data->btn_action->value }}" class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">{{ $data->btn_name->value }}</a>

              </div>

            </div>

          </div>

        </div>
        <!-- Image -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Advertising -->