@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

@section('css')
@show

@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <ul class="list-group">
                    <a class="list-group-item active" href="#"> Mi Cuenta  </a>
                    <a class="list-group-item" href="#"> Mis Ordenes </a>
                    <a class="list-group-item" href="#"> Mis Favoritos </a>
                    <a class="list-group-item" href="#"> Devolución y reembolsos</a>
                    {{--  <a class="list-group-item" href="#">Configuraciones </a>  --}}
                    {{--  <a class="list-group-item" href="#"> My Selling Items </a>  --}}
                    <a class="list-group-item" href="#"> Pedidos recibidos </a>
                </ul>
            </aside> <!-- col.// -->
            <main class="col-md-9">

                <article class="card mb-3">
                    <div class="card-body">
                        
                        <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border" src="{{ Voyager::image(Auth::user()->avatar) }}">
                                </div>
                                <div class="text">
                                    <strong> {{ Auth::user()->name }} </strong> <br> 
                                    {{ Auth::user()->email }}<br> 
                                    <a href="#">Editar</a>
                                </div>
                        </figure>
                        <hr>
                        <p>
                            <i class="fa fa-map-marker text-muted"></i> &nbsp; Mi Direccion:  
                            <br>
                            Tashkent city, Street name, Building 123, House 321 &nbsp 
                            <a href="#" class="btn-link"> Editar</a>
                        </p>

                        

                        <article class="card-group">
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">38</h5>
                                    <span>Ordenes</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">5</h5>
                                    <span>Favoritos</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">12</h5>
                                    <span>A la espera de la entrega</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">50</h5>
                                    <span>Artículos entregados</span>
                                </div>
                            </figure>
                        </article>
                        

                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

                <article class="card  mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Recent orders </h5>	

                        <div class="row">
                        <div class="col-md-6">
                            <figure class="itemside  mb-3">
                                <div class="aside"><img src="{{  asset('vendor/bimgo/bootstrap/images/items/1.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Great item name goes here </p>
                                    <span class="text-warning">Pending</span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <div class="col-md-6">
                            <figure class="itemside  mb-3">
                                <div class="aside"><img src="{{  asset('vendor/bimgo/bootstrap/images/items/2.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Machine for kitchen to blend </p>
                                    <span class="text-success">Departured</span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <div class="col-md-6">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="{{  asset('vendor/bimgo/bootstrap/images/items/3.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Ladies bag original leather </p>
                                    <span class="text-success">Shipped  </span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->

                    <a href="#" class="btn btn-outline-primary"> Ver todas las ordenes  </a>
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

            </main> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce3.footer')
@endsection 

@section('js')
@show