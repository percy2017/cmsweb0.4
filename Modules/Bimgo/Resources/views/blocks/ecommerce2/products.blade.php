    <!-- Section: Bestsellers & offers -->
  <section>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-12">
        {{-- {{ dd($data) }} --}}
        <!-- Nav tabs -->
        <ul class="nav md-tabs nav-justified grey lighten-3 mx-0" role="tablist">
          @php
              $active = 'active';
          @endphp
          @foreach ($data as $category)
          <li class="nav-item">

            <a class="nav-link {{ $active }} dark-grey-text font-weight-bold" data-toggle="tab" href="#panel{{ $category->id }}"
              role="tab">{{ $category->title }}</a>

          </li>
          @php
              $active = '';
          @endphp
          @endforeach
          

        </ul>

        <!-- Tab panels -->
        <div class="tab-content px-0">

          @php
              $active = 'show active';
          @endphp
          @foreach ($data as $category)
          <div class="tab-pane fade in {{ $active }} " id="panel{{ $category->id }}" role="tabpanel">

            <br>
            <div class="row">
              @forelse ($category->products as $products)
                <div class="col-lg-4 col-md-12 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">
                      @php
                        $images = $item->images ? json_decode($item->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                      @endphp
                      <img src="{{ Voyager::image($images) }}"
                        class="img-fluid" alt="sample image">

                      <a>

                        <div class="mask rgba-white-slight"></div>

                      </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                      <!-- Category & Title -->
                      <h5 class="card-title mb-1">

                        <strong>

                          <a href="" class="dark-grey-text">{{ $products->name }}</a>

                        </strong>

                      </h5>

                      <span class="badge badge-danger mb-2">bestseller</span>

                      <!-- Rating -->
                      <ul class="rating">

                        <li>

                          <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                          <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                          <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                          <i class="fas fa-star blue-text"></i>

                        </li>

                        <li>

                          <i class="fas fa-star blue-text"></i>

                        </li>

                      </ul>

                      <!-- Card footer -->
                      <div class="card-footer pb-0">

                        <div class="row mb-0">

                          <span class="float-left">

                            <strong>Bs. {{ $products->price }}</strong>

                          </span>

                          <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

                              <i class="fas fa-shopping-cart ml-3"></i>

                            </a>

                          </span>

                        </div>

                      </div>

                    </div>
                    <!-- Card content -->

                  </div>
                  <!-- Card -->

                </div>
              @empty
                <div class="col-md-12 text-center">
                  <h2>Vacío</h2>
                </div>
              @endforelse
            </div>

          </div>
          @php
              $active = '';
          @endphp
          @endforeach

        </div>

      </div>

    </div>

    <!-- Grid row -->
  </section>
  <!-- Section: Bestsellers & offers -->