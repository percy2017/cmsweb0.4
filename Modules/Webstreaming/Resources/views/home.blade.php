@php
    setlocale(LC_ALL, 'es_ES');
@endphp
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="{{ url('css/font-awesome-animation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nucleo.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/argon.min.css?v=1.2.0') }}" type="text/css">
        <script src="https://kit.fontawesome.com/72111250ba.js" crossorigin="anonymous"></script>
        <title>HiStream | Bienvenido</title>
    </head>

    <body>
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 500px; background-image: url(https://ichef.bbci.co.uk/news/1024/cpsprodpb/158DB/production/_111438288_zoommeeting.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <h1 class="display-2 text-white">Bienvenido, {{ Auth::user()->name }}</h1>
                        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with
                        your work and manage your projects or assigned tasks</p>
                        <a href="{{ route('voyager.dashboard').'/conferencias' }}" class="btn btn-neutral">Ir a Panel de Control</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-profile">
                                <img src="{{ Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/bg.jpg') ) }}"
                                    alt="Image placeholder" class="card-img-top">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 order-lg-2">
                                        <div class="card-profile-image">
                                            <a href="#">
                                                <img src="{{ Voyager::Image(Auth::user()->avatar) }}" class="rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="btn btn-sm btn-info  mr-4 ">cambiar plan</a>
                                        <a href="/" class="btn btn-sm btn-default float-right">volver</a>
                                    </div>
                                </div> --}}
                                <div class="card-body pt-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-profile-stats d-flex justify-content-center">
                                                <div>
                                                    <span class="heading">22</span>
                                                    <span class="description">Friends</span>
                                                </div>
                                                <div>
                                                    <span class="heading">10</span>
                                                    <span class="description">Photos</span>
                                                </div>
                                                <div>
                                                    <span class="heading">89</span>
                                                    <span class="description">Comments</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h5 class="h3">{{ Auth::user()->name }}</h5>
                                        {{-- <div class="h5 font-weight-300">
                                            <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                        </div> --}}
                                        {{-- <div class="h5 mt-4">
                                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                                        </div>
                                        <div>
                                            <i class="ni education_hat mr-2"></i>University of Computer Science
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Reuniones</h3>
                                        </div>
                                        {{-- <div class="col-4 text-right"></div> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @php
                                            $fecha_actual = date('Y-m-d H:i:s');
                                        @endphp
                                        @forelse ($meetings as $item)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <h4>
                                                    <span class="d-inline-block text-truncate" style="max-width: 280px;">{{ $item->name }}</span><br>
                                                    @if ($item->day==date('Y-m-d') && $item->finish < date('H:i:s'))
                                                        <span class="badge badge-warning badge-pill"> Finalizada {{ \Carbon\Carbon::parse($item->day.' '.$item->finish)->diffForHumans() }}</span>
                                                    @elseif ($item->day==date('Y-m-d') && $item->start <= date('H:i:s') && $item->finish >= date('H:i:s'))
                                                        <span class="badge badge-danger badge-pill"> <i class="fa fa-circle faa-flash animated"></i> En curso</span>
                                                    @elseif ($item->day==date('Y-m-d'))
                                                        <span class="badge badge-success badge-pill">Hoy</span>
                                                        <small> {{ date('H:i', strtotime($item->start)) }} </small>
                                                    @else
                                                        <span class="badge badge-primary badge-pill">{{ \Carbon\Carbon::parse($item->day.' '.$item->start)->diffForHumans() }}</span>
                                                    @endif
                                                </h4>
                                                @if ($item->day.' '.$item->finish >= date('Y-m-d H:i:s'))
                                                    <a href="{{ url('conferencia/'.$item->slug) }}" target="_blank"><i class="fa fa-external-link"></i></a>
                                                @endif
                                            </li>
                                        @empty
                                            <h4 class="text-center">Ninguna</h4>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card bg-gradient-info border-0">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title text-uppercase text-muted mb-0 text-white">Descarga la
                                                    </h5>
                                                    <span class="h2 font-weight-bold mb-0 text-white">Aplicación Movil</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                                        <i class="fab fa-google-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-sm">
                                                <span class="text-white mr-2"><i class="fab fa-google-play"></i></span>
                                                <a href="{{ setting('histream.app_android') }}" target="_blank">
                                                    <span class="text-nowrap text-light"> Dale click aquí</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card bg-gradient-danger border-0">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title text-uppercase text-muted mb-0 text-white">Como Crear</h5>
                                                    <span class="h2 font-weight-bold mb-0 text-white">Una conferencia</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                                        <i class="fab fa-youtube"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-sm">
                                                <span class="text-white mr-2"><i class="fa fa-arrow-up"></i></span>
                                                <a href="{{ setting('histream.video_tutorial') }}" target="_blank">
                                                    <span class="text-nowrap text-light">Dale click aquí</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h2 class="mb-0">Información</h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            {{-- <button class="btn btn-primary btn-sm">Editar <i class="fa fa-edit"></i></button> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form _lpchecked="1">
                                        <h3 class="mb-4">Datos personales</h3>
                                        <div class="pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-username">Nombre Completo</label>
                                                        <p>{{ Auth::user()->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Email</label>
                                                        <p>{{ Auth::user()->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">N&deg; de celular</label>
                                                        <p>{{ Auth::user()->phone ?? 'No definido' }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-last-name">Registro</label>
                                                        <p>
                                                            @php
                                                                $fecha = \Carbon\Carbon::parse(Auth::user()->created_at);
                                                            @endphp
                                                            {{ $fecha->formatLocalized('%d de %B de %Y') }} <br>
                                                            <small>{{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="mb-4">Datos de suscripción</h3>
                                        <div class="pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-username">Plan actual</label>
                                                        <p>{{ $suscription->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Estado</label>
                                                        <p><label class="badge badge-{{ $suscription->status ? 'success' : 'danger' }}">{{ $suscription->status ? 'Activo' : 'Inactivo' }}</label></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Inicio</label>
                                                        <p>
                                                            @php
                                                                $fecha = $suscription->start ? \Carbon\Carbon::parse($suscription->start) : 'No definido';
                                                            @endphp
                                                            {{ $suscription->start ? $fecha->formatLocalized('%d de %B de %Y') : $fecha }} <br>
                                                            <small>{{ $suscription->start ? \Carbon\Carbon::parse($suscription->start)->diffForHumans() : '' }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Válido hasta</label>
                                                        <p>
                                                            @php
                                                                $fecha = $suscription->finish ? \Carbon\Carbon::parse($suscription->finish) : 'No definido';
                                                            @endphp
                                                            {{ $suscription->finish ? $fecha->formatLocalized('%d de %B de %Y') : $fecha }} <br>
                                                            <small>{{ $suscription->finish ? \Carbon\Carbon::parse($suscription->finish)->diffForHumans() : '' }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        @if(session('greetings_histream'))
            <!-- Modal -->
            <div class="modal fade" id="modal_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pasarela de pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! setting('histream.greetings') !!}
                            {!! setting('histream.tutorial') !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </body>
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>    
    <script>
        @if(session('greetings_histream'))
            $(document).ready(function(){
                $('#modal_payment').modal('toggle')
            });
        @endif
      </script>
</html>

@php
    session()->forget('greetings_histream');
@endphp
