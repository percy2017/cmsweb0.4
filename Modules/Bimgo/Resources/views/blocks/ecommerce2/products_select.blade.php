    <!-- Section: product with Category -->
    <section class="mb-5">
      <div class="row">
          @foreach ($data as $category)
          <div class="col-lg-4 col-md-12 col-12 pt-4">
              <hr>
              <h5 class="text-center font-weight-bold dark-grey-text"><strong>{{ $category->title }}</strong></h5>
              <hr>
              @foreach ($category->products->take(3) as $product)
                  <div class="row mt-5 py-2 mb-4 hoverable align-items-center">
                      <div class="col-6">
                          @php
                              $images = $product->images ? json_decode($product->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                          @endphp
                          <a><img src="{{ Voyager::image($images) }}" class="img-fluid"></a>
                      </div>
                      <div class="col-6">
                          <a class="pt-5"><strong>{{ $product->name }}</strong></a>
                          <ul class="rating inline-ul">
                              @switch($product->stars)
                                  @case(1)
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      @break
                                  @case(2)
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      @break
                                  @case(3)
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      @break
                                  @case(4)
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star grey-text"></i></li>
                                      @break
                                  @case(5)
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      <li><i class="fas fa-star blue-text"></i></li>
                                      @break
                                  @default
                              @endswitch
                          </ul>
                          @if($product->product_details[0]->price_last > 0)
                              <h6 class="h6-responsive font-weight-bold dark-grey-text">
                                  <strong>{{ $product->product_details[0]->price }} Bs</strong> 
                                  <span class="grey-text"><small><s>{{ $product->product_details[0]->price_last }} Bs</s></small></span>
                              </h6>
                          @else
                              <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>{{ $product->product_details[0]->price }} Bs.</strong></h6>
                          @endif
                      </div>
                  </div>
              @endforeach
          </div>
          @endforeach
      </div>
  </section>
  <!-- Section: product list -->