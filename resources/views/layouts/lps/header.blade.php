<!--Main Navigation-->
<header>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><strong>{{ setting('site.title') }}</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          {{ menu('LandingPage', 'vendor.menus.LandingPage') }}
        </ul>
        <ul class="navbar-nav ml-auto">
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">
                    Ingresar
                  </a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">
                        Registrarme
                      </a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="/home">
                          Perfil
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <!--Intro Section-->
  <section class="view intro-2 rgba-gradient">
    <div class="mask">
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row flex-center pt-5 mt-3">
          <div class="col-md-12 col-lg-6 text-center text-md-left margins">
            <div class="white-text">
              <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">{{ $collection['title']['value'] }}</h1>
              <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
              <h6 class="wow fadeInLeft" data-wow-delay="0.3s">{!! $collection['description_data']['value'] !!}</h6>
              <br>
              <a href="{{ $collection['button_link1']['value'] }}" class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeInLeft"
                data-wow-delay="0.3s">{{ $collection['button_text1']['value'] }}</a>
              <a href="{{ $collection['button_link2']['value'] }}" class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">{{ $collection['button_text2']['value'] }}</a>
            </div>
          </div>

          <div class="col-md-12 col-lg-6  wow fadeInRight" data-wow-delay="0.3s">
            <img src="{{ voyager::Image($collection['image1']['value']) }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

</header>
<!--Main Navigation-->