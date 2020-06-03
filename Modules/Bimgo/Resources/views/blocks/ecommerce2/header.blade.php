     <!-- Categories & Adv -->
   <section class="section pt-2">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <!-- Section: Categories -->
        <section class="section">

          <ul class="list-group z-depth-1">

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-laptop dark-grey-text mr-2" aria-hidden="true"></i> Laptops</a>

              <a href=""></a>

              <span class="badge badge-danger badge-pill">43</span>

              </a>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-mobile-alt dark-grey-text mr-3" aria-hidden="true"></i> Smartphone</a>

              <span class="badge badge-danger badge-pill">32</span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-tablet-alt dark-grey-text mr-3" aria-hidden="true"></i> Tablet</a>

              <span class="badge badge-danger badge-pill">18</span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-headphones-alt dark-grey-text mr-3" aria-hidden="true"></i>Heahphones</a>

              <span class="badge badge-danger badge-pill">37</span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>Camera</a>

              <span class="badge badge-danger badge-pill">15</span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-suitcase dark-grey-text mr-3" aria-hidden="true"></i>Accesories</a>

              <span class="badge badge-danger badge-pill">64</span>

            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">

              <a class="dark-grey-text font-small">

                <i class="fas fa-tv dark-grey-text mr-3" aria-hidden="true"></i>TV</a>

              <span class="badge badge-danger badge-pill">2</span>

            </li>

          </ul>

        </section>
        <!-- Section: Categories -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">

        <!-- Image -->
        <div class="view zoom z-depth-1">
    
          <img src="{{ voyager::image($data->banner_image->value) }}" class="img-fluid" alt="Image 1600x721px">
    
          <div class="mask rgba-white-light">
    
            <div class="dark-grey-text  pt-4 ml-3 pl-3">
    
              <div>
    
                <a>
    
                  <span class="badge badge-danger">{{ $data->banner_badge->value }}</span>
    
                </a>
    
                <h2 class="card-title font-weight-bold pt-2">
    
                  <strong>{{ $data->banner_title->value }}</strong>
    
                </h2>
    
                <p class="">{{ $data->banner_description->value }}</p>
    
                <a href="{{ $data->banner_btn_action->value }}" target="_blak" class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">{{ $data->banner_btn_name->value }}</a>
    
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
  <!-- Categories & Adv -->