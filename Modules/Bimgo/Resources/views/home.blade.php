<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bimgo - Home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/histream/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('vendor/bimgo/mdb/css/admin-dashboard_css_mdb.min.css') }}" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <div class="float-left">
        <a href="/" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <a class="navbar-brand purple-pastel" href="/">
          <p> <strong>Bimgo</strong> </p>        </a>
      </div>

      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        {{ menu('LandingPageBimgo', 'bimgo::menus.menu-profile') }}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold"
          id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user blue-text"></i>  {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="/admin">
                    Panel de Control
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
      </ul>
      <!-- Navbar links -->

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">

      <!-- Section: Team v.1 -->
      <section class="section team-section">

        <!-- Grid row -->
        <div class="row text-center">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
           @endif
          <!-- Grid column -->
          <div class="col-md-8 mb-5">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

              <!-- Card Data -->
              <div class="admin-up d-flex justify-content-start">
                <i class="fas fa-users  purple darken-3-color py-4 mr-4 z-depth-2"></i>
                <div class="data">
                  <h5 class="font-weight-bold dark-grey-text mt-3">Bimgo - <span class="text-muted">Perfil del Usuario:</span></h5>
                </div>
              </div>
              <!-- Card Data -->  

              <!-- Card content -->
              <div class="card-body card-body-cascade mt-3">

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-5">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{ Auth::user()->name }}" disabled>
                      <label for="form5" class="">Nombre Completo :</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-5">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{ Auth::user()->role->name }}"
                      disabled>
                      <label for="form5" class="">Rol del Usuario:</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-5">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{ Auth::user()->email }}"
                      disabled>
                      <label for="form5" class="">Correo del Usuario:</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-5">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{ Auth::user()->created_at }}"
                      disabled>
                      <label for="form5" class="mb-5">Fecha de Registro:</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->


              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">

            <!-- Card -->
            <div class="card profile-card">

              <!-- Avatar -->
              <div class="avatar z-depth-1-half mb-4">
                <img src="{{ Voyager::Image(Auth::user()->avatar) }}" class="rounded-circle" alt="First sample avatar image">
              </div>

              <div class="card-body pt-0 mt-0">

                <!-- Name -->
                <h3 class="mb-3 font-weight-bold"><strong>{{ Auth::user()->name }}</strong></h3>
                <h6 class="font-weight-bold purple-text mb-4">{{ Auth::user()->role->name }}</h6>

                <p class="mt-4 text-muted">Bimgo la plataforma que te permite crear un tienda en Linea
                </p>

                <a href="/" class="btn btn-outline-purple btn-rounded"> Volver</a> <a href="{{ route('voyager.dashboard') }}" class="btn btn-purple btn-rounded"> Ir al Panel</a>

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Team v.1 -->

    </div>
  </main>
  <!-- Main layout -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
  <!--  Bootstrap tooltips  -->
  <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.js') }}"></script>
  <!--  Bootstrap core JavaScript  -->
  <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
  <!--  MDB core JavaScript  -->
  <script type="text/javascript" src="{{ asset('vendor/bimgo/mdb/css/admin-dashboard_js_mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

  </script>
</body>

</html>