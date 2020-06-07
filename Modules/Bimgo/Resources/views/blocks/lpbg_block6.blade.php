<div class="container my-5 p-5 z-depth-1">

  
    <!--Section: Content-->
    <section class="text-center dark-grey-text">
  
      <!-- Section heading -->
      <h3 class="font-weight-bold pb-2">{{ $data->title_strong->value }}</h3>
      <hr class="w-header my-4">
      <!-- Section description -->
      <p class="text-muted w-responsive mx-auto mb-5">{{ $data->description->value }}</p>
      
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">
  
          <!-- Card -->
          <div class="pricing-card">
  
            <!-- Content -->
            <div class="card-body">
              
              <h6 class="font-weight-bold text-uppercase mb-4">{{ $data->card1_title->value }}</h6>
  
              <!-- Price -->
              <p class="display-3 font-weight-normal">{{ $data->card1_price->value }}</p>
              {!! $data->card1_list->value !!}
              <a href="{{ $data->card1_btn_ction->value }}" class="btn btn-outline-purple btn-md btn-rounded btn-block">{{ $data->card1_btn_title->value }}</a>
  
            </div>
            <!-- Content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
  
          <!-- Card -->
          <div class="pricing-card">
  
            <!-- Content -->
            <div class="card-body">
              
              <h6 class="font-weight-bold text-uppercase purple-text mb-4">{{ $data->card2_title->value }}</h6>
  
              <!-- Price -->
              <p class="display-3 font-weight-normal purple-text">{{ $data->card2_price->value }}</p>
              
              {!! $data->card2_list->value !!}

              <a href="{{ $data->card2_btn_ction->value }}" class="btn btn-purple btn-md btn-rounded btn-block">{{ $data->card2_btn_title->value }}</a>
  
            </div>
            <!-- Content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
  
          <!-- Card -->
          <div class="pricing-card">
  
            <!-- Content -->
            <div class="card-body">
              
              <h6 class="font-weight-bold text-uppercase mb-4">{{ $data->card3_title->value }}</h6>
  
              <!-- Price -->
              <p class="display-3 font-weight-normal">{{ $data->card3_price->value }}</p>
              {!! $data->card3_list->value !!}

              <a href="{{ $data->card3_btn_ction->value }}" class="btn btn-outline-purple btn-md btn-rounded btn-block">{{ $data->card3_btn_title->value }}</a>
  
            </div>
            <!-- Content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </section>
    <!--Section: Content-->
  
  
  </div>