@extends('webstreaming::layouts.master')
@section('header')
    @include('webstreaming::layouts.header')
@endsection
@section('content')

<main>

  @foreach ($blocks as $item)
  @include('webstreaming::blocks.'.$item->name, ['data' => json_decode($item->details)])
  @endforeach
   
</main>

@endsection