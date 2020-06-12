<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-12">
                    <a href="{{ url('/') }}" class="brand-wrap">
                        <img class="logo" src="{{ asset('vendor/bimgo/alistyle/images/logo.png') }}">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-xl-6 col-lg-5 col-md-6">
                    <form action="#" class="search-header">
                        <div class="input-group w-100">
                            <select class="custom-select border-right"  name="category_name">
                                    <option value="">Todos</option>
                                    <option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Buscar">
                            
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i> Buscar
                            </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="widgets-wrap float-md-right">
                        @guest
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <small class="text"> Login </small>
                                </a>
                            </div>
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-edit"></i>
                                    </div>
                                    <small class="text"> Registro </small>
                                </a>
                            </div>
                        @else
                        <div class="widget-header mr-3">
                            <a href="#" class="widget-view">
                                <div class="icon-area">
                                    <i class="fa fa-user"></i>
                                    <span class="notify">3</span>
                                </div>
                                <small class="text"> Mi Perfil </small>
                            </a>
                        </div>
                        {{--  <div class="widget-header mr-3">
                            <a href="#" class="widget-view">
                                <div class="icon-area">
                                    <i class="fa fa-comment-dots"></i>
                                    <span class="notify">1</span>
                                </div>
                                <small class="text"> Mensajes </small>
                            </a>
                        </div>  --}}
                        {{--  <div class="widget-header mr-3">
                            <a href="#" class="widget-view">
                                <div class="icon-area">
                                    <i class="fa fa-store"></i>
                                </div>
                                <small class="text"> Ordenes </small>
                            </a>
                        </div>  --}}
                        <div class="widget-header">
                            <a href="#" class="widget-view">
                                <div class="icon-area">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="notify">3</span>
                                </div>
                                <small class="text"> Carrito </small>
                            </a>
                        </div>
                        @endguest
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->

    <nav class="navbar navbar-main navbar-expand-lg border-bottom">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bars text-muted mr-2"></i> Categorias </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Machinery</a>
                        <a class="dropdown-item" href="#">Electronics</a>
                        <a class="dropdown-item" href="#">Home textile</a>
                        <a class="dropdown-item" href="#">Home and kitchen</a>
                        <a class="dropdown-item" href="#">Service and equipment</a>
                        <a class="dropdown-item" href="#">Healthcare items</a>
                        <a class="dropdown-item" href="#">Toys and Hobbies</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ready to ship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trade shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sell with us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Demo pages</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="page-index.html">Main</a>
                    <a class="dropdown-item" href="page-category.html">All category</a>
                    <a class="dropdown-item" href="page-listing-large.html">Listing list</a>
                    <a class="dropdown-item" href="page-listing-grid.html">Listing grid</a>
                    <a class="dropdown-item" href="page-shopping-cart.html">Shopping cart</a>
                    <a class="dropdown-item" href="page-detail-product.html">Item detail</a>
                    <a class="dropdown-item" href="page-content.html">Info content</a>
                    <a class="dropdown-item" href="page-user-login.html">Page login</a>
                    <a class="dropdown-item" href="page-user-register.html">Page register</a>
                    <a class="dropdown-item disabled text-muted" href="#">More components</a>
                </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Optener la app</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown">Spanish</a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Russian</a>
                    <a class="dropdown-item" href="#">French</a>
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Chinese</a>
                    </div>
                </li>
            </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>
</header> <!-- section-header.// -->