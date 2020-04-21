

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand font-weight-bold title" href="/">HiStream <i class="fas fa-video"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto smooth-scroll">
          <li class="nav-item">
            <a class="nav-link title" href="#home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          {{ menu('LandingPageHiStream', 'webstreaming::menus.menuLandingPage') }}

        </ul>
        <!-- Social Icon  -->
        <ul class="navbar-nav nav-flex-icons">
        
            @guest
                <li class="nav-item">
                    <a class="nav-link title " href="{{ route('login') }}">
                      <i class="fas fa-user-lock"></i> Ingresar
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item" >
                        <a class="nav-link title" href="{{ route('register') }}">
                          <i class="fas fa-user-edit"></i> Registrarme
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle title" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item title" href="/home">
                        <i class="fas fa-user-alt"></i>  Perfil
                        </a>

                        <a class="dropdown-item title" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                           <i class="fas fa-sign-out-alt"></i> Salir
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
<section id="home"class="view intro-2" style="background-image: url('https://user-images.githubusercontent.com/14111379/79811836-16fec980-8345-11ea-8d3e-ced882b30e0c.png');">
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
            <a href="" class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeIn"
              data-wow-delay="0.3s">{{ $collection['btn_1']['value'] }}</a>
            <a href="" class="btn pink-gradient white-text btn-rounded font-weight-bold wow fadeIn"
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