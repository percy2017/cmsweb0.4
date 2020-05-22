@extends('voyager::master')

@section('page_title', 'Viendo conferencias')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-group"></i> Conferencias de {{ $user->name }}
        </h1>
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

    {{-- Modal de participantes --}}
    <div class="modal fade" id="modal_participants" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Participantes suscritos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div style="position:fixed;bottom:-50px">
        <input type="text" id="url_meeting">
    </div>
@stop

@section('css')
@stop

@section('javascript')
    <script src="{{ url('js/image-preview.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var search = '';
        var page_actual = 1;
        var loader = '{{ url("images/loading.gif") }}';
        $(document).ready(function(){

            // Obtener lista de reuniones
            $('#data-list').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
            list(search, page_actual);

            // Escuchando uniones de participantes a las conferencias
            Echo.channel('JoinMeetUserChannel-{{ $user->id }}')
            .listen('.Modules\\Webstreaming\\Events\\JoinMeetUser', (e) => {
                list(search, page_actual);
            });
        });

        // Obtenes lista de registros
        function list(search, page){
            let url = '{{ url("admin/suscripciones/meetings/$user->id/list") }}';
            let q = search ? search : 'all';
            $.get(`${url}/${q}?page=${page_actual}`, function(data){
                $('#data-list').html(data);
            });
        }

        function copy(slug){
            let url = document.getElementById("url_meeting");
            url.value = '{{ url("conferencia") }}/'+slug
            url.select();
            document.execCommand("copy");
        }

        function suscribs_list(id){
            $('#modal_participants .modal-body').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
            $.get('{{ url("admin/conferencias/suscribes/list") }}/'+id, function(res){
                $('#modal_participants .modal-body').html(res);
            })
        }
    </script>
@stop
