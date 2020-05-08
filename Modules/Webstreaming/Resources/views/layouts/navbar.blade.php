<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand font-weight-bold title" href="/">{{ setting('site.title') }} <i class="{{ setting('site.pag_icon') }}"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto smooth-scroll">

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
                <li class="nav-item">
                    <a class="nav-link title" href="{{ route('register') }}">
                        <i class="fas fa-user-edit"></i> Registrarme
                    </a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle title" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item title" href="/home">
                            <i class="fas fa-user-alt"></i> Perfil
                        </a>

                        <a class="dropdown-item title" href="{{ route('logout') }}" onclick="event.preventDefault();
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