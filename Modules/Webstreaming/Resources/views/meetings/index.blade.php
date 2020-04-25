@extends('voyager::master')

@section('page_title', 'Viendo conferencias')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Conferencias
        </h1>
        @if ($suscription || Auth::user()->role_id == 1)
            <a href="#" data-toggle="modal" data-target="#create_modal" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>Crear</span>
            </a>
        @endif
        
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
                    Para cambiar de plan presiona
                    <code><a href="#">aquí.</a></code>
                </div>
            @endif
        @else
            <div class="alert alert-warning">
                <strong>Información:</strong>
                <p>{{ setting('histream.suscribre') }}</p>
                Para cambiar de plan presiona
                <code><a href="#">aquí.</a></code>
            </div>
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
                        <div class="form-group">
                            <label>Inicio de la reunión</label>
                            <input type="datetime" class="form-control datepicker" name="start" required />
                        </div>
                        @if ($suscription)
                            @if ($suscription->hs_plan_id == 1)
                                <div class="alert alert-info">
                                    <p>Tenga en cuanta que su reunión debe tener un tiempo maximo de <code>{{ $suscription->max_time }}</code> a partir de la hora de inicio.</p>
                                </div>
                            @endif
                        @endif
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
                        <div class="form-group">
                            <label>Inicio de la reunión</label>
                            <input type="datetime" class="form-control datepicker" name="start"  required />
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
@stop

@section('css')

@stop

@section('javascript')
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

            // Crear nueva conferencia
            $('#form_create').on('submit', function(e){
                e.preventDefault();
                let url = '{{ route("conferencias.store") }}';
                $.post(url, $('#form_create').serialize(), function(res){
                    Toast.fire({
                        icon: 'success',
                        title: 'Conferencia ingresada'
                    });
                    list(search, page_actual);
                    $('#create_modal').modal('toggle');
                    setTimeout(() => {
                        var win = window.open("{{ url('meet') }}/"+res.slug, '_blank');
                        win.focus();
                    }, 3000);
                })
                .fail(function() {
                    Toast.fire({
                        icon: 'error',
                        title: 'Ocurrió un error al crear la conferencia'
                    });
                });
            });

            // Editar conferencia
            $('#form_edit').on('submit', function(e){
                e.preventDefault();
                let id = $('#edit_modal input[name="id"]').val();
                let url = '{{ route("conferencias.update", ["conferencia" => "_id"]) }}';
                $.post(url.replace('_id', id), $('#form_edit').serialize(), function(res){
                    $('#edit_modal').modal('toggle');
                    list(search, page_actual);
                    Toast.fire({
                        icon: 'success',
                        title: 'Conferencia actualizada'
                    });
                });
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

        function setUpdate(id, name, start){
            $('#edit_modal input[name="id"]').val(id);
            $('#edit_modal input[name="name"]').val(name);
            $('#edit_modal input[name="start"]').val(start);
        }
    </script>
@stop
