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
              <a class="dark-grey-text font-small"><i class="{{ $data->icon1->value }}"
                  aria-hidden="true"></i> {{ $data->name1->value }}</a>
              {{--  <a href="#"></a><span class="badge badge-danger badge-pill">43</span></a>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon2->value }}"
                  aria-hidden="true"></i> {{ $data->name2->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">32</span>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon3->value }}"
                  aria-hidden="true"></i> {{ $data->name3->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">18</span>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon4->value }}"
                  aria-hidden="true"></i>{{ $data->name4->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">37</span>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon5->value }}"
                  aria-hidden="true"></i> {{ $data->name5->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">15</span>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon6->value }}"
                  aria-hidden="true"></i> {{ $data->name6->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">64</span>  --}}
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dark-grey-text font-small"><i class="{{ $data->icon7->value }}"
                  aria-hidden="true"></i> {{ $data->name7->value }}</a>
              {{--  <span class="badge badge-danger badge-pill">2</span>  --}}
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
    
          <img src="{{ Voyager::image($data->banner_image->value) }}" class="img-fluid" alt="Image 1600x721px">
    
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