@extends('voyager::master')

@section('page_title','' )

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-play"></i> Clientes
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
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection