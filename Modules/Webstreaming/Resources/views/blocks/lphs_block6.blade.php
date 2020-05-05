<div class="container my-5">


    <!--Section: Content-->
    <section  id="6" class="text-center dark-grey-text">
  
      <!-- Section heading -->
      <h3 class="font-weight-bold pb-2 mb-4">{{ $data->title_h3->value }}</h3>
      <!-- Section description -->
      <p class="text-muted w-responsive mx-auto mb-5">{{ $data->parrafo->value }}</p>
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">
  
          <!-- Card -->
          <div class="pricing-card card">
  
            <!-- Content -->
            <div class="card-body">
              <h5 class="font-weight-bold mt-3">{{ $data->pricing1_title->value }}</h5>
  
              <!-- Price -->
              <div class="price pt-0">
                <h2 class="number red-text mb-0">{{ $data->pricing1_price1->value }}</h2>
              </div>
  
              <ul class="striped mb-1">
                @if ($data->pricing1_content1->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing1_content1->value }}</p>
                    </li>
                @endif
                @if ($data->pricing1_content2->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing1_content2->value }}</p>
                    </li>
                @endif
                @if ($data->pricing1_content3->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing1_content3->value }}</p>
                    </li>
                @endif
                @if ($data->pricing1_content4->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing1_content4->value }}</p>
                    </li>
                @endif
                @if ($data->pricing1_content5->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing1_content5->value }}</p>
                    </li>
                @endif
              </ul>
              <a href="{{ $data->btn_action->value }}" class="btn btn-danger btn-rounded mb-4">{{ $data->btn_name->value }} </a>
  
            </div>
            <!-- Content -->
  
          </div>
          <!-- Card -->
  
        </div>
        <!-- Grid column -->
  
        <!--  Grid column  -->
        <div class="col-lg-4 col-md-6 mb-4">
  
          <!-- Card -->
          <div class="card card-image" style="background-image: url('https://user-images.githubusercontent.com/14111379/79801406-19085e80-832c-11ea-806b-54d27400eb5d.png');">
  
            <!-- Pricing card -->
            <div class="text-white text-center pricing-card d-flex align-items-center rgba-indigo-strong py-3 px-3 rounded">
  
              <!-- Content -->
              <div class="card-body">
                <h5 class="font-weight-bold mt-2">{{ $data->pricing2_title->value }}</h5>
  
                <!--Price -->
                <div class="price pt-0">
                  <h2 class="number mb-0">{{ $data->pricing2_price1->value }}</h2>
                </div>
  
                <ul class="striped mb-0">
                  @if ($data->pricing2_content1->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing2_content1->value }}</p>
                    </li>
                @endif
                @if ($data->pricing2_content2->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing2_content2->value }}</p>
                    </li>
                @endif
                @if ($data->pricing2_content3->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing2_content3->value }}</p>
                    </li>
                @endif
                @if ($data->pricing2_content4->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing2_content4->value }}</p>
                    </li>
                @endif
                @if ($data->pricing2_content5->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing2_content5->value }}</p>
                    </li>
                @endif
                </ul>
                <a href="{{ $data->btn_action2->value }}" class="btn btn-rounded btn-outline-white">{{ $data->btn_name2->value }}</a>
  
              </div>
              <!-- Content -->
  
            </div>
            <!-- Pricing card -->
  
          </div>
          <!-- Card -->
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
  
          <!-- Card -->
          <div class="pricing-card card">
  
            <!-- Content -->
            <div class="card-body">
              <h5 class="font-weight-bold mt-3">{{ $data->pricing3_title->value }}</h5>
  
              <!-- Price -->
              <div class="price pt-0">
                <h2 class="number red-text mb-0">{{ $data->pricing3_price1->value }}</h2>
              </div>
  
              <ul class="striped mb-1">
                @if ($data->pricing3_content1->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing3_content1->value }}</p>
                    </li>
                @endif
                @if ($data->pricing3_content2->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing3_content2->value }}</p>
                    </li>
                @endif
                @if ($data->pricing3_content3->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing3_content3->value }}</p>
                    </li>
                @endif
                @if ($data->pricing3_content4->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing3_content4->value }}</p>
                    </li>
                @endif
                @if ($data->pricing3_content5->value)
                    <li>
                      <p><strong></strong> {{ $data->pricing3_content5->value }}</p>
                    </li>
                @endif
              </ul>
              <a href="{{ $data->btn_action3->value }}" class="btn btn-danger btn-rounded mb-4">{{ $data->btn_name3->value }}</a>
  
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
  
  
