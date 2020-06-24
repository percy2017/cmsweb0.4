@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('css')
   <!-- Main SmartWizard CSS -->
<link href="{{ asset('vendor/jqwizard/css/smart_wizard.min.css') }}" rel="stylesheet">
 
<!-- Optional SmartWizard themes -->
<link href="{{ asset('vendor/jqwizard/css/smart_wizard_theme_circles.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/jqwizard/css/smart_wizard_theme_arrows.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/jqwizard/css/smart_wizard_theme_dots.min.css') }}" rel="stylesheet">
@show
@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="mt-5 pt-2">
    {{-- <div class="container"> --}}

        <div class="row">
            <div class="col-md-3">
                <aside>
                    <ul class="list-group">
                        <a class="list-group-item active" href="#"> Menu  </a>
                        <a class="list-group-item" href="#"> Publicaciones </a>
                        <a class="list-group-item" href="#"> Inventario </a>
                        <a class="list-group-item" href="#"> Ventas </a>
                        <a class="list-group-item" href="#"> Reportes </a>
                        <a class="list-group-item" href="#"> Mi Suscripcion </a>
                    </ul>
                </aside> 
            </div>
            <!-- col.// -->
            <div class="col-md-9">
                <article class="card mb-3">
                    <div class="card-body">
                        <div id="body"></div>
                    </div>
                </article>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('vendor/jqwizard/js/jquery.smartWizard.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "{{ route('bg_ajax_admin_welcome') }}",
                success: function (response) {  
                    $('#body').html(response);
                }
            });

        });
         
        function ajax(urli, action)
        {
            switch (action) {
            case 'get':
                $.ajax({
                type: action,
                url: urli,
                success: function (response) {
                    //console.log(response);
                    $('#body').html(response);
                },
                error: function(response){
                    console.log(response);
                    $('#body').html('<div class=text-center"><h3><code>Ups, Ocurrio un error inesperado <br /><br /> 1.-Revise su configuracion <br /><br /> 2.-Vuela a intentarlo una vez mas <br /><br /> 3.-Consulte con el soporte tecnico</code></h3></div>'); 
                    message('error', 'error al cargar los datos');
                }
                });
                break;
            case 'delete':
                Swal.fire({
                title: 'Elimando',
                text: 'Estas segur@ de realizar la accion ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                    type: action,
                    url: urli,
                    data: {
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    success: function (response) {
                        $('#ajax_body').html(response);
                        message('info', 'Dato eliminado');
                    },
                    error: function(response){
                        message('error', 'error al cargar los datos');
                    }
                    });
                }else{
                    message('info', 'accion declinada');
                }
                })
                break;
            }
        }

        function message(type, message)
        {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                });
                Toast.fire({
                icon: type,
                title: message
            });
        }
    </script>


@endsection