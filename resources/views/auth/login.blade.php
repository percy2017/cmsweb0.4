@extends('layouts.app')
@section('css')
    <style>
        .form-elegant .font-small {
        font-size: 0.8rem; }

        .form-elegant .z-depth-1a {
        -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
        box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

        .form-elegant .z-depth-1-half,
        .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center py-4">

        <section class="form-elegant">
            <!--Form without header-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card">

                    <div class="card-body mx-4">

                        <!--Header-->
                        <div class="text-center">
                            <h3 class="dark-grey-text mb-5"><strong>Ingreso a {{ setting('site.title')  }}</strong></h3>
                        </div>
                        
                        <!--Body-->
                        <div class="md-form">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="" autofocus>
                            <label for="Form-email1">Correo Electronico</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="">
                            <label for="Form-pass1">Password</label>
                            <p class="font-small blue-text d-flex justify-content-end">Olvidaste tu <a href="{{ route('password.request') }}" class="blue-text ml-1">Contraseña</a></p>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="text-center mb-3">
                            <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Ingresar</button>

                             <a href="/" class="btn btn-block btn-white btn-rounded z-depth-1a">Volver al Home</a> 
                        </div>

                    </form>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> o ingresar con:
                    </p>

                    <div class="row my-3 d-flex justify-content-center">
                        <!--Facebook-->
                       {{--<a href="{{ route('socialLogin', 'facebook') }}" type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i
                            class="fab fa-facebook-f blue-text text-center"></i>
                        </a> --}}
                        <a  href="{{ route('socialLogin', 'facebook') }}" type="button" class="btn  blue-gradient btn-rounded  btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                        <a href="{{ route('socialLogin', 'google') }}" type="button" class="btn btn-rounded btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google   </a>
                        <!--Google +-->
                        {{-- <a href="{{ route('socialLogin', 'google') }}" type="button" class="btn btn-white btn-rounded z-depth-1a"><i
                            class="fab fa-google-plus-g blue-text">
                        </i></a> --}}
                    </div>

                    <!--Footer-->
                    <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">No tienes cuenta<a href="/register"
                        class="blue-text ml-1"> Registrarme</a></p>
                    </div>

                </div>
                <!--/Form without header-->
            </form>
        </section>
    </div>
</div>
@endsection
