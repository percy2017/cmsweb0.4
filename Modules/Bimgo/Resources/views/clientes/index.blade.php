@extends('voyager::master')
@section('page_title','Clientes' )
@include('bimgo::clientes.partials.create')
@include('bimgo::clientes.partials.edit')

@can('browse', app($dataType->model_name))

    @section('page_header')
        <div class="container-fluid">
            <h1 class="page-title">
                <i class="voyager-play"></i> Clientes
            </h1>
            @can('add', app($dataType->model_name))
                <a href="#" data-toggle="modal" data-target="#modalCreateClientes" class="btn btn-success btn-add-new">
                    <i class="voyager-plus"></i> <span>Crear</span>
                </a>
            @endcan
        </div>
    @stop

    @section('content')
        <div class="page-content browse container-fluid">
            @include('voyager::alerts')
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="row">            
                                <div class="col-md-12">            
                                    <section class="clsClientes">
                                        @include('bimgo::clientes.partials.listadoClientes')
                                    </section>            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body text-center">
                    <h3>No tiene los permisos, para Listar</h3>
                    <code>Consulte con el administrador de Sistema, para realizar la accion</code>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endcan
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('vendor/histream/js/jquery-3.4.1.min.js') }}"></script>
<!--  Bootstrap tooltips  -->
<script type="text/javascript" src="{{ asset('vendor/histream/js/popper.min.js') }}"></script>
<!--  Bootstrap core JavaScript  -->
<script type="text/javascript" src="{{ asset('vendor/histream/js/bootstrap.min.js') }}"></script>
<!--  MDB core JavaScript  -->
<script type="text/javascript" src="{{ asset('vendor/histream/js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/Bimgo/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        /******************** FUNCION PARA LA PAGINACIÓN AL HACER CLICK MEDIANTE AJAX ******************/
        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();

            //$('#load a').css('color', '#dfecf6');
            //$('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href');  
            fnListadoClientes(url);
            window.history.pushState("", "", url);
        });
    });

    /******************************** ADICIONA CLIENTE *****************************************/
    $("#btnRegistrar").click(function(){
        var route="{{ route('voyager.bg_customers.store') }}";
        Swal.fire({
        title: 'Agregando',
        text: "Estas segur@ de realizar la accion ? ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        }).then((result) => {
        
            if (result.value) {
                
                $('.form-group .ckeditor').each(function (idx, elt) {
                    CKEDITOR.instances[elt.id].updateElement();
                });
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData($('#frmCliente')[0]),
                    contentType : false,
                    processData : false,
                    success: function (data) {
                        
                        if(data.error)
                        {
                            let message='';
                            $.each(data.error, function(i,item){
                                message = message+'*'+item+'\n';
                            })
                            Swal.fire({
                                icon: 'error',
                                title: message
                            })
                        }else{
                            // $('#ajax_body').html(data);
                            message('success', 'Dato registrado correctamente.');
                            // $("#modalCreateClientes").modal('toggle');
                            fnListadoClientes('/admin/bg_customers');
                        }
                    },
                    error: function (data) {
                        $('#ajax_body').html('<div class="text-center"><h3><code>Ups, Ocurrio un error inesperado <br /><br /> 1.-Revise su configuracion <br /><br /> 2.-Vuela a intentarlo una vez mas <br /><br /> 3.-Consulte con el soporte tecnico</code></h3></div>'); 
                        message('error', 'Error en la accion')
                    },
                });
            }else{
                message('info', 'accion declinada');
            }
        })
        // $.ajax({
        //     type: 'POST',
        //     url: route,
        //     data: new FormData($('#frmCliente')[0]),
        //     contentType : false,
        //     processData : false,
        //     success: function (data) {
                
        //         if(data.error)
        //         {
        //             let message='';
        //             $.each(data.error, function(i,item){
        //                 message = message+'*'+item+'\n';
        //             })
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: message
        //             })
        //         }else{
        //             // $('#ajax_body').html(data);
        //             message('success', 'Dato registrado correctamente.');
        //             // $("#modalCreateClientes").modal('toggle');
        //             fnListadoClientes('/admin/bg_customers');
        //         }
        //     },
        //     error: function (data) {
        //         $('#ajax_body').html('<div class="text-center"><h3><code>Ups, Ocurrio un error inesperado <br /><br /> 1.-Revise su configuracion <br /><br /> 2.-Vuela a intentarlo una vez mas <br /><br /> 3.-Consulte con el soporte tecnico</code></h3></div>'); 
        //         message('error', 'Error en la accion')
        //     },
        // });                 
    });

    /******************************** ACTUALIZA CLIENTE *****************************************/
    $("#btnActualizar").click(function(){        
        var value =$("#id").val();
        //console.log(new FormData($('#frmClienteA')));
        
        //var route="/voyager.bg_customers/"+value+"";
        // v/ar route7="{{ route('voyager.bg_customers.update',141) }}";
        var route = '{{ route("voyager.bg_customers.update", ":id") }}';
        route = route.replace(':id', value);
        Swal.fire({
        title: 'Actualizando',
        text: "Estas segur@ de realizar la accion ?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        }).then((result) => {
            $('.form-group .ckeditor').each(function (idx, elt) {
                CKEDITOR.instances[elt.id].updateElement();
            });
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData($('#frmClienteA')[0]),
                    contentType : false,
                    processData : false,
                    success: function (data) {
                        if(data.error)
                        {
                            let message='';
                            $.each(data.error, function(i,item){
                                message = message+'*'+item+'\n';
                            })
                            Swal.fire({
                                icon: 'error',
                                title: message,
                            })
                        }else{
                            $('#ajax_body').html(data);
                            message('success', 'Dato actualizado correctamente.');
                            fnListadoClientes('/admin/bg_customers');
                        }
                    },
                    error: function (data) {
                        $('#ajax_body').html('<div class="text-center"><h3><code>Ups, Ocurrio un error inesperado <br /><br /> 1.-Revise su configuracion <br /><br /> 2.-Vuela a intentarlo una vez mas <br /><br /> 3.-Consulte con el soporte tecnico</code></h3></div>'); 
                        message('error', 'Error en la accion')
                    },
                });
            }else{
                message('info', 'accion declinada');
            }
        })                
    });

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

    /******************************** LISTADO DE MODULOS *****************************************/
    function fnListadoClientes(url) {
        console.log("funcionnnn",url);
        var route =url;         
        $.get(route, function(data){
            $('.clsClientes').html(data);  
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: "Modulo...",
                text: "Los Moduloes no se puede cargar",
                confirmButtonColor: "#EF5350",
                confirmButtonText: 'Aceptar',
                type: "error"
            });             
        });
    }

    /******************************** OBTIENE DATOS DE CLIENTE *****************************************/
    function fnDatoCliente(dato) {
        console.log("dato",dato);    
        $("#id").val(dato.id);
        $("#ddlTipoPersonaA").val(dato.type_person);
        // $("#txtEmpresaA").val(dato.name);
        // $("#txtNITA").val(dato.nit);
        // $("#txtClienteA").val(dato.usuario.name);
        // $("#txtCorreoA").val(dato.usuario.email);
        // $("#txtDireccionA").val(dato.adress);
        // $("#txtCelularA").val(dato.phone);
        // $("#txtTelefonoA").val(dato.phone_number);
        document.forms["frmClienteA"]["ddlTipoPersona"].value = dato.type_person;
        document.forms["frmClienteA"]["txtEmpresa"].value = dato.name;
        document.forms["frmClienteA"]["txtNIT"].value = dato.nit;
        document.forms["frmClienteA"]["txtCliente"].value = dato.usuario.name;
        document.forms["frmClienteA"]["txtCorreo"].value = dato.usuario.email;
        document.forms["frmClienteA"]["txtDireccion"].value = dato.adress;
        document.forms["frmClienteA"]["txtCelular"].value = dato.phone;
        document.forms["frmClienteA"]["txtTelefono"].value = dato.phone_number;
    }
    function ajax(urli, action)
    {
      //alert(urli);
      switch (action) {
        case 'get':
          <?php $admin_loader_img = Voyager::setting('admin.loader', ''); ?>
          $('#ajax_body').html('<div id="voyager-loader"><img src="@if($admin_loader_img == '') {{ voyager_asset('images/logo-icon.png') }} @else {{ Voyager::Image(setting('admin.loader')) }}@endif"></div>');
          $.ajax({
            type: action,
            url: urli,
            success: function (response) {
                $('#ajax_body').html(response);
            },
            error: function(response){
              $('#ajax_body').html('<div class="text-center"><h3><code>Ups, Ocurrio un error inesperado <br /><br /> 1.-Revise su configuracion <br /><br /> 2.-Vuela a intentarlo una vez mas <br /><br /> 3.-Consulte con el soporte tecnico</code></h3></div>'); 
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
              <?php $admin_loader_img = Voyager::setting('admin.loader', ''); ?>
              $('#ajax_body').html('<div id="voyager-loader"><img src="@if($admin_loader_img == '') {{ voyager_asset('images/logo-icon.png') }} @else {{ Voyager::Image(setting('admin.loader')) }}@endif"></div>');
              $.ajax({
                type: action,
                url: urli,
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content")
                },
                success: function (response) {
                  $('#ajax_body').html(response);
                  message('info', 'Dato eliminado');
                  fnListadoClientes('/admin/bg_customers');
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
        case 'recovery':
          Swal.fire({
            title: 'Recuperando',
            text: 'Estas segur@ de realizar la accion ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            }).then((result) => {
            if (result.value) {
              <?php $admin_loader_img = Voyager::setting('admin.loader', ''); ?>
              $('#ajax_body').html('<div id="voyager-loader"><img src="@if($admin_loader_img == '') {{ voyager_asset('images/logo-icon.png') }} @else {{ Voyager::Image(setting('admin.loader')) }}@endif"></div>');
              $.ajax({
                type: 'get',
                url: urli,
                success: function (response) {
                  $('#ajax_body').html(response);
                  message('success', 'Dato recuperado');
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
</script>