@extends('bimgo::layouts.ecommerce4.master')

@section('header')
  @include('bimgo::layouts.ecommerce4.header')
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
					$data = explode('::', $data);
					$data = str_replace('()','',$data);
					$name_espace = $data[0];
					$function = $data[1];
				@endphp
				@include('bimgo::blocks.'.$item->name, ['data' => $name_espace::$function()])
				@break
		@endswitch
	@endforeach
@endsection

@section('footer')
  @include('bimgo::layouts.ecommerce4.footer')
@endsection