<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if($error != 'notfound')
            <title>{{ $meeting->name }}</title>
            <meta property="og:url"           content="{{ url('conferencia/'.$meeting->slug) }}" />
            <meta property="og:type"          content="Meeting" />
            <meta property="og:title"         content="{{ $meeting->name }}" />
            <meta property="og:description"   content="{{ $meeting->descriptions }}" />
            <meta property="og:image"         content="{{ url('storage/'.str_replace('.', '_facebook.', $meeting->banner)) }}" />
        @else
            <title>HiStream | Error</title>
        @endif

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        @if (!$error)
            <style>
                body, html, #meet {
                    margin: 0;
                    overflow-x: hidden; 
                    overflow-y: auto;
                }
                #dark_mask {
                    position: fixed;
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    top: 0px;
                    right: 0px;
                    left: 0px;
                    height: 100vh;
                    z-index: 1000;
                }
            </style>
        @else
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
        @endif
    </head>
    <body>
        @if (!$error)
            <div id="meet"></div>
            <div id="countdown_message" style="display: none">
                <div class="d-flex justify-content-center align-items-center" id="dark_mask">
                    <h1 class="mr-3 pr-3 align-top inline-block align-content-center" id="message_finish">k</h1>
                </div>
            </div>
            <script src="{{ setting('histream.server').'/external_api.js' }}"></script>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
                $(document).ready(function(){
                    $.get('{{ url("conferencia/join/increment/".$meeting->id) }}');
                    let enable_alert = true;
                    let alert_finish = false;
                    let hour_finish, min_finish, sec_finish;
                    let getFinishMeet = setInterval(() => {
                        var date = new Date();
                        var finish = new Date({{ date("Y, m, d, H, i, s", strtotime($meeting->day.' '.$meeting->finish)) }});
                        // Quitar 1 mes de la fecha generada en javascript
                        let aux = finish.getMonth()-1;
                        finish.setMonth(aux)

                        hour_finish = parseInt((finish-date)/(1000*60*60));
                        min_finish = parseInt((finish-date)/(1000*60)%60);
                        sec_finish = parseInt((finish-date)/1000);

                        if(hour_finish == 0 && min_finish == 5 && enable_alert){
                            alert_finish = true
                            enable_alert =  false;
                        }
                        if(sec_finish <= 60){
                            $('#countdown_message').css('display', 'block')
                            $('#message_finish').text(`Tu reunión finalizará en ${sec_finish >= 0 ? sec_finish : 0} segundos.`)
                        }
                        if(sec_finish<0){
                            $('#countdown_message').css('display', 'none')
                            clearInterval(getFinishMeet);
                            window.location = '{{ url("conferencia/".$meeting->slug) }}/finish';
                        }

                        if(alert_finish){
                            alert_finish = false;
                            Swal.fire({
                                icon: 'warning',
                                title: 'Advertencia',
                                text: 'Te quedan 5 minutos antes de que se acabe el tiempo de tu reunión!',
                                footer: '<a href="https://histream.loginweb.dev" target="_blank">Por qué ocurre esto?</a>'
                            })

                        }
                    }, 300);
                });
                
                const domain = "{{ str_replace('https://', '', setting('histream.server')) }}";
                const options = {
                    roomName: '{{ $meeting->slug }}',
                    // width: screen.width,
                    height: screen.height-100,
                    parentNode: document.querySelector('#meet'),
                    devices: {
                        audioInput: '<deviceLabel>',
                        audioOutput: '<deviceLabel>',
                        videoInput: '<deviceLabel>'
                    },
                };

                let newParticipant = true;
                let maxParticipants = '{{ $plan_user->status }}' == 1 ? '{{ $plan_user->max_person }}' : '{{ $plan_free->max_person }}';
                const api = new JitsiMeetExternalAPI(domain, options);
                api.addEventListener('participantJoined', res=>{
                    // Update numbre of participants
                    $.get('{{ url("conferencia/join/update_active/".$meeting->id) }}/'+api.getNumberOfParticipants());
                    setTimeout(() => {
                        if(newParticipant && api.getNumberOfParticipants() > maxParticipants){
                            api.dispose();
                            window.location = '{{ url("conferencia/".$meeting->slug."/max_participants") }}'
                        }
                        newParticipant = false;
                    }, 1000);
                });

                @if(Auth::user())
                    setInterval(() => {
                        $.get('{{ url("conferencia/join/update_active/".$meeting->id) }}/'+api.getNumberOfParticipants());
                    }, 60000);
                @endif

                // Deshabilitar que se es nuevo participante en caso de ser el moderador
                setTimeout(() => {
                    newParticipant = false;
                }, 60000)

                function warning(){
                    $.get('{{ url("conferencia/join/decrement/".$meeting->id) }}');
                    // return "";
                }
                window.onbeforeunload = warning;
            </script>
        @else
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
            <script>
                var days, hours, minutes, seconds, diff;
                $(document).ready(function(){
                    @if($error == 'not_start')
                        let getStarthMeet = setInterval(() => {
                            var date = new Date();
                            var start = new Date({{ date("Y, m, d, H, i, s", strtotime($meeting->day.' '.$meeting->start)) }});
                            // Quitar 1 mes de la fecha generada en javascript
                            let aux = start.getMonth()-1;
                            start.setMonth(aux)
                            diff = start-date;
                            days = parseInt(diff/(1000*60*60*24));
                            hours = parseInt(diff/(1000*60*60)%24).toString().padStart(2, 0);
                            minutes = parseInt(diff/(1000*60)%60).toString().padStart(2, 0);
                            seconds = parseInt(diff/(1000)%60).toString().padStart(2, 0);
                            
                            if(diff<300){
                                clearInterval(getStarthMeet);
                                window.location = '{{ url("conferencia/".$meeting->slug) }}'
                            }else{
                                $('#counter').html(`
                                    <h5>Inicia en</h5>
                                    <h3>${days ? (days == 1 ? days+'<small>día </small> ' : days+'<small>días </small> ') : ''} ${hours+'<small>h </small>'} : ${minutes+'<small>m </small>'} : ${(seconds > 0 ? seconds : '00')+'<small>s </small>'}</h3>
                                `);
                            }
                        }, 300);
                    @endif
                    @if($error == 'max_participants')
                        $.get('{{ url("conferencia/join/reject/".$meeting->id) }}');
                    @endif
                });
            </script>
        @endif
    </body>
</html>
