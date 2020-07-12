@extends('bimgo::layouts.ecommerce3.master')

@section('header')
  @include('bimgo::layouts.ecommerce3.header')
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
          $myname = explode('.', $item->name);        
          $myname = $myname[1];
          $aux = $aux->$myname;
          $data = $aux->value;
          $data = explode('::', $data);
          $data = str_replace('()','',$data);
          $name_espace = $data[0];
          $function = $data[1];
        @endphp
        @include('bimgo::blocks.'.$item->name, ['data' => $name_espace::$function(), 'block' => json_decode($item->details)])
        @break
    @endswitch
  @endforeach


@endsection


@section('footer')
  @include('bimgo::layouts.ecommerce3.footer')
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