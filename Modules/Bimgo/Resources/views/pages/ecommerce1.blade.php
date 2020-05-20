@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
  @foreach ($blocks as $item)
    @switch($item->type)
      @case('dinamyc-data')
          @include('bimgo::blocks.'.$item->name, ['data' => json_decode($item->details)])
          @break
      @case('controller')
        @php
          $aux = json_decode($item->details);
          $data = $aux->value;
          $data = str_replace('"','',$data); 
          //$data = Modules\Bimgo\Http\Controllers\Ecommerce1Controller::products();
        @endphp
        {{ dd($data) }}
        @include('bimgo::blocks.'.$item->name, ['data' => $data])
        @break
    @endswitch
   
  @endforeach
@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection