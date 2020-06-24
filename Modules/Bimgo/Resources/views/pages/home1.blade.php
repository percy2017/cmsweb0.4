@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection


@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="mt-5 pt-5">
    {{-- <div class="container"> --}}

        <div class="row">
            <div class="col-md-3">
                <aside>
                    <ul class="list-group">
                        <a class="list-group-item active" href="#"> Menu  </a>
                        <a class="list-group-item" href="#"> Mis pedidos </a>
                        <a class="list-group-item" href="#"> Mi lista de deseos </a>
                        <a class="list-group-item" href="#"> Devolución y reembolsos </a>
                        <a class="list-group-item" href="#">Mis proformas </a>
                        <a class="list-group-item" href="#"> Mis Ubicaciones </a>
                        <a class="list-group-item" href="#"> Pedidos recibidos </a>
                        <a class="list-group-item" href="{{ route('bg_admin') }}"> <i class="fa fa-home"></i> Mis Ventas </a>
                    </ul>
                </aside> 
            </div>
            <!-- col.// -->
            <div class="col-md-9">

                {{-- <main> --}}

                    <article class="card mb-3">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <div class="icon"> --}}
                                    <img class="rounded-circle img-sm border" src="{{ Voyager::Image(Auth::user()->avatar) }}">
                                    <input class="form-control" type="file" name="avatar" id="avatar" disabled>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label> Nombre Completo </label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->name }}" disabled />
                                    
                                    </div>
                                    <div class="form-group">
                                        <label> Correo Electronico </label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->email }}" disabled />
                                    </div>
                                    <div class="form-group">
                                        <label> Fecha de Registro </label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->created_at->diffForHumans(Carbon\Carbon::now()) }}" disabled />
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-sm btn-primary">Editar</a>
                                    </div>
                                </div>
                            </div>
                                
                            {{-- <hr/> --}}

                            <article class="card-group">
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h5 class="card-title">38</h5>
                                        <span>Pedidos</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h5 class="card-title">5</h5>
                                        <span>Listas de deseos</span>
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
                            
                        </div>
                    </article> 

                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Órdenes recientes </h5>	

                            <div class="row">
                                <div class="col-md-6">
                                    <figure class="itemside  mb-3">
                                        <div class="aside"><img src="images/items/1.jpg" class="border img-sm"></div>
                                        <figcaption class="info">
                                            <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                            <p>Great item name goes here </p>
                                            <span class="text-warning">Pending</span>
                                        </figcaption>
                                    </figure>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->

                            {{-- <a href="#" class="btn btn-outline-primary"> See all orders  </a> --}}
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                {{-- </main>  --}}
            </div>
        </div>

    {{-- </div>  --}}
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection

@section('js')
@endsection