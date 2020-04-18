@extends('voyager::master')

@section('page_title', 'Viendo conferencias')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Conferencias
        </h1>
        <a href="#" data-toggle="modal" data-target="#create_modal" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Crear</span>
        </a>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Creación</th>
                                        <th class="actions text-right">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="body-list">
                                    @forelse ($meetings as $item)
                                    <tr id="tr-{{ $item->id }}">
                                        <td id="td-name_{{ $item->id }}">{{ $item->name }}</td>
                                        <td>{{ date('d-m-Y H:i', strtotime($item->created_at)) }} <br> <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small> </td>
                                        <td class="no-sort no-click bread-actions">
                                            {{-- <a href="#" title="Borrar" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
                                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Borrar</span>
                                            </a> --}}
                                            <a href="#" title="Editar" class="btn btn-sm btn-primary pull-right edit" data-toggle="modal" data-target="#edit_modal" onclick="setUpdate({{ $item->id }}, '{{ $item->name }}')">
                                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                                            </a>
                                            <a href="{{ url('meet/'.$item->slug) }}" title="Ir" target="_blank" class="btn btn-sm btn-warning pull-right view">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ir</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4" style="overflow-x:auto">
                                @if(count($meetings)>0)
                                    <p class="text-muted">Mostrando del {{$meetings->firstItem()}} al {{$meetings->lastItem()}} de {{$meetings->total()}} registros.</p>
                                @endif
                            </div>
                            <div class="col-md-8" style="overflow-x:auto">
                                <nav class="text-right">
                                    {{ $meetings->links() }}
                                </nav>
                            </div>
                        </div>
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
        $(document).ready(function(){

            // Crear nueva conferencia
            $('#form_create').on('submit', function(e){
                e.preventDefault();
                let url = '{{ route("conferencias.store") }}';
                $.post(url, $('#form_create').serialize(), function(res){
                    toastr.success('Conferencia ingresada exitosamente.', 'Bien hecho!');
                    addRow(res)
                    $('#create_modal').modal('toggle');
                    setTimeout(() => {
                        var win = window.open("{{ url('meet') }}/"+res.slug, '_blank');
                        win.focus();
                    }, 3000);
                })
                .fail(function() {
                    toastr.error('Ocurrió un error al crear la conferencia.', 'Error!');
                });
            });

            // Editar conferencia
            $('#form_edit').on('submit', function(e){
                e.preventDefault();
                let id = $('#edit_modal input[name="id"]').val();
                let url = '{{ route("conferencias.update", ["conferencia" => "_id"]) }}';
                $.post(url.replace('_id', id), $('#form_edit').serialize(), function(res){
                    $('#edit_modal').modal('toggle');
                    $(`#td-name_${res.id}`).html(res.name)
                    toastr.success('Conferencia actualizada exitosamente.', 'Bien hecho!');
                });
            });
        });

        function setUpdate(id, name){
            $('#edit_modal input[name="id"]').val(id);
            $('#edit_modal input[name="name"]').val(name)
        }

        function addRow(data){
            let current_datetime = new Date(data.created_at)
            let date = current_datetime.getDate() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getFullYear()+ " " + current_datetime.getHours() + ":" + current_datetime.getMinutes();
            let url = "{{ url('meet') }}/"+data.slug;
            $('#body-list').prepend(`
                <tr id="tr-${data.id}">
                    <td id="td-name_${data.id}">${data.name}</td>
                    <td>${date} <br> <small>hace un momento</small> </td>
                    <td class="no-sort no-click bread-actions">
                        <a href="#" title="Editar" class="btn btn-sm btn-primary pull-right edit" data-toggle="modal" data-target="#edit_modal" onclick="setUpdate(${data.id}, '${data.name}')">
                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
                        </a>
                        <a href="${url}" target="_blank" title="Ir" class="btn btn-sm btn-warning pull-right view">
                            <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Ir</span>
                        </a>
                    </td>
                </tr>
            `)
        }
    </script>
@stop
