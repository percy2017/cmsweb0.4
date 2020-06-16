<section>
  <div class="row">
    <div class="col-12">
      <ul class="nav md-tabs nav-justified grey lighten-3 mx-0" role="tablist">
        @php
          $active = 'active';
        @endphp
        @foreach ($data->subcategories as $category)
          <li class="nav-item">
            <a class="nav-link {{ $active }} dark-grey-text font-weight-bold" data-toggle="tab"
              href="#panel{{ $category->id }}" role="tab">{{ $category->title }}</a>
          </li>
          @php
            $active = '';
          @endphp
        @endforeach
      </ul>
      <div class="tab-content px-0">
        @php
          $active = 'show active';
        @endphp
        @foreach ($data->subcategories as $category)
          <div class="tab-pane fade in {{ $active }} " id="panel{{ $category->id }}" role="tabpanel">
            <br>
            <div class="row">
              @forelse ($category->products as $products)
                @if ($products->published) 
                  <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card card-ecommerce">
                      <div class="view overlay">
                        @php
                          $images = $products->images ? json_decode($products->images)[0] : '../images/icons-bimgo/icon-512x512.png';
                        @endphp
                        <img src="{{ Voyager::image($images) }}" class="img-fluid" alt="">
                        <a href="{{ route('bg_product2', $products->slug) }}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title mb-1"><strong><a href="{{ route('bg_product2', $products->slug) }}" class="dark-grey-text">{{ $products->name }}</a></strong>
                        </h5>
                        <span class="badge badge-danger mb-2">{{ json_decode($products->tags)[0] }}</span>
                        <ul class="rating">
                          @switch($products->stars)
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
                        <div class="card-footer pb-0">
                          <div class="row mb-0">
                            @if($products->product_details[0]->price_last > 0)
                              <h5 class="mb-0 pb-0 mt-1 font-weight-bold"><span
                                  class="red-text"><strong>{{ $products->product_details[0]->price }} Bs.</strong></span>
                                  <span class="grey-text"><small><s>{{ $products->product_details[0]->price_last }} Bs.</s></small></span>
                              </h5>
                            @else 
                              <span class="float-left"><strong>{{ $products->product_details[0]->price }} Bs.</strong></span>
                            @endif
                            <span class="float-right">
                              <a class="#" onclick="addcart('{{ route('bg_ajax_addcart', $products->slug) }}')" data-toggle="tooltip" data-placement="top" title="Agregar al Carrito"><i class="fas fa-shopping-cart ml-3"></i></a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                @endif
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
</section>