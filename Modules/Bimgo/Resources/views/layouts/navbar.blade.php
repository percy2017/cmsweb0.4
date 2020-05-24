<!-- Navbar -->
<nav class="navbar navbar-expand-lg scrolling-navbar navbar-light z-depth-0 fixed-top white ml-md-4 mr-md-3">
    <a class="navbar-brand purple-pastel" href="/">
      <img src="{{ voyager::Image(setting('site.logo')) }}" height="30" alt="logo Bimgo">
      {{-- <strong><br><span class="font-weight-bold">{{ setting('site.title') }}</span><span
          class="font-weight-bold pink-pastel">.</span></strong> --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto text-uppercase smooth-scroll">
        {{ menu('LandingPageBimgo', 'bimgo::menus.menu-navbar') }}
        <li class="nav-item">
          <a  class="nav-link pt-0-1"  data-offset="100" data-toggle="modal" data-target="#modalLRForm">
            <button type="button" class="btn btn-outline-purple-pastel btn-rounded btn-md z-depth-0 m-0 pt-2">Iniciar Sesion<i class="fas fa-angle-double-right"></i></button>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar -->