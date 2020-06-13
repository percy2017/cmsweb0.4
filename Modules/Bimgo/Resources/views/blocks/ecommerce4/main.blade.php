<!-- ========================= SECTION MAIN  ========================= -->
<section class="section-main padding-y">
    <main class="card">
        <div class="card-body">
            <div class="row">
                <aside class="col-lg col-md-3 flex-lg-grow-0">
                    <h6>Sub Categorias</h6>
                    <nav class="nav-home-aside">
                        <ul class="menu-category">
                            <li><a href="{{ $data->link1->value }}">{{ $data->text1->value }}</a></li>
                            <li><a href="{{ $data->link2->value }}">{{ $data->text2->value }}</a></li>
                            <li><a href="{{ $data->link3->value }}">{{ $data->text3->value }}</a></li>
                            <li><a href="{{ $data->link4->value }}">{{ $data->text4->value }}</a></li>
                            <li><a href="{{ $data->link5->value }}">{{ $data->text5->value }}</a></li>
                            <li><a href="{{ $data->link6->value }}">{{ $data->text6->value }}</a></li>
                            <li><a href="{{ $data->link7->value }}">{{ $data->text7->value }}</a></li>
                            <li class="has-submenu"><a href="#">{{ $data->textmaster->value }}</a>
                                <ul class="submenu">
                                    <li><a href="{{ $data->linkmaster1->value }}">{{ $data->textmaster1->value }}</a></li>
                                    <li><a href="{{ $data->linkmaster2->value }}">{{ $data->textmaster2->value }}</a></li>
                                    <li><a href="{{ $data->linkmaster3->value }}">{{ $data->textmaster3->value }}</a></li>
                                    <li><a href="{{ $data->linkmaster4->value }}">{{ $data->textmaster4->value }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </aside>
                <div class="col-md-9 col-xl-7 col-lg-7">

                    <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
                    <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                            <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Voyager::image($data->image1->value) }}" alt="First slide"> 
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Voyager::image($data->image2->value) }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Voyager::image($data->image3->value) }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> 
                    <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->	

                </div>
                <div class="col-md d-none d-lg-block flex-grow-1">
                    <aside class="special-home-right">
                        <h6 class="bg-blue text-center text-white mb-0 p-2">Categorias Populares</h6>
                        
                        <div class="card-banner border-bottom">
                            <div class="py-3" style="width:80%">
                                <h6 class="card-title">{{ $data->title10->value }}</h6>
                                <a href="{{ $data->link10->value }}" class="btn btn-secondary btn-sm"> Ver Productos </a>
                            </div> 
                            <img src="{{ Voyager::image($data->image10->value) }}" height="80" class="img-bg">
                        </div>

                        <div class="card-banner border-bottom">
                            <div class="py-3" style="width:80%">
                                <h6 class="card-title">{{ $data->title11->value }} </h6>
                                <a href="{{ $data->link11->value }} " class="btn btn-secondary btn-sm"> Ver Productos </a>
                            </div> 
                            <img src="{{ Voyager::image($data->image11->value) }}" height="80" class="img-bg">
                        </div>

                        <div class="card-banner border-bottom">
                            <div class="py-3" style="width:80%">
                                <h6 class="card-title">{{ $data->title12->value }}</h6>
                                <a href="{{ $data->link12->value }}" class="btn btn-secondary btn-sm"> Ver Productos </a>
                            </div> 
                            <img src="{{ Voyager::image($data->image12->value) }}" height="80" class="img-bg">
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </main>
</section>
<!-- ========================= SECTION MAIN END// ========================= -->