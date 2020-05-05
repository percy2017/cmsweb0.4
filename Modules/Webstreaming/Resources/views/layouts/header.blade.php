

  <!-- Navbar -->
@include('webstreaming::layouts.navbar')
<!-- Navbar -->
<!--Intro Section-->
<section id="1"class="view intro-2" style="background-image: url('https://user-images.githubusercontent.com/14111379/79811836-16fec980-8345-11ea-8d3e-ced882b30e0c.png');">
  <div class="mask">
    <div class="container h-100 d-flex justify-content-center align-items-center">
      <div class="row flex-center pt-5 mt-3">
        <div class="col-md-12 col-lg-6 text-center text-md-left margins">
          <div class="dark-grey-text">
            <h1 class="display-4 title mt-md-5 mt-lg-0 font-weight-bold wow fadeIn" data-wow-delay="0.3s">
              <strong>{{ $collection['title_strong']['value'] }}</strong>
            </h1>
            <hr class="hr-light wow fadeIn" data-wow-delay="0.3s">
            <h6 class="grey-text wow fadeIn" data-wow-delay="0.3s">
              {{ $collection['parrafo_h6']['value'] }}
            </h6>
            <br>
            <a href="{{ $collection['btn_action_1']['value'] }}" class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeIn"
              data-wow-delay="0.3s">{{ $collection['btn_1']['value'] }}</a>
            <a href="{{ $collection['btn_action_2']['value'] }}" target="_blank" class="btn pink-gradient white-text btn-rounded font-weight-bold wow fadeIn"
              data-wow-delay="0.3s">{{ $collection['btn_2']['value'] }}
              </a>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
          <img src="{{ voyager::Image($collection['imagen']['value']) }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>
<!--Intro Section-->