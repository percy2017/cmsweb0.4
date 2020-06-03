  <!-- Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">

      <!-- Logo -->
      <li>

        <div class="logo-wrapper waves-light">

          <a href="https://mdbootstrap.com/img/logo/mdb-transparent.png">

            <img src="{{ Voyager::Image(setting('ecommerce.image')) }}" class="img-fluid flex-center" alt="logo ecommerce 251x92px">

          </a>

        </div>

      </li>
      <!-- Logo -->

      <!-- Social -->
      <li>

        <ul class="social">

          <li>

            <a class="fb-ic">

              <i class="fab fa-facebook-f"> </i>

            </a>

          </li>

          <li>

            <a class="pin-ic">

              <i class="fab fa-pinterest"> </i>

            </a>

          </li>

          <li>

            <a class="gplus-ic">

              <i class="fab fa-google-plus-g"> </i>

            </a>

          </li>

          <li>

            <a class="tw-ic">

              <i class="fab fa-twitter"> </i>

            </a>

          </li>

        </ul>

      </li>
      <!-- Social -->

      <!-- Search Form -->
      <li>

        <form class="search-form" role="search">

          <div class="form-group md-form mt-0 pt-1 waves-light">

            <input type="text" class="form-control" placeholder="Buscar">

          </div>

        </form>

      </li>
      <!-- Search Form -->

      <!-- Side navigation links -->
      <li>

        <ul class="collapsible collapsible-accordion">

          <li>

            <a class="collapsible-header waves-effect arrow-r">

              <i class="fas fa-shopping-cart"></i> Cart page

              <i class="fas fa-angle-down rotate-icon"></i>

            </a>

            <div class="collapsible-body">

              <ul>

                <li>

                  <a href="../cart/cart-v1.html" class="waves-effect">Cart V.1</a>

                </li>

                <li>

                  <a href="../cart/cart-v2.html" class="waves-effect">Cart V.2</a>

                </li>

              </ul>

            </div>

          </li>

          <li>

            <a class="collapsible-header waves-effect arrow-r">

              <i class="far fa-hand-pointer"></i> Category page

              <i class="fas fa-angle-down rotate-icon"></i>

            </a>

            <div class="collapsible-body">

              <ul>

                <li>

                  <a href="../category/category-v1.html" class="waves-effect">Category V.1</a>

                </li>

                <li>

                  <a href="../category/category-v2.html" class="waves-effect">Category V.2</a>

                </li>

                <li>

                  <a href="../category/category-v3.html" class="waves-effect">Category V.3</a>

                </li>

                <li>

                  <a href="../category/category-v4.html" class="waves-effect">Category V.4</a>

                </li>

              </ul>

            </div>

          </li>

          <li>

            <a class="collapsible-header waves-effect arrow-r">

              <i class="far fa-bookmark"></i> Homepage

              <i class="fas fa-angle-down rotate-icon"></i>

            </a>

            <div class="collapsible-body">

              <ul>

                <li>

                  <a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>

                </li>

                <li>

                  <a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>

                </li>

                <li>

                  <a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>

                </li>

              </ul>

            </div>

          </li>

          <li>

            <a class="collapsible-header waves-effect arrow-r">

              <i class="fas fa-camera-retro"></i> Product page

              <i class="fas fa-angle-down rotate-icon"></i>

            </a>

            <div class="collapsible-body">

              <ul>

                <li>

                  <a href="../product/product-v1.html" class="waves-effect">Product V.1</a>

                </li>

                <li>

                  <a href="../product/product-v2.html" class="waves-effect">Product V.2</a>

                </li>

              </ul>

            </div>

          </li>

          <li>

            <a href="../contact/contact.html" class="collapsible-header waves-effect">

              <i class="fas fa-envelope"></i> Contact</a>

          </li>

        </ul>

      </li>

      <!-- Side navigation links -->
      <div class="sidenav-bg mask-strong"></div>

    </ul>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">

      <div class="container">

        <!-- SideNav slide-out button -->
        <div class="float-left mr-2">

          <a href="#" data-activates="slide-out" class="button-collapse">

            <i class="fas fa-bars"></i>

          </a>

        </div>

        <a class="navbar-brand font-weight-bold" href="/">

          <strong>{{ setting('ecommerce.title') }}</strong>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

          <ul class="navbar-nav ml-auto">
            {{ menu('ecommerce2', 'bimgo::menus.menu-ecommerce2') }}
            {{-- <li class="nav-item">

              <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">

                <i class="fas fa-envelope blue-text"></i> Contact

                <span class="sr-only">(current)</span>

              </a>

            </li>

            <li class="nav-item ml-3">

              <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">

                <i class="fas fa-cog blue-text"></i> Settings</a>

            </li> --}}

           {{--  <li class="nav-item dropdown ml-3">

              <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold"
                id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-user blue-text"></i> Login </a>

              <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">

                <a class="dropdown-item waves-effect waves-light" href="#">My account</a>

                <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>

              </div>

            </li> --}}

            @guest
            <li class="nav-item ml-3">
                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold"  href="{{ route('login') }}">
                  <i class="fas fa-lock blue-text"></i>Ingresar
                </a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item ml-3">
                    <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold"  href="{{ route('register') }}">
                      <i class="fas fa-user-plus blue-text"></i> Registrarme
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold"
              id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user blue-text"></i>  {{ Auth::user()->name }}
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
    <!-- Navbar -->

  </header>
  <!-- Navigation -->