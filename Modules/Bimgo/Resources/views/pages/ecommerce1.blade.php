@extends('bimgo::layouts.ecommerce1.master')

@section('header')
  @include('bimgo::layouts.ecommerce1.header')
@endsection

@section('menu')
  @include('bimgo::layouts.ecommerce1.menu')
@endsection

@section('content')
  @foreach ($blocks as $item)
    @include('bimgo::blocks.'.$item->name, ['data' => json_decode($item->details)])
  @endforeach
@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce1.footer')
@endsection