@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        <a href="{{ route('voyager.pages.index') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            {{ __('voyager::generic.return_to_list') }}
        </a>
        <a href="{{ route('block_index', $page->id) }}" class="btn btn-success">
            <span class="glyphicon glyphicon-book"></span>&nbsp;
            Blocks
        </a>
        @if(setting('site.page')==$page->slug)
            <a href="#" class="btn btn-default" disabled="disabled">
        @else
            <a href="{{ route('page_default', $page->id) }}" class="btn btn-primary">
        @endif
            <span class="voyager-anchor"></span>&nbsp;
            Establcer Plantilla
        </a>
    </div>

@stop

@section('css')

@endsection
@section('content')

    <div class="page-content container-fluid" id="voyagerBreadEditAdd">
        @include('voyager::alerts')
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary panel-bordered">
                        
                        <div class="panel-body">
                            
                            <form action="{{ route('page_update', $page->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="name" value="{{ $page->name }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Direcion</label>
                                    <input class="form-control" type="text" name="direction" value="{{ $page->direction }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Slug</label>
                                    <input class="form-control" type="text" name="slug" value="{{ $page->slug }}" readonly />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Descripcion</label>
                                    <textarea class="form-control" name="description">{{ $page->description }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <img class="img-responsive" src="{{ Voyager::Image($page->image) }}">
                                    <input class="form-control" type="file" name="image" accept="image/*">
                                </div>
                                <div class="form-group col-md-12">
                                    <hr />
                                </div>
                                <div class="form-group col-md-12">
                                    <h3 class="text-center"><u>Datos Dinamicos</u></h3>
                                </div>
                                @if ($page->details)
                                    @foreach (json_decode($page->details, true) as $item => $value)
                                        @switch($value['type'])
                                            @case('text')
                                                <div class="form-group col-md-{{ $value['width'] }}">
                                                    <label>{{ $value['label'] }}</label>
                                                    <input type="text" class="form-control" name="{{ $value['name'] }}" placeholder="" value="{{ $value['value'] }}">
                                                </div>
                                                @break
                                            @case('text_area')
                                                <div class="form-group col-md-{{ $value['width'] }}">
                                                    <label>{{ $value['label'] }}</label>
                                                    <textarea class="form-control" name="{{ $value['name'] }}" rows="3">{{ $value['value'] }}</textarea>
                                                </div>
                                                @break
                                            @case('rich_text_box')
                                                <div class="form-group col-md-{{ $value['width'] }}">
                                                    <label>{{ $value['label'] }}</label>
                                                    <textarea class="ckeditor" name="{{ $value['name'] }}" rows="3">{{ $value['value'] }}</textarea>
                                                </div>
                                                @break
                                            @case('image')
                                                <div class="form-group col-md-{{ $value['width'] }}">
                                                    <label>{{ $value['label'] }}</label>
                                                    <a href="#" class="voyager-x remove-single-image" style="position:absolute;">Delete</a>
                                            
                                                    <img src="{{ Voyager::Image($value['value']) }}" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                                    <input type="file" name="{{ $value['name'] }}" accept="image/*">
                                                    {{--  <input type="hidden" name="{{ $value['name'] }}-aux" value="{{ $value['value'] }}" />  --}}
                                                </div>
                                                @break
                                            @case('select_dropdown')
                                                <div class="form-group col-md-{{ $value['width'] }}">
                                                    @php
                                                        $miarray = [
                                                            'fas fa-cogs blue-text',
                                                            'fas fa-book blue-text',
                                                            'fas fa-users blue-text',
                                                            'fas fa-tablet-alt blue-text',
                                                            'fas fa-level-up-alt blue-text',
                                                            'fas fa-phone blue-text',
                                                            'far fa-object-group blue-text',
                                                            'fas fa-rocket blue-text',
                                                            'fas fa-cloud-upload-alt blue-text',
                                                            'fas fa-home blue-text',
                                                            'fas fa-users white-text',
                                                            'fas fa-chart-bar blue-text',
                                                            'far fa-calendar-alt mr-2'
                                                        ];
                                                    @endphp
                                                    <label>{{ $value['label'] }}</label>
                                                    <select class="form-control select2" name="{{ $value['name'] }}">
                                                        @foreach ($miarray as $item)
                                                            <option value="{{ $item }}" @if($value['value'] === $item)selected="selected"@endif>
                                                                {{ $item }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @break
                                                @case('space')
                                                <div class="col-md-12">
                                                    <hr />
                                                </div>
                                            @break
                                        @endswitch
                                    @endforeach
                                @else
                                    {{-- <div class="form-group col-md-12 text-center">
                                        <h3><code>No hay datos dimanicos</code></h3>
                                    </div> --}}
                                    {{-- <div class="form-group text-center col-md-12">
                                        <a href="#" class="btn btn-dark"><i class="voyager-plus"></i>Agregar</a> 
                                    </div>
                                     --}}
                                @endif
                               
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                 <div class="form-group text-center col-md-12">
                                    <button type="submit" class="btn btn-primary"><i class="voyager-edit"></i> Guardar</button>
                                    
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
      
               
        </div>
    </div>
@stop

@section('javascript')
<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script src="{{ asset('js/websocket.js') }}"></script>
    <script>
        $(document).ready(function(){
            
        });
    </script>
@endsection