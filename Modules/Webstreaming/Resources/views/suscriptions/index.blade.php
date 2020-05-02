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
                    })
                });
            });

            // Escuchando solicitudes de membresía
            Echo.channel('SuscriptionUserChannel')
            .listen('.Modules\\Webstreaming\\Events\\SuscriptionUser', (e) => {
                list(search, page_actual);
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
                    })
                }
            });
            
        });

        // Obtenes lista de registros
        function list(search, page){
            let url = '{{ url("admin/suscripciones/list") }}';
            let q = search ? search : 'all';
            $.get(`${url}/${q}?page=${page_actual}`, function(data){
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
