@extends('voyager::master')

@section('page_title', 'Viendo conferencias')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Conferencias
        </h1>
        <a href="#" data-toggle="modal" data-target="#create_modal" class="btn btn-success btn-sm btn-add-new">
            <i class="voyager-plus"></i> <span>Crear</span>
        </a>
        
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        @if ($suscription)
            @if ($suscription->hs_plan_id == 1)
                <div class="alert alert-info">
                    <strong>Información:</strong>
                    <p>{{ setting('histream.upgrade') }}</p>
                    Para solicitar el cambio de plan presiona
                    <code><a href="#" data-toggle="modal" data-target="#modal_upgrade">aquí.</a></code>
                </div>
            @else
                @if ($suscription->status == '')
                    <div class="alert alert-info">
                        <strong>Información:</strong>
                        <p>{{ setting('histream.waiting') }}</p>
                        En caso de que tu solicitud haya tardado demasiado, para solicitarla nuevamente presiona
                        <code><a href="#" id="btn-request">aquí.</a></code>
                    </div>
                @elseif($suscription->status == 2)
                    <div class="alert alert-info">
                        <strong>Información:</strong>
                        <p>{{ setting('histream.suscribre') }}</p>
                        Para cambiar de plan presiona
                        <code><a href="#">aquí.</a></code>
                    </div>
                @endif
            @endif
        @endif
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

    {{-- Modals --}}
    <form id="form_petition" action="{{ route('petition_user') }}" method="POST">
        <div class="modal modal-info fade" tabindex="-1" id="modal_upgrade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-certificate"></i> Solicitar cambio de plan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $suscription->id }}">
                            <input type="hidden" name="type" value="upgrade">
                            <input type="hidden" name="ajax" value="1">
                            <label for="">Plan</label>
                            <select name="plan_id" class="form-control" required>
                                <option value="" disabled>Elige tu plan</option>
                                @foreach (Modules\Webstreaming\Entities\Plan::all() as $item)
                                    <option @if($suscription->hs_plan_id==$item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center" id="message-redirect" style="display: none">
                            <p class="text-muted">Redireccinando...</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pull-right">Solicitar</button>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="form_request">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $suscription->id }}">
        <input type="hidden" name="type" value="request">
        <input type="hidden" name="ajax" value="1">
    </form>


    <form action="{{ route("conferencias.store") }}" id="form_create" method="POST">
        <div class="modal modal-success fade" tabindex="-1" id="create_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-plus"></i> Crear conferencia</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="ajax" value="1">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" autofocus required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-4 form-p0">
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" name="day" value="{{ date('Y-m-d') }}" required />
                                </div>
                                <div class="form-group col-md-4 form-p0">
                                    <label>Inicio</label>
                                    <input type="time" class="form-control input-start" data-name="start_create" name="start" required />
                                </div>
                                <div class="form-group col-md-4 form-p0">
                                    <label>Fin</label>
                                    <input type="time" class="form-control" name="finish" required />
                                </div>
                            </div>
                        </div>
                        @if ($suscription)
                            @if ($suscription->hs_plan_id == 1)
                                <div class="alert alert-info">
                                    <p>Tenga en cuenta que su reunión debe tener un tiempo maximo de <code>{{ $suscription->max_time }}</code> a partir de la hora de inicio.</p>
                                </div>
                            @endif
                        @endif
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="descriptions" class="form-control" placeholder="Descripción breve de la conferencia" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="">Banner</label>
                            <br>
                            <div style="text-align:center; margin-top: 5px">
                                <input type='file' name="banner" class="input-preview" id="input-preview-c" data-index="-c" />
                                <img class="img-preview" id="img-preview-c" data-toggle="tooltip" title="Has click para agregar una imagen" data-index="-c" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success pull-right">Crear</button>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="#" id="form_edit" method="POST">
        <div class="modal modal-info fade" tabindex="-1" id="edit_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-plus"></i> Editar conferencia</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <input type="hidden" name="ajax" value="1">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" autofocus required>
                            <input type="hidden" name="id">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-4 form-p0">
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" name="day" value="{{ date('Y-m-d') }}" required />
                                </div>
                                <div class="form-group col-md-4 form-p0">
                                    <label>Inicio</label>
                                    <input type="time" class="form-control input-start" data-name="start_edit" name="start" required />
                                </div>
                                <div class="form-group col-md-4 form-p0">
                                    <label>Fin</label>
                                    <input type="time" class="form-control" name="finish" required />
                                </div>
                            </div>
                        </div>
                        @if ($suscription)
                            @if ($suscription->hs_plan_id == 1)
                                <div class="alert alert-info">
                                    <p>Tenga en cuenta que su reunión debe tener un tiempo maximo de <code>{{ $suscription->max_time }}</code> a partir de la hora de inicio.</p>
                                </div>
                            @endif
                        @endif
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="descriptions" class="form-control" placeholder="Descripción breve de la conferencia" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="">Banner</label>
                            <br>
                            <div style="text-align:center; margin-top: 5px">
                                <input type='file' name="banner" class="input-preview" id="input-preview-e" data-index="-e" />
                                <img class="img-preview" id="img-preview-e" data-toggle="tooltip" title="Has click para agregar una imagen" data-index="-e" />
                            </div>
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

    {{-- Controles auxiliares --}}
    <div style="position:fixed;bottom:-50px">
        <input type="text" id="url_meeting">
    </div>
@stop

@section('css')
    <style>
        .form-p0{
            padding: 0px !important
        }
    </style>
@stop

@section('javascript')
    <script src="{{ url('js/image-preview.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var search = '';
        var page_actual = 1;
        var loader = '{{ url("images/loading.gif") }}';
        $(document).ready(function(){
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
            // Obtener lista de reuniones
            $('#data-list').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
            list(search, page_actual);

            $('.input-start').change(function(){
                let hour_start = $(this).val();
                let max_time = '{{ $suscription->status }}' == 1 ? '{{ $suscription->max_time }}' : '{{ $plan_free->max_time }}';
                let hour = hour_start.split(':');
                max_time = max_time.split(':');

                // Crear la fecha maxima de finalización a partir de la hora de inicio y el máximo de horas permitidas
                let hour_finish = parseInt(hour[0])+parseInt(max_time[0]); // Obtener la hora para verificar que no se pase de las 23:59
                let finish = new Date(
                    0, 0, 0,
                    hour_finish <= 23 ? hour_finish : 23,
                    hour_finish <= 23 ? parseInt(hour[1])+parseInt(max_time[1]) : 59,
                    0
                );
                if($(this).data('name')=='start_create'){
                    $('#form_create input[name="finish"]').attr('min', hour_start);
                    $('#form_create input[name="finish"]').attr('max', `${finish.getHours().toString().padStart(2, 0)}:${finish.getMinutes().toString().padStart(2, 0)}`);
                }else{
                    $('#form_edit input[name="finish"]').attr('min', hour_start);
                    $('#form_edit input[name="finish"]').attr('max', `${finish.getHours().toString().padStart(2, 0)}:${finish.getMinutes().toString().padStart(2, 0)}`);
                }
            });

            // Crear nueva conferencia
            $('#form_create').on('submit', function(e){
                e.preventDefault();
                let url = '{{ route("conferencias.store") }}';
                let formData = new FormData(document.getElementById("form_create"));
                formData.append("dato", "valor");
                $.ajax({
                    url, type: 'post', dataType: "html", data: formData, cache: false, contentType: false, processData: false,
                    success: function(res){
                        Toast.fire({
                            icon: 'success',
                            title: 'Conferencia ingresada'
                        });
                        list(search, page_actual);
                        $('#create_modal').modal('toggle');
                    },
                    error: function() {
                        Toast.fire({
                            icon: 'error',
                            title: 'Ocurrió un error al crear la conferencia'
                        });
                    }
                });
            });

            // Editar conferencia
            $('#form_edit').on('submit', function(e){
                e.preventDefault();
                let id = $('#edit_modal input[name="id"]').val();
                let url = '{{ route("conferencias.update", ["conferencia" => "_id"]) }}';
                let formData = new FormData(document.getElementById("form_edit"));
                formData.append("dato", "valor");
                $.ajax({
                    url: url.replace('_id', id), type: 'post', dataType: "html", data: formData, cache: false, contentType: false, processData: false,
                    success: function(res){
                        $('#edit_modal').modal('toggle');
                        list(search, page_actual);
                        Toast.fire({
                            icon: 'success',
                            title: 'Conferencia actualizada'
                        });
                    },
                    error: function() {
                        Toast.fire({
                            icon: 'error',
                            title: 'Ocurrió un error al editar la conferencia'
                        });
                    }
                });
            });

            $('#form_petition').on('submit', function(e){
                e.preventDefault();
                let url = "{{ route('petition_user') }}";
                $.post(url, $('#form_petition').serialize(), function(res){
                    Toast.fire({
                        icon: 'success',
                        title: 'Solicitud realizada'
                    });
                    $('#message-redirect').css('display', 'block');
                    setTimeout(() => {
                        location.reload();
                    }, 3100);
                });
            });

            $('#btn-request').click(function(){
                let url = "{{ route('petition_user') }}";
                Swal.fire({
                    title: 'Deseas reenviar la solicitud?',
                    text: "Se enviará una notificación a nuestro personal para que haga los cambios correspondientes",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, reenviar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.value) {
                        $.post(url, $('#form_request').serialize(), function(res){
                            Swal.fire('Reenviada!', 'Tu solicitud ha sido reenviada.', 'success');
                        });
                    }
                })
            });

            // Escuchando uniones de participantes a las conferencias
            Echo.channel('JoinMeetUserChannel-{{ Auth::user()->id }}')
            .listen('.Modules\\Webstreaming\\Events\\JoinMeetUser', (e) => {
                list(search, page_actual);
            });

            // Escuchando activación del plan solicitado
            Echo.channel('SuscriptionActiveUserChannel-{{ Auth::user()->id }}')
            .listen('.Modules\\Webstreaming\\Events\\SuscriptionActiveUser', (e) => {
                Swal.fire({
                    title: 'Tu suscripción ha sido activada',
                    text: 'Para aplicar los cambios debe actualizar la página',
                    icon: 'info',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Actualizar',
                    showCancelButton: true,
                    cancelButtonText: 'Más tarde',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.value) {
                        location.reload();
                    }
                })
            });
        });

        // Obtenes lista de registros
        function list(search, page){
            let url = '{{ url("admin/conferencias/list") }}';
            let q = search ? search : 'all';
            $.get(`${url}/${q}?page=${page_actual}`, function(data){
                $('#data-list').html(data);
            });
        }

        function edit(reg){
            let data = JSON.parse(reg);
            $('#edit_modal input[name="id"]').val(data.id);
            $('#edit_modal input[name="name"]').val(data.name);
            $('#edit_modal input[name="day"]').val(data.day);
            $('#edit_modal input[name="start"]').val(data.start);
            $('#edit_modal input[name="finish"]').val(data.finish);
            $('#edit_modal textarea[name="descriptions"]').val(data.descriptions);
            if(data.banner){
                $(`#img-preview-e`).attr('src', `/storage/${data.banner}`);
            }else{
                $(`#img-preview-e`).attr('src', `/images/upload.png`);
            }
            
        }

        function copy(slug){
            let url = document.getElementById("url_meeting");
            url.value = '{{ url("conferencia") }}/'+slug
            url.select();
            document.execCommand("copy");
        }
    </script>
@stop
