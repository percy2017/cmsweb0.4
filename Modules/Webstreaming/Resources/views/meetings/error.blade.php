<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if($error == 'not_start')
            <title>{{ $meeting->name }}</title>
            <meta property="og:url"           content="{{ url('conferencia/'.$meeting->slug) }}" />
            <meta property="og:type"          content="Meeting" />
            <meta property="og:title"         content="{{ $meeting->name }}" />
            <meta property="og:description"   content="{{ $meeting->descriptions }}" />
            <meta property="og:image"         content="{{ url('storage/'.str_replace('.', '_facebook.', $meeting->banner)) }}" />
        @else
            <title>HiStream | Error</title>
        @endif
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                background: #0A68BF;
                color: white
            }
            .page-wrap {
                min-height: 100vh;
            }
            small{
              font-size: 12px
            }
        </style>
    </head>
    <body>
        @switch($error)
            @case('notfound')
                @php
                    $code = 404;
                    $description = 'Reunión no encontrada.'
                @endphp
                @break
            @case('max_participants')
                @php
                    $code = 403;
                    $description = 'La reunión no permite más participantes.'
                @endphp
                @break
            @case('not_start')
                @php
                    $code = 419;
                    $description = 'La reunión aún no ha inicado.'
                @endphp
            @break
            @case('finish')
                @php
                    $code = 419;
                    $description = 'La reunión ha finalizado.'
                @endphp
            @break  
            @default
            @php
                $code = 500;
                $description = 'Error desconocido.'
            @endphp
        @endswitch

        <div class="page-wrap d-flex flex-row align-items-center">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-12 text-center">
                      <span class="display-2 d-block">{{ $code }}</span>
                      <div class="mb-4 lead">{{ $description }}</div>
                      <div class="mb-4 lead" id="counter"></div>
                  </div>
              </div>
          </div>
      </div>
    </body>

    <script>
        var days, hours, minutes, seconds, diff;
        $(document).ready(function(){
          @if($error == 'not_start')
            setInterval(() => {
                var date = new Date();
                var start = new Date({{ date("Y, m, d, H, i, s", strtotime($meeting->day.' '.$meeting->start)) }});
                // Quitar 1 mes de la fecha generada en javascript
                let aux = start.getMonth()-1;
                start.setMonth(aux)
                diff = start-date;
                days = parseInt(diff/(1000*60*60*24));
                hours = parseInt(diff/(1000*60*60)%60);
                minutes = parseInt(diff/(1000*60)%60);
                seconds = parseInt(diff/(1000)%60);
                $('#counter').html(`
                  <h5>Inicia en</h5>
                  <h3>${days ? days+' <small>Día(s)</small>' : ''} ${hours+' <small>h</small>'} : ${minutes+' <small>m</small>'} : ${seconds+' <small>s</small>'}</h3>
                `);
                if(diff<0){
                  window.location = '{{ url("conferencia/".$meeting->slug) }}'
                }
            }, 300);
          @endif
        });
    </script>
</html>
