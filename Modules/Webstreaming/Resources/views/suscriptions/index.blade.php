@extends('voyager::master')

@section('page_title', 'Viendo suscripciones')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Suscripciones
        </h1>
        {{-- <a href="#" data-toggle="modal" data-target="#create_modal" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Crear</span>
        </a> --}}
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
                            <div class="col-md-8">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="voyager-list"></span> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="btn-order" data-type="">Por defecto</a></li>
                                        <li><a href="#" class="btn-order" data-type="meeting_count">Más reuniones</a></li>
                                        <li><a href="#" class="btn-order" data-type="meeting_count_active">Más reuniones activas</a></li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <form id="form-search">
                                    <div class="input-group">
                                      <input type="text" id="input-search" class="form-control" placeholder="Buscar...">
                                      <div class="input-group-btn">
                                        <button class="btn btn-default btn-lg" style="margin-top: 0px" type="submit">
                                          <i class="fa fa-search"></i>
                                        </button>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <div id="data-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modals --}}
    <form id="form_edit" method="POST" action='{{ route("suscripciones.update", ["suscripcione" => "1"]) }}' >
        <div class="modal modal-info fade" tabindex="-1" id="modal_edit" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-plus"></i> Editar suscripción</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <input type="hidden" name="ajax" value="1">
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <label for="">Plan</label>
                            <select name="hs_plan_id" class="form-control" required>
                                <option value="" disabled>Elige tu plan</option>
                                @foreach ($plans as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fecha de vencimiento</label>
                            <input type="date" class="form-control" name="finish" min='{{ date('Y-m-d') }}' required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pull-right">Editar</button>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <form id="form_up">
        <input type="hidden" name="ajax" value="1">
        <input type="hidden" name="type" value="up">
        {{ csrf_field() }}
        {{ method_field("PUT") }}
    </form>
    <form id="form_down">
        <input type="hidden" name="ajax" value="1">
        <input type="hidden" name="type" value="down">
        {{ csrf_field() }}
        {{ method_field("PUT") }}
    </form>
    <form id="form_delete">
        <input type="hidden" name="ajax" value="1">
        <input type="hidden" name="type" value="delete">
        {{ csrf_field() }}
        {{ method_field("PUT") }}
    </form>

@stop

@section('css')

@stop

@section('javascript')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var search = '';
        var page_actual = 1;
        var loader = '{{ url("images/loading.gif") }}';
        $(document).ready(function(){
            Notification.requestPermission();
            // Obtener lista de suscripciones
            $('#data-list').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
            list(search, page_actual);

            const Toast = Swal.mixin({
                                toast: true,
                                position: 'bottom-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                onOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            });

            // Send form search
            $('#form-search').on('submit', function(e){
                e.preventDefault();
                search = $('#input-search').val();
                list(search, page_actual);
            });

            // Order
            $('.btn-order').click(function(e){
                e.preventDefault();
                let type = $(this).data('type');
                list(search, page_actual, type);
            });

            // Send form edit
            $('#form_edit').on('submit', function(e){
                e.preventDefault();
                let id = $('#modal_edit input[name="id"]').val();
                let url = '{{ route("suscripciones.update", ["suscripcione" => "_id"]) }}';
                $.post(url.replace('_id', id), $('#form_edit').serialize(), function(res){
                    list(search, page_actual);
                    $('#modal_edit').modal('toggle');
                    Toast.fire({
                        icon: 'success',
                        title: 'Suscripción actualizada'
                    });
                });
            });

            // Escuchando solicitudes de membresía
            Echo.channel('SuscriptionUserChannel')
            .listen('.Modules\\Webstreaming\\Events\\SuscriptionUser', (e) => {
                list(search, page_actual);
                if(Notification.permission==='granted'){
                    let notificacion = new Notification('Nueva suscripción!',{
                        body: `El cliente ${e.user.name} se ha suscrito`,
                        icon: "{{ url('images/icons/icon-512x512.png') }}"
                    });
                }
            });

            // Escuchando solicitudes del cliente
            Echo.channel('PetitionUserChannel')
            .listen('.Modules\\Webstreaming\\Events\\PetitionUser', (e) => {
                if(e.type == 'upgrade'){
                    list(search, page_actual);
                }else{
                    Swal.fire({
                        icon: 'info',
                        title: 'Solicitud reenviada',
                        text: `El cliente ${e.user.name} con numero de celular ${e.user.phone} ha reenviado la solicitud de aprobación de su plan`,
                        // footer: '<a href>Why do I have this issue?</a>'
                    });
                    if(Notification.permission==='granted'){
                        let notificacion = new Notification('Solicitud reenviada!',{
                            body: `El cliente ${e.user.name} te ha reenviado su solicitud`,
                            icon: "{{ url('images/icons/icon-512x512.png') }}"
                        });
                    }
                }
            });

            // Escuchando actividad de los suscritos
            Echo.channel('ActivityUserChannel')
            .listen('.Modules\\Webstreaming\\Events\\ActivityUser', (e) => {
                list(search, page_actual);
            });
            
        });

        // Obtenes lista de registros
        function list(search, page, order = ''){
            let url = '{{ url("admin/suscripciones/list") }}';
            let q = search ? search : 'all';
            $.get(`${url}/${q}/${order}?page=${page_actual}`, function(data){
                $('#data-list').html(data);
            });
        }

        function edit(reg){
            let data = JSON.parse(reg);
            // console.log(data.id)
            $('#form_edit input[name="id"]').val(data.id);
            $('#form_edit select[name="hs_plan_id"]').val(data.hs_plan_id);
            $('#form_edit input[name="finish"]').val(data.finish)
        }

        function up(reg){
            Swal.fire({
                title: 'Deseas continuar?',
                text: "Activar la sucripción",
                icon: 'question',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Continuar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    let url = '{{ route("suscripciones.update", ["suscripcione" => "_id"]) }}';
                    $.post(url.replace('_id', reg), $('#form_up').serialize(), function(res){
                        list(search, page_actual);
                        Swal.fire('Activada!','La sucripción fue activada','success')
                    });
                }
            })
        } 
        function down(reg){
            Swal.fire({
                title: 'Deseas continuar?',
                text: "Dar de baja a la sucripción",
                icon: 'question',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Continuar',
                showCancelButton: true,
                cancelButtonText: 'cancelar',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    let url = '{{ route("suscripciones.update", ["suscripcione" => "_id"]) }}';
                    $.post(url.replace('_id', reg), $('#form_down').serialize(), function(res){
                        list(search, page_actual);
                        Swal.fire('ddada de baja!','La sucripción fue dada de baja','success')
                    });
                }
            })
        }
        function drop(reg){
            Swal.fire({
                title: 'Deseas continuar?',
                text: "Eliminar la sucripción",
                icon: 'question',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Continuar',
                showCancelButton: true,
                cancelButtonText: 'cancelar',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    let url = '{{ route("suscripciones.update", ["suscripcione" => "_id"]) }}';
                    $.post(url.replace('_id', reg), $('#form_delete').serialize(), function(res){
                        list(search, page_actual);
                        Swal.fire('Eliminada!','La sucripción fue eliminada','success')
                    });
                }
            })
        }

    </script>
@stop
