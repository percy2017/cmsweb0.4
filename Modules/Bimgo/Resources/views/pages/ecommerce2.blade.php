@extends('bimgo::layouts.ecommerce2.master')

@section('header')
  @include('bimgo::layouts.ecommerce2.header')
@endsection

@section('intro')
  @include('bimgo::layouts.ecommerce2.intro')
@endsection

@section('content')
  @foreach ($blocks as $item)
    @include('bimgo::blocks.'.$item->name, ['data' => json_decode($item->details)])
  @endforeach

@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce2.footer')
@endsection