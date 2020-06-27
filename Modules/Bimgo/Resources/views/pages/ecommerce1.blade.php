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
  @include('bimgo::layouts.ecommerce1.footer')
@endsection

@section('js')
  <script>
    $(function () {
      $('.material-tooltip-main').tooltip({
        template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
      });
    })
    
    function addcart(urli){
      $.ajax({
        type: "get",
        url: urli,
        success: function (response) {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: response.name+', Agregado a tu Carrito',
            showConfirmButton: true,
            timer: 3000
          });
          //$('#cartTotalQuantity').html('{{ \Cart::getTotalQuantity() }}');
        }
      });
    }
  </script>
@endsection