@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
@endsection

{{-- @section('intro')
  @include('bimgo::layouts.ecommerce3.intro')
@endsection --}}

@section('content')
  @foreach ($blocks as $item)
    @include('bimgo::blocks.'.$item->name, ['data' => json_decode($item->details)])
  @endforeach

@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce3.footer')
@endsection 