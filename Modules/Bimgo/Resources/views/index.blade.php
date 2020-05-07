@extends('bimgo::layouts.master')

@section('header')
    @include('bimgo::layouts.header')
@endsection

@section('content')
    @foreach ($blocks as $item)
        @include('bimgo::blocks.'.$item->name, ['data' => json_decode($item->details)])
    @endforeach
@endsection