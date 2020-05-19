@extends('medicweb::layouts.master')

@section('header')
    @include('medicweb::layouts.header')
@endsection

@section('content')
    @foreach ($blocks as $item)
        @include('medicweb::blocks.'.$item->name, ['data' => json_decode($item->details)])
    @endforeach
    
@endsection

@section('footer')
    @include('medicweb::layouts.footer')
@endsection