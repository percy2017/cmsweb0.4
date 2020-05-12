@extends('webstreaming::layouts.master')
@section('css')
  <style>
    html,
    body,
    header,
    .intro-2 {
        height: 100%;
    }

    @media (max-width: 740px) {

        html,
        body,
        header,
        .intro-2 {
            height: 900px;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .intro-2 {
            height: 900px;
        }
    }
  </style>
@endsection
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
