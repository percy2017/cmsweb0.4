<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $page->name }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/histream/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('vendor/histream/css/mdb.min.css') }}" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('vendor/whatsapp/floating-wpp.css') }}">
    <style>
      .md-outline.select-wrapper+label {
        top: .6em !important;
        z-index: 2 !important;
      }
    </style>
    @laravelPWA
  </head>

  <body class="coworking-page">

    <!-- Main navigation -->
    <header>
      @yield('header')
    </header>
    <!-- Main navigation -->

    <!-- Main layout -->
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>
    <!-- Main layout -->
      <!--Modal: Login / Register Form-->
      <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <!--Content-->
          <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs md-tabs tabs-2 purple  darken-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    iniciar sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Registrarse</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body mb-1">
                    <div class="md-form form-sm mt-0">
                      <a type="button"  href="{{ route('socialLogin', 'facebook') }}" class="btn btn-block btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                      <a type="button"  href="{{ route('socialLogin', 'google') }}"class="btn btn-block btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google </a>
                    </div>   
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> 
                      o Inicie sesión con :
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                       {{--  <input type="email" id="modalLRInput10" class="form-control form-control-sm validate"> --}}
                        <input type="email" id="email" class="form-control form-control-sm validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="" autofocus>
                        <label data-error="wrong" data-success="right" for="modalLRInput10">Tu email</label>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        {{-- <input type="password" id="modalLRInput11" class="form-control form-control-sm validate"> --}}
                        <input type="password" id="password" class="form-control form-control-sm validate  @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="">
                        <label data-error="wrong" data-success="right" for="modalLRInput11">Tu Contraseña</label>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>

                      <div class="text-center mt-2">
                        <button type="submit" class="btn btn-purple">iniciar sesión<i class="fas fa-sign-in ml-1"></i></button>
                      </div>

                    </form>
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                     {{--  <p>¿No es un miembro? <a href="#" class="purple-text">Regístrate</a></p> --}}
                      <p>¿Se te olvidó tu <a href="{{ route('password.request') }}"  target="_blank" class="purple-text">contraseña</a></p>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-purple waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
                  </div>

                </div>
                <!--/.Panel 7-->

                <!--Panel 8-->
                <div class="tab-pane fade" id="panel8" role="tabpanel">

                  <!--Body-->
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="modal-body">
                  
                      <div class="md-form form-sm mb-5">
                        <i class="fas fa-user  prefix"></i>
                        <input type="text" id="name" class="form-control form-control-sm validate  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                        {{-- <input type="text" id="modalLRInput12" class="form-control form-control-sm validate"> --}}
                        <label data-error="incorrecto" data-success="correcto" for="modalLRInput12">Nombre Completo</label>
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="email" class="form-control form-control-sm validate @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        {{-- <input type="email" id="modalLRInput13" class="form-control form-control-sm validate"> --}}
                        <label data-error="incorrecto" data-success="correcto" for="modalLRInput13">Email</label>
                        @error('email')
                                <div class="text-center">
                                    <b  style="color: #dc3545; font-size:12px">El email ingresado es inválido o ya existe</b>
                                </div>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                      </div>

                      <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="password" class="form-control form-control-sm validate @error('password') is-invalid @enderror" name="password" required>
                        {{-- <input type="password" id="modalLRInput14" class="form-control form-control-sm validate"> --}}
                        <label data-error="incorrecto" data-success="correcto" for="modalLRInput14">Contraseña</label>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                      </div>

                      <div class="md-form">
                        @captcha
                        <input type="text" class="form-control @error('captcha') is-invalid @enderror" id="captcha" name="captcha" autocomplete="off" placeholder="Ingresa el codigo de la imagen">
                        @error('captcha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       </div>

                      <div class="text-center form-sm mt-2">
                        <button type="submit" class="btn btn-purple">Registrarse<i class="fas fa-sign-in ml-1"></i></button>
                      </div>
                    </form>  
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    {{-- <div class="options text-center text-md-right mt-1">
                      <p>Ya tienes cuenta?<a data-toggle="tab" href="#panel7" role="tab" class="purple-text">Iniciar Sesion</a></p>
                    </div> --}}
                    <button type="button" class="btn btn-sm btn-outline-purple waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
                <!--/.Panel 8-->
              </div>

            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
     <!--Modal: Login / Register Form--
    <!-- Footer -->
    @include('bimgo::layouts.footer')
    <div id="myWP"></div>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
    <!--  Bootstrap tooltips  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.js') }}"></script>
    <!--  Bootstrap core JavaScript  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
    <!--  MDB core JavaScript  -->
    <script type="text/javascript" src="{{ asset('vendor/histream/js/mdb.min.js') }}"></script>
    <script src="{{ asset('vendor/whatsapp/floating-wpp.js') }}"></script>

    

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
      $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
        $(this).closest('.select-outline').find('label').toggleClass('active');
        $(this).closest('.select-outline').find('.caret').toggleClass('active');
      });
    });

    $('#myWP').floatingWhatsApp({
            phone: '{{ setting('whatsapp.phone') }}',
            popupMessage: '{{ setting('whatsapp.popupMessage') }}',
            message: '{{ setting('whatsapp.message') }}',
            showPopup: true,
            showOnIE: true,
            headerTitle: '{{ setting('whatsapp.headerTitle') }}',
            headerColor: '{{ setting('whatsapp.color') }}',
            backgroundColor: '{{ setting('whatsapp.color') }}',
            buttonImage: '<img src="{{ Voyager::Image(setting('whatsapp.buttonImage' )) }}" />',
            position: '{{ setting('whatsapp.position') }}',
            autoOpenTimeout: {{ setting('whatsapp.autoOpenTimeout') }},
            size: '{{ setting('whatsapp.size') }}'
            });

    </script>
   @yield('javascript')
  </body>
</html>