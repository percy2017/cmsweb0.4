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

@stop

@section('css')

@stop

@section('javascript')
    <script>
        var search = '';
        var page = 1;
        var loader = '{{ url("images/loading.gif") }}';
        $(document).ready(function(){
            // Obtener lista de suscripciones
            $('#data-list').html(`<div class="text-center"><img src="${loader}" height="200px"></div>`);
            get_data(search, page);
            
        });

        // Obtenes lista de registros
        function get_data(search, page){
            let url = '{{ url("admin/suscripciones/list") }}';
            let q = search ? search : 'all';
            $.get(`${url}/${q}?page=${page}`, function(data){
                $('#data-list').html(data);
            });
        }
    </script>
@stop
