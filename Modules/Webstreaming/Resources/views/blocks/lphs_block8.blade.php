<section class="px-md-5 mx-md-5" id="8">
  <div class="section banner-full">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 justify-content-xs-center">
          <div class="image aos-init aos-animate" data-aos="flip-right">
            <img class="img-fluid" src="{{ voyager::Image($data->iphone->value) }}" alt="Iphone-Black">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="block">
            <div class="logo">
              <a href="#"><img src="{{ voyager::Image($data->brand->value) }}" alt="logo"></a>
            </div>
            <h1>{!! $data->title_strong->value !!}</h1>
            <p>
              {!! $data->parrafo->value !!}
            </p>
            <ul class="list-inline app-badge">
              <li class="list-inline-item">
                <a href="{{ $data->action1->value }}"><img src="{{ voyager::Image($data->image1->value) }}"
                    alt="Apple Store"></a>
              </li>
              <li class="list-inline-item">
                <a href="{{ $data->action2->value }}"><img src="{{ voyager::Image($data->image2->value) }}"
                    alt="Google Play"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>